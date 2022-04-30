<?php
require_once("connection.php");
date_default_timezone_set('Asia/kolkata');

$dt=date("Y-m-d h:i:s");
$up=$con->query("update saloonregister set lastlogin='$dt'");

unset($_SESSION['admin']);
header('location:../admin/login.php');
?>