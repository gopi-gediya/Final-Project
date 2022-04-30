<?php
  require('config.php');
  require('razorpay-php/Razorpay.php');
require_once("connection.php");


if($_SESSION['email']=="")
{
  header('location: index.php');
}
    
  if($_REQUEST['wscid']!="")
  {
     // echo $_REQUEST['wscid'];
      $data=$con->query("select * from worksubcategory where worksubcategoryid=$_REQUEST[wscid]");
      $row=mysqli_fetch_array($data);


      $in=$con->query("insert into cart values($_SESSION[userid],$_REQUEST[wscid],0,$row[5],0,$row[5])");
      // header('location: cart.php');
  }

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
$amount=$_SESSION['atotal'];
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
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Book Cart</h2>
              <ol class="breadcrumb white mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-theme-colored">Book Cart</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
        <div class="container">
          <div class="row">
              <div class="col-lg-6">
                <h4>User Details</h4>
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
              <div class="col-lg-6">
                <h4>Product Details</h4>
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                  <table class="table table-striped table-bordered tbl-shopping-cart">
                    <thead>
                      <tr>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Price</th>
                  </tr>
                </thead>

                <tbody>
        <?php
         $total=0; 
        $da1=$con->query("select * from cart where userid=$_SESSION[userid]");
          while($ro=mysqli_fetch_array($da1))
          {
            $total=$total+$ro[3];
             
            $_SESSION['ftotal']=$total;

            $data3=$con->query("select * from worksubcategory where worksubcategoryid=$ro[1]");
            $row3=mysqli_fetch_array($data3);
        ?>
                  <tr class="cart_item">
                    <td class="product-thumbnail"><a href="#"><img alt="member" src="<?php echo "admin/".$row3[3]; ?>"></a></td>
                    <td class="product-name"><a class="text-theme-colored" style="text-transform: capitalize;" href="#"><?php echo $row3[2]; ?></a>
                      <ul class="variation">
                        <?php
                          $data5=$con->query("select * from workcategory where workcategoryid=$row3[0]");
                          $row5=mysqli_fetch_array($data5);
                        ?>
                        <li class="variation-size" style="text-transform: capitalize;">Category: <span><?php echo $row5[1]; ?></span></li>
                      </ul></td>
                    <td class="product-price"><span class="amount">₹ <?php echo $ro[3]; ?>/-</span></td>
                  </tr>
  <?php
  }
  ?>
                </tbody>

              </table>
            </div>
                </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                  <h4>Cart Totals</h4>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Order Total Amount</td>
                        <td>₹ <?php echo $total; ?>/-</td>
                      </tr>
                      <tr>
                        <td>Payble Amount (30%)</td>
                        <td>₹ <?php echo $_SESSION['atotal']?>/-</td>
                      </tr>
                    </tbody>
                  </table>
                  <a class="btn btn-default" href="index.php">Continue</a> 
                  <a class="btn btn-default" id="rzp-button1">Pay Now</a> 
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
                </div>
          </div>
      </div>

    </section>
  </div>
  <!-- end main-content -->
  

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