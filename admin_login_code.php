<?php

include("connect.php");

$username=$_POST['email'];	
$pwd=$_POST['pwd'];

$q="select * from admin_login where admin_username='$username' and admin_password='$pwd'";

print $q;

$res=mysqli_query($cn,$q);


if($row=mysqli_fetch_array($res))
{
	
	session_start();
	$_SESSION["user name"]=$email;
	
	header("location:admin_home.php");
}
else
{
	echo"<script>alert('invalid UserName or Password');window.location.herf='admin_login_code.php';</script>";
}
?>