<?php
require_once("connection.php");
date_default_timezone_set('Asia/kolkata');

$dt=date("Y-m-d h:i:s");
// echo $up=("update userregister set lastlogin='$dt' where email=$_SESSION['email']");

unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['address']);
unset($_SESSION['contact']);
unset($_SESSION['userid']);
header('location:index.php');
?>