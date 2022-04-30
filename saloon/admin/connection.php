<?php
session_start();
ob_start();
$con=new mysqli("localhost","root","","saloon");
if(mysqli_connect_error())
{
	die("connection fail!".mysqli_connect_error());
}
 error_reporting(0);
?>