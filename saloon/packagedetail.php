<?php
  require('config.php');
  require('razorpay-php/Razorpay.php');
require_once("connection.php");


$_SESSION['pid']=$_REQUEST['id'];

if($_SESSION['email']=="")
{
  header('location: index.php');
}
  

      $data=$con->query("select * from package where packageid=$_REQUEST[id]");
          $roww=mysqli_fetch_array($data);
  

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/html/health-beauty/haircare/v3.1/demo/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 12:23:12 GMT -->
<?php 
   require_once("head.php");
?>
<body class="">
<?php

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//check all field are set or not?
$name=$_SESSION['name'];
$mail=$_SESSION['email'];
$amount=$roww[3];
$phno=$_SESSION['contact'];


//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $amount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Glamifie",
    "description"       => "Glamifie - Time to treat yourself",
    "image"             => "https://vishvdesai.000webhostapp.com/assets/images/logo.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $mail,
    "contact"           => $phno,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => rand(1000,9999),
    ],
    "theme"             => [
    "color"             => "#4400ff"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  
 <?php 
   require_once("header.php");
   52
 ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    
<section class="pricing">
      <div class="container pt-70 pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our <span class="text-black font-weight-300">Package</span></h2>
              <p class="text-uppercase letter-space-4">Best Package Available For Beauty</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Name :  </span>
                  <div class="value pull-right" style="text-transform: capitalize;"> <?php echo $_SESSION['name']; ?> </div>
                </li>
                <li class="clearfix"> <span> Email :</span>
                  <div class="value pull-right"> <?php echo $_SESSION['email']; ?> </div>
                </li>
                <li class="clearfix"> <span> Contact : </span>
                  <div class="value pull-right"> <?php echo $_SESSION['contact']; ?> </div>
                </li>
                <li class="clearfix"> <span> Address : </span>
                  <div class="value pull-right" style="text-transform: capitalize;"> <?php echo $_SESSION['address']; ?> </div>
                </li>
              </ul>
            </div>
          </div>
            </div>
            <div class="col-md-6 col-md-push-3">
              <div class="row">

                <?php
                $data=$con->query("select * from package where packageid=$_REQUEST[id]");
                $row=mysqli_fetch_array($data);

                $_SESSION['pamount']=$row[3];
                
                ?>
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20">
                        <img class="img-circle border-rounded border-8px" width="150" src="<?php echo "admin/".$row[2]; ?>" alt="">
                      </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2"><?php echo $row[1]; ?></h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">&#8377;<?php echo $row[3]; ?></span>
                      </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $row[4]; ?></p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20"  id="rzp-button1">Buy This pakage</a>
                      </div>
                    </div>
                  </div>
                </div>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
  </div>
  <!-- end main-content -->


  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="success.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
    <input type="hidden"  name="name" value="<?php echo $name; ?>">
    <input type="hidden"  name="mail" value="<?php echo $mail; ?>">
    <input type="hidden"  name="phno" value="<?php echo $phno; ?>">
    <input type="hidden"  name="amount" value="<?php echo $amount; ?>">

</form>
  <script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>
  

 <?php
    require_once("footer.php");
 ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from html.kodesolution.live/html/health-beauty/haircare/v3.1/demo/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 12:23:12 GMT -->
</html>