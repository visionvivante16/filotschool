<?php
// includes/ajax/check_mpesa_status.php

require('../../../bootstrap.php');

$ref = $_GET['ref'];
$orders_collection_id = $_GET['orders_collection_id'];

$result = $db->query(sprintf("
    SELECT status, is_processed 
    FROM mpesa_transactions 
    WHERE thirdparty_reference = %s
    LIMIT 1
", secure($ref)));

$data = $result->fetch_assoc();

$paid = false;
if ($data && $data['status'] == 'success') {
    $paid = true;

    // 🔒 Run only once
    if ($data['is_processed'] == 0) {

        // ✅ Get order collection FIRST
        $orders_collection = $user->get_orders_collection($orders_collection_id);
        // ⚠️ Safety check
        if (!empty($orders_collection) && $orders_collection['total'] > 0) {

            // ✅ Mark order as paid
            // $user->mark_orders_collection_as_paid($orders_collection_id);
            $user->wallet_marketplace_mpesa_success($orders_collection_id, $ref);
            // ✅ Log payment
            $user->log_payment(
                $user->_data['user_id'],
                $orders_collection['total'],
                'mpesa',
                'marketplace'
            );
        }
        // ✅ Mark as processed
        $db->query(sprintf("
            UPDATE mpesa_transactions 
            SET is_processed = 1 
            WHERE thirdparty_reference = %s
        ", secure($ref)));
    }
}

echo json_encode([
    'paid' => $paid
]);

// echo json_encode([
//     'paid' => ($data && $data['status'] == 'success')
// ]);

?>