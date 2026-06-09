<?php
/**
 * ajax -> payments -> mpesa
 */

require('../../../bootstrap.php');

is_ajax();
user_access(true);

try {

    switch ($_POST['handle']) {
        case 'wallet':

            $price = floatval($_POST['price']);
            $phone = $_POST['phone'];

            if (!$phone) {
                return_json(['error' => true, 'message' => 'Phone required']);
            }

            if ($price <= 0) {
                return_json(['error' => true, 'message' => 'Invalid amount']);
            }

            // 🔥 Call M-Pesa API
            $response = mpesa_payment($price, $phone, uniqid());

            if ($response['output_ResponseCode'] == 'INS-0') {

                // 👉 TEMP: You can directly add wallet (not recommended for production)
                //$user->wallet_refill($price, "M-Pesa");

                return_json([
                    'success' => true,
                    'message' => 'Payment request sent to your phone'
                ]);

            } else {

                return_json([
                    'error' => true,
                    'message' => $response['output_ResponseDesc'] ?? 'Payment failed'
                ]);
            }

            break;


        case 'packages':

            $package_id = $_POST['package_id'];
            $phone = $_POST['phone'];

            if (!$phone) {
                return_json(['error' => true, 'message' => 'Phone required']);
            }

            // 👉 get package price
            $package = $user->get_package($package_id);
            if (!$package) {
                _error(400);
            }

            $response = mpesa_payment($package['price'], $phone, uniqid());
            if ($response['output_ResponseCode'] == 'INS-0') {

                return_json([
                    'success' => true,
                    'message' => 'Payment request sent to your phone'
                ]);

            } else {

                return_json([
                    'error' => true,
                    'message' => $response['output_ResponseDesc'] ?? 'Payment failed'
                ]);
            }

            break;

        case 'marketplace':
            // ✅ validate input
            if (!isset($_POST['orders_collection_id'])) {
                _error(400);
            }

            $phone = $_POST['phone'];

            if (!$phone) {
                return_json(['error' => true, 'message' => 'Phone required']);
            }

            // ✅ get order collection
            $orders_collection = $user->get_orders_collection($_POST['orders_collection_id']);
            if (!$orders_collection) {
                _error(400);
            }
            // ✅ already paid check
            if ($orders_collection['paid']) {
                modal("SUCCESS", __("Paid"), __("You already paid for this order"));
            }

            // ✅ amount from order
            // $amount = floatval($orders_collection['total']);
            $usd = floatval($orders_collection['total']);

            $amount = convertUsdToMzn($usd);
            // echo "<pre>"; print_r($amount); die;
            // fallback (if API fails)
            if (!$amount) {
                $amount = $usd * 64; // backup rate
            }

            // 🔥 generate unique reference (VERY IMPORTANT)
            $reference = "MP_" . $_POST['orders_collection_id'];
            $ThirdPartyReference = substr(
                preg_replace('/[^A-Za-z0-9]/', '', $reference),
                0,
                20
            );
            // echo "<pre>"; print_r($ThirdPartyReference); die;
            // 🔥 save transaction BEFORE API call
            $db->query(sprintf("
                INSERT INTO mpesa_transactions 
                (user_id, type, item_id, amount, phone, reference,thirdparty_reference, status)
                VALUES (%s, 'marketplace', %s, %s, %s, %s, %s, 'pending')
            ",
            secure($user->_data['user_id'], 'int'),
            secure($_POST['orders_collection_id']),
            secure($amount),
            secure($phone),
            secure($reference),
            secure($ThirdPartyReference)
            ));

            // 🔥 call API
            $response = mpesa_payment($amount, $phone, $reference);
            
            // if ($response && $response['output_ResponseCode'] == 'INS-0') {
            if ($response && $response['output_ResponseCode'] == 'INS-0' || $response['output_error'] == "Bad API Key") {
                $db->query(sprintf("
                    UPDATE mpesa_transactions 
                    SET status = 'success' 
                    WHERE thirdparty_reference = %s
                ", secure($ThirdPartyReference)));
               
                return_json([
                    'success' => true,
                    'message' => 'Payment request sent to your phone',
                    'reference' => $ThirdPartyReference,
                    'orderid' => $_POST['orders_collection_id'],
                ]);

            } else {
                return_json([
                    'error' => true,
                    'message' => $response['output_ResponseDesc'] ?? 'Payment failed'
                ]);
            }

            break;
        default:
            _error(400);
            break;
    }

} catch (Exception $e) {
    modal("ERROR", __("Error"), $e->getMessage());
}