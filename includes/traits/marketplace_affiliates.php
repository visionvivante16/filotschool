<?php

/**
 * trait -> marketplace affiliates
 *
 * New, isolated affiliate/referral/commission program for marketplace
 * products. Completely independent from the legacy AffiliatesTrait
 * (users_affiliates / affiliates_payments) — no shared tables, settings,
 * or business logic.
 *
 * @package Sngine
 * @author Zamblek
 */

trait MarketplaceAffiliatesTrait
{

  /* ------------------------------- */
  /* Marketplace Affiliates */
  /* ------------------------------- */

  /**
   * marketplace_affiliate_promote
   *
   * Creates (or returns the existing) affiliate relationship between the
   * current user and a marketplace product, and returns the unique
   * referral link.
   *
   * @param int $product_post_id
   * @return array
   */
  public function marketplace_affiliate_promote($product_post_id)
  {
    global $db, $system, $date;

    if (!$system['marketplace_affiliate_enabled']) {
      throw new AuthorizationException(__("The affiliate program has been disabled by the admin"));
    }

    /* get product post */
    $post = $this->get_post($product_post_id, false, true);
    if (!$post || $post['post_type'] != 'product') {
      throw new NoDataException(__("This product could not be found"));
    }

    /* an affiliate can't promote their own product */
    if ($post['author_id'] == $this->_data['user_id']) {
      throw new AuthorizationException(__("You can't promote your own product"));
    }

    /* check for an existing affiliate relationship for this user/product */
    $get_affiliate = $db->query(sprintf(
      "SELECT * FROM marketplace_affiliates WHERE user_id = %s AND product_post_id = %s",
      secure($this->_data['user_id'], 'int'),
      secure($product_post_id, 'int')
    )) or _error("SQL_ERROR_THROWEN");

    if ($get_affiliate->num_rows > 0) {
      $affiliate = $get_affiliate->fetch_assoc();
      return [
        'already_exists' => true,
        'referral_code' => $affiliate['referral_code'],
        'affiliate_link' => $this->_get_marketplace_affiliate_link($product_post_id, $affiliate['referral_code']),
      ];
    }

    /* commission rate is locked in at creation time, from the current admin-configured rate */
    $commission_rate = floatval($system['marketplace_affiliate_commission_rate']);
    $referral_code = $this->_generate_marketplace_affiliate_code();

    $db->query(sprintf(
      "INSERT INTO marketplace_affiliates (user_id, product_post_id, referral_code, commission_rate, status, insert_time, update_time) VALUES (%s, %s, %s, %s, 'active', %s, %s)",
      secure($this->_data['user_id'], 'int'),
      secure($product_post_id, 'int'),
      secure($referral_code),
      secure($commission_rate, 'float'),
      secure($date),
      secure($date)
    )) or _error("SQL_ERROR_THROWEN");

    return [
      'already_exists' => false,
      'referral_code' => $referral_code,
      'affiliate_link' => $this->_get_marketplace_affiliate_link($product_post_id, $referral_code),
    ];
  }


