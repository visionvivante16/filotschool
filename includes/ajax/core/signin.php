<?php

/**
 * ajax -> core -> signin
 * 
 * @package Sngine
 * @author Zamblek
 */

// set override_shutdown
$override_shutdown = true;

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if ($user->_logged_in) {
  return_json(['callback' => 'window.location.reload();']);
}

try {

  // signin
  $remember = (isset($_POST['remember'])) ? true : false;
  $user->sign_in($_POST['username_email'], $_POST['password'], $remember, true);

  // redirect back to where the user came from, if known (e.g. a product page they were referred to)
  $callback_redirect = (isset($_SESSION['callback_redirect'])) ? $_SESSION['callback_redirect'] : '';
  unset($_SESSION['callback_redirect']);

  // return
  if ($callback_redirect) {
    return_json(['callback' => 'window.location.href = ' . json_encode($system['system_url'] . $callback_redirect) . ';']);
  } else {
    return_json(['callback' => 'window.location.reload();']);
  }
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
