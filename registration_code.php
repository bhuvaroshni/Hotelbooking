<?php
include("connect.php");

$customer_name=$_POST["customer_name"];
$customer_address=$_POST["customer_address"];
$customer_city=$_POST["customer_city"];
$customer_contactno =$_POST["customer_contactno"];
$customer_birthdate=$_POST["customer_birthdate"];
$customer_pincode=$_POST["customer_pincode"];
$customer_password=$_POST["customer_password"];
$customer_adharno=$_POST["customer_adharno"];
$customer_emailid=$_POST["customer_emailid"];

$q="insert into customer_registration(customer_name,customer_address,customer_city,customer_contactno,customer_birthdate,customer_pincode,customer_password,customer_adharno,customer_emailid)values('$customer_name','$customer_address','$customer_city',$customer_contactno,'$customer_birthdate',$customer_pincode,'$customer_password',$customer_adharno,'$customer_emailid')";
print $q;
mysqli_query($cn,$q);
?>
		