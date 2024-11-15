<?php

$message = "";

function sms($dest_addr, $sms_text) {
    $api_url = getenv('SMS_API_URL');
    $username = getenv('SMS_API_USERNAME');
    $password = getenv('SMS_API_PASSWORD');
    $from = "YOUR_SENDER_NAME";

    $fields = array(
        'Username' => $username,
        'Password' => $password,
        'From' => $from,
        'To' => $dest_addr,
        'Message' => $sms_text
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

$recipients = "88017##########";
$message = "Dear Sir,\r\nPlease Approve Pending Sales Order.\r\nDo No : 505\r\n";

$sms_result = sms($recipients, $message);
?>