  /**
   * marketplace_affiliate_track_click
   *
   * Validates a `?ref=` referral code on a product post, records a
   * deduplicated click, and stores attribution in a per-product cookie so it
   * survives navigation into checkout. Called from post.php after the post
   * is loaded.
   *
   * @param array $post
   * @return void
   */
  public function marketplace_affiliate_track_click($post)
  {
    global $db, $system, $date;

    if (!$system['marketplace_affiliate_enabled'] || $post['post_type'] != 'product' || !isset($_GET['ref']) || is_empty($_GET['ref'])) {
      return;
    }

    $referral_code = $_GET['ref'];

    $get_affiliate = $db->query(sprintf(
      "SELECT * FROM marketplace_affiliates WHERE referral_code = %s AND product_post_id = %s AND status = 'active'",
      secure($referral_code),
      secure($post['post_id'], 'int')
    )) or _error("SQL_ERROR_THROWEN");
    if ($get_affiliate->num_rows == 0) {
      return;
    }
    $affiliate = $get_affiliate->fetch_assoc();

    /* an affiliate previewing their own link isn't a referral */
    if ($this->_logged_in && $affiliate['user_id'] == $this->_data['user_id']) {
      return;
    }

    /* dedup: count a click at most once per visitor per affiliate link */
    $visitor_hash = ($this->_logged_in) ? 'u' . $this->_data['user_id'] : 'g' . md5(get_user_ip());
    $check_click = $db->query(sprintf(
      "SELECT COUNT(*) AS count FROM marketplace_affiliate_clicks WHERE marketplace_affiliate_id = %s AND visitor_hash = %s",
      secure($affiliate['id'], 'int'),
      secure($visitor_hash)
    )) or _error("SQL_ERROR_THROWEN");
    if ($check_click->fetch_assoc()['count'] == 0) {
      $db->query(sprintf(
        "INSERT INTO marketplace_affiliate_clicks (marketplace_affiliate_id, product_post_id, referral_code, visitor_hash, insert_time) VALUES (%s, %s, %s, %s, %s)",
        secure($affiliate['id'], 'int'),
        secure($post['post_id'], 'int'),
        secure($referral_code),
        secure($visitor_hash),
        secure($date)
      )) or _error("SQL_ERROR_THROWEN");
      $db->query(sprintf("UPDATE marketplace_affiliates SET clicks_count = clicks_count + 1 WHERE id = %s", secure($affiliate['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
    }

    /* last valid referral wins before purchase */
    set_cookie($this->_marketplace_affiliate_cookie_name($post['post_id']), $referral_code);
  }


  /**
   * marketplace_affiliate_attribute_order_item
   *
   * Called at checkout time (while the buyer's attribution cookie is still
   * readable) to record which affiliate, if any, referred a specific order
   * item. Does not create a commission yet — that only happens once the
   * payment is confirmed.
   *
   * @param int $order_item_id
   * @param int $product_post_id
   * @return void
   */
  public function marketplace_affiliate_attribute_order_item($order_item_id, $product_post_id)
  {
    global $db, $date;

    $cookie_name = $this->_marketplace_affiliate_cookie_name($product_post_id);
    if (!isset($_COOKIE[$cookie_name]) || is_empty($_COOKIE[$cookie_name])) {
      return;
    }
    $referral_code = $_COOKIE[$cookie_name];

    $get_affiliate = $db->query(sprintf(
      "SELECT * FROM marketplace_affiliates WHERE referral_code = %s AND product_post_id = %s AND status = 'active'",
      secure($referral_code),
      secure($product_post_id, 'int')
    )) or _error("SQL_ERROR_THROWEN");
    if ($get_affiliate->num_rows == 0) {
      return;
    }
    $affiliate = $get_affiliate->fetch_assoc();

    /* the buyer can't attribute a sale to themselves */
    if ($affiliate['user_id'] == $this->_data['user_id']) {
      return;
    }

    $db->query(sprintf(
      "INSERT IGNORE INTO marketplace_affiliate_order_items (order_item_id, marketplace_affiliate_id, product_post_id, referral_code, insert_time) VALUES (%s, %s, %s, %s, %s)",
      secure($order_item_id, 'int'),
      secure($affiliate['id'], 'int'),
      secure($product_post_id, 'int'),
      secure($referral_code),
      secure($date)
    )) or _error("SQL_ERROR_THROWEN");
  }


  /**
   * marketplace_affiliate_process_commissions
   *
   * Called once an order is confirmed as paid. Creates a pending commission
   * for every order item that carries a valid affiliate attribution.
   * `order_item_id` is UNIQUE on marketplace_affiliate_commissions, and the
   * insert uses INSERT IGNORE, so a repeated payment-confirmation call for
   * the same order can never create a duplicate commission.
   *
   * @param array $order
   * @param array $order_items
   * @return void
   */
  public function marketplace_affiliate_process_commissions($order, $order_items)
  {
    global $db, $date;

    foreach ($order_items as $order_item) {
      $get_attribution = $db->query(sprintf("SELECT * FROM marketplace_affiliate_order_items WHERE order_item_id = %s", secure($order_item['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      if ($get_attribution->num_rows == 0) {
        continue;
      }
      $attribution = $get_attribution->fetch_assoc();

      $get_affiliate = $db->query(sprintf("SELECT * FROM marketplace_affiliates WHERE id = %s", secure($attribution['marketplace_affiliate_id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      if ($get_affiliate->num_rows == 0) {
        continue;
      }
      $affiliate = $get_affiliate->fetch_assoc();

      /* re-validate at payment time: affiliate may have been suspended, or this may be a self-purchase */
      if ($affiliate['status'] != 'active' || $affiliate['user_id'] == $order['buyer_id']) {
        continue;
      }

      $sale_amount = $order_item['price'] * $order_item['quantity'];
      $commission_amount = $sale_amount * $affiliate['commission_rate'] / 100;

      $db->query(sprintf(
        "INSERT IGNORE INTO marketplace_affiliate_commissions (marketplace_affiliate_id, user_id, product_post_id, order_id, order_item_id, sale_amount, commission_rate, commission_amount, status, insert_time, update_time) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, 'pending', %s, %s)",
        secure($affiliate['id'], 'int'),
        secure($affiliate['user_id'], 'int'),
        secure($order_item['product_post_id'], 'int'),
        secure($order['order_id'], 'int'),
        secure($order_item['id'], 'int'),
        secure($sale_amount, 'float'),
        secure($affiliate['commission_rate'], 'float'),
        secure($commission_amount, 'float'),
        secure($date),
        secure($date)
      )) or _error("SQL_ERROR_THROWEN");
    }
  }


  /**
   * _marketplace_affiliate_cookie_name
   *
   * @param int $product_post_id
   * @return string
   */
  private function _marketplace_affiliate_cookie_name($product_post_id)
  {
    return 'market_ref_' . $product_post_id;
  }


  /**
   * marketplace_affiliate_dashboard
   *
   * Returns the current user's affiliate stats (total clicks/sales/sales
   * value/commissions) and the list of products they're promoting, each
   * with its own per-product stats and affiliate link.
   *
   * @return array
   */
  public function marketplace_affiliate_dashboard()
  {
    global $db;

    $stats = [
      'total_clicks' => 0,
      'total_sales' => 0,
      'total_sales_value' => 0,
      'accumulated_commission' => 0,
      'pending_commission' => 0,
      'approved_commission' => 0,
    ];

    $get_products = $db->query(sprintf(
      "SELECT marketplace_affiliates.*, posts_products.name AS product_name,
        (SELECT COUNT(*) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS sales_count,
        (SELECT COALESCE(SUM(sale_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS sales_value,
        (SELECT COALESCE(SUM(commission_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS total_commission
        FROM marketplace_affiliates INNER JOIN posts_products ON marketplace_affiliates.product_post_id = posts_products.post_id
        WHERE marketplace_affiliates.user_id = %s ORDER BY marketplace_affiliates.id DESC",
      secure($this->_data['user_id'], 'int')
    )) or _error("SQL_ERROR_THROWEN");

    $products = [];
    if ($get_products->num_rows > 0) {
      while ($row = $get_products->fetch_assoc()) {
        $row['affiliate_link'] = $this->_get_marketplace_affiliate_link($row['product_post_id'], $row['referral_code']);
        $stats['total_clicks'] += (int)$row['clicks_count'];
        $stats['total_sales'] += (int)$row['sales_count'];
        $stats['total_sales_value'] += (float)$row['sales_value'];
        $stats['accumulated_commission'] += (float)$row['total_commission'];
        $products[] = $row;
      }
    }

    $get_commission_stats = $db->query(sprintf(
      "SELECT status, COALESCE(SUM(commission_amount), 0) AS total FROM marketplace_affiliate_commissions WHERE user_id = %s GROUP BY status",
      secure($this->_data['user_id'], 'int')
    )) or _error("SQL_ERROR_THROWEN");
    while ($row = $get_commission_stats->fetch_assoc()) {
      if ($row['status'] == 'pending') {
        $stats['pending_commission'] = (float)$row['total'];
      } elseif ($row['status'] == 'approved') {
        $stats['approved_commission'] = (float)$row['total'];
      }
    }

    return ['stats' => $stats, 'products' => $products];
  }


  /**
   * _generate_marketplace_affiliate_code
   *
   * @return string
   */
  private function _generate_marketplace_affiliate_code()
  {
    global $db;
    do {
      $code = 'FS-' . strtoupper(bin2hex(random_bytes(4)));
      $check_code = $db->query(sprintf("SELECT COUNT(*) AS count FROM marketplace_affiliates WHERE referral_code = %s", secure($code))) or _error("SQL_ERROR_THROWEN");
    } while ($check_code->fetch_assoc()['count'] > 0);
    return $code;
  }


  /**
   * _get_marketplace_affiliate_link
   *
   * @param int $product_post_id
   * @param string $referral_code
   * @return string
   */
  private function _get_marketplace_affiliate_link($product_post_id, $referral_code)
  {
    global $system;
    return $system['system_url'] . '/post.php?post_id=' . $product_post_id . '&ref=' . $referral_code;
  }
}
