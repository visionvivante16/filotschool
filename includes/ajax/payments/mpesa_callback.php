<?php

require('../../../bootstrap.php');

// get raw input
file_put_contents(__DIR__ . '/mpesa_log.txt', "CALLED\n", FILE_APPEND);
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// log for debugging
file_put_contents(__DIR__ . '/mpesa_log.txt', $input . "\n", FILE_APPEND);

// extract values
$reference = $data['output_ThirdPartyReference'] ?? null;
$response_code = $data['output_ResponseCode'] ?? null;
$transaction_id = $data['output_TransactionID'] ?? null;

if (!$reference) {
    http_response_code(400);
    exit;
}

// find transaction
$transaction = $db->query(sprintf("
    SELECT * FROM mpesa_transactions WHERE thirdparty_reference = %s
", secure($reference)))->fetch_assoc();

if (!$transaction) {
    http_response_code(404);
    exit;
}

// ✅ SUCCESS
if ($response_code == 'INS-0') {

    // update transaction
    $db->query(sprintf("
        UPDATE mpesa_transactions 
        SET status = 'success' 
        WHERE thirdparty_reference = %s
    ", secure($reference)));

    // 🔥 HANDLE BASED ON TYPE
    switch ($transaction['type']) {

        case 'wallet':
            $user = new User($transaction['user_id']);
            $user->wallet_refill($transaction['amount'], "M-Pesa");
            break;

        case 'packages':
            $user = new User($transaction['user_id']);
            $user->subscribe($transaction['item_id']);
            break;

        case 'marketplace':
            $user = new User($transaction['user_id']);
            $user->mark_order_as_paid($transaction['item_id']);
            break;

        case 'donate':
            $user = new User($transaction['user_id']);
            $user->donate($transaction['item_id'], $transaction['amount']);
            break;
    }

} else {

    // ❌ FAILED
    $db->query(sprintf("
        UPDATE mpesa_transactions 
        SET status = 'failed' 
        WHERE thirdparty_reference = %s
    ", secure($reference)));
}

http_response_code(200);
echo "OK";