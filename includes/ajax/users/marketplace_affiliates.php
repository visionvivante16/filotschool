<?php

/**
 * ajax -> users -> marketplace affiliates
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// check demo account
if ($user->_data['user_demo']) {
  modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

try {

  switch ($_POST['do']) {
    case 'promote':

      // valid inputs
      if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        throw new BadRequestException(__("Invalid request"));
      }

      // create/fetch the affiliate relationship for this product
      $affiliate = $user->marketplace_affiliate_promote($_POST['id']);

      return_json([
        'success' => true,
        'already_exists' => $affiliate['already_exists'],
        'affiliate_link' => $affiliate['affiliate_link'],
      ]);
      break;

    default:
      _error(403);
      break;
  }
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
