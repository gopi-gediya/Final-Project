<?php

require('config.php');
require('connection.php');

session_start();

require('razorpay-php/Razorpay.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

             $tid=$_POST['razorpay_payment_id'];

            date_default_timezone_set('Asia/kolkata');

            $dt=date("Y-m-d");
$data=$con->query("insert into bill values($_SESSION[userid],0,'$dt',$_SESSION[atotal],$_SESSION[ftotal],'$tid')");

$data=$con->query("insert into packagebook values($_SESSION[userid],$_SESSION[pid],0,'$dt',$_SESSION[pamount],'$tid')");


             
    header('location: index.php');
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
</body>
</html>