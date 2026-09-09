<?php

/**
 * ajax -> admin -> marketplace affiliates
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin permission
if (!$user->_is_admin) {
  modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// check demo account
if ($user->_data['user_demo']) {
  modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

try {

  // handle modal views (GET)
  if (isset($_GET['do'])) {

    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      _error(400);
    }

    $return = [];

    switch ($_GET['do']) {
      case 'view_affiliate':
        $get_affiliate = $db->query(sprintf(
          "SELECT marketplace_affiliates.*, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture, posts_products.name AS product_name,
            (SELECT COUNT(*) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS sales_count,
            (SELECT COALESCE(SUM(sale_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS sales_value,
            (SELECT COALESCE(SUM(commission_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id AND status = 'pending') AS pending_commission,
            (SELECT COALESCE(SUM(commission_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id AND status = 'approved') AS approved_commission,
            (SELECT COALESCE(SUM(commission_amount), 0) FROM marketplace_affiliate_commissions WHERE marketplace_affiliate_commissions.marketplace_affiliate_id = marketplace_affiliates.id) AS total_commission
            FROM marketplace_affiliates INNER JOIN users ON marketplace_affiliates.user_id = users.user_id INNER JOIN posts_products ON marketplace_affiliates.product_post_id = posts_products.post_id
            WHERE marketplace_affiliates.id = %s",
          secure($_GET['id'], 'int')
        )) or _error("SQL_ERROR_THROWEN");
        if ($get_affiliate->num_rows == 0) {
          _error(400);
        }
        $affiliate = $get_affiliate->fetch_assoc();
        $affiliate['user_picture'] = get_picture($affiliate['user_picture'], $affiliate['user_gender']);
        $affiliate['user_fullname'] = ($system['show_usernames_enabled']) ? $affiliate['user_name'] : $affiliate['user_firstname'] . " " . $affiliate['user_lastname'];
        $affiliate['affiliate_link'] = $system['system_url'] . '/post.php?post_id=' . $affiliate['product_post_id'] . '&ref=' . $affiliate['referral_code'];
        $smarty->assign('affiliate', $affiliate);
        $return['template'] = $smarty->fetch("ajax.marketplace_affiliate.view.tpl");
        $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template); initialize_modal();";
        break;

      case 'view_commission':
        $get_commission = $db->query(sprintf(
          "SELECT marketplace_affiliate_commissions.*, users.user_name, users.user_firstname, users.user_lastname, users.user_gender, users.user_picture, posts_products.name AS product_name, orders.order_hash, orders.buyer_id,
            buyers.user_name AS buyer_user_name, buyers.user_firstname AS buyer_firstname, buyers.user_lastname AS buyer_lastname, buyers.user_gender AS buyer_gender, buyers.user_picture AS buyer_picture
            FROM marketplace_affiliate_commissions
            INNER JOIN users ON marketplace_affiliate_commissions.user_id = users.user_id
            INNER JOIN posts_products ON marketplace_affiliate_commissions.product_post_id = posts_products.post_id
            INNER JOIN orders ON marketplace_affiliate_commissions.order_id = orders.order_id
            INNER JOIN users AS buyers ON orders.buyer_id = buyers.user_id
            WHERE marketplace_affiliate_commissions.id = %s",
          secure($_GET['id'], 'int')
        )) or _error("SQL_ERROR_THROWEN");
        if ($get_commission->num_rows == 0) {
          _error(400);
        }
        $commission = $get_commission->fetch_assoc();
        $commission['user_picture'] = get_picture($commission['user_picture'], $commission['user_gender']);
        $commission['user_fullname'] = ($system['show_usernames_enabled']) ? $commission['user_name'] : $commission['user_firstname'] . " " . $commission['user_lastname'];
        $commission['buyer_picture'] = get_picture($commission['buyer_picture'], $commission['buyer_gender']);
        $commission['buyer_fullname'] = ($system['show_usernames_enabled']) ? $commission['buyer_user_name'] : $commission['buyer_firstname'] . " " . $commission['buyer_lastname'];
        $smarty->assign('commission', $commission);
        $return['template'] = $smarty->fetch("ajax.marketplace_affiliate_commission.view.tpl");
        $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.template); initialize_modal();";
        break;

      default:
        _error(403);
        break;
    }

    return_json($return);
  }

  // valid inputs
  if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    _error(400);
  }

  switch ($_POST['handle']) {
    case 'suspend':
      $db->query(sprintf("UPDATE marketplace_affiliates SET status = 'suspended', update_time = %s WHERE id = %s", secure($date), secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      break;

    case 'activate':
      $db->query(sprintf("UPDATE marketplace_affiliates SET status = 'active', update_time = %s WHERE id = %s", secure($date), secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      break;

    case 'approve_commission':
      // new commissions are auto-approved and paid out at checkout time (see marketplace_affiliate_process_commissions()) -
      // this only remains to manually clear any commission left over in 'pending' from before that change
      $get_commission = $db->query(sprintf("SELECT * FROM marketplace_affiliate_commissions WHERE id = %s", secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      if ($get_commission->num_rows == 0) {
        _error(400);
      }
      $commission = $get_commission->fetch_assoc();
      if ($commission['status'] != 'pending') {
        throw new Exception(__("This commission has already been reviewed"));
      }
      $db->query(sprintf("UPDATE marketplace_affiliate_commissions SET status = 'approved', approved_time = %s, update_time = %s WHERE id = %s", secure($date), secure($date), secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      $db->query(sprintf("UPDATE users SET user_wallet_balance = user_wallet_balance + %s WHERE user_id = %s", secure($commission['commission_amount'], 'float'), secure($commission['user_id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      $user->wallet_set_transaction($commission['user_id'], 'market_affiliate_commission', $commission['id'], $commission['commission_amount'], 'in');
      break;

    case 'reject_commission':
      $get_commission = $db->query(sprintf("SELECT * FROM marketplace_affiliate_commissions WHERE id = %s", secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      if ($get_commission->num_rows == 0) {
        _error(400);
      }
      $commission = $get_commission->fetch_assoc();
      if ($commission['status'] != 'pending') {
        throw new Exception(__("This commission has already been reviewed"));
      }
      $db->query(sprintf("UPDATE marketplace_affiliate_commissions SET status = 'rejected', rejected_time = %s, update_time = %s WHERE id = %s", secure($date), secure($date), secure($_POST['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
      break;

    default:
      _error(403);
      break;
  }

  // return & exit
  return_json();
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
