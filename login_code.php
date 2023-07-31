<?php

include("connect.php");

$email=$_POST['email'];	
$pwd=$_POST['pwd'];

$q="select * from customer_registration where customer_emailid='$email' and customer_password='$pwd'";

print $q;

$res=mysqli_query($cn,$q);


if($row=mysqli_fetch_array($res))
{
	
	session_start();
	$_SESSION["username"]=$email;
	$_SESSION["user_id"]=$row[0];
	
	header("location:reg_home.php");
}
else
{
	echo"<script>alert('invalid UserName or Password');window.location.herf='login.php';</script>";
}
?>