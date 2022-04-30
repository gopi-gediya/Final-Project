
<?php

require_once("connection.php");

if($_SESSION['cdid']=="")
{
	$del=$con->query("delete from cart where cartid=$_REQUEST[cdid]");
	header('location: cart.php');
}




?>