<?php
include("connect.php");
$customer_name=$_Post["customer_name"];
$customer_address=$_Post["customer_address"];
$customer_city=$_Post["customer_city"];
$customer_contactno=$_Post["customer_contactno"];
$customer_birthdate=$_Post["customer_birthdate"];
$customer_pincode=$_Post["customer_pincode"];
$customer_password=$_Post["customer_password"];
$customer_adharno=$_Post["customer_adharno"];

$q="insert into customer_registration(customer_name,customer_address,customer_city,customer_contactno,customer_birthdate,customer_pincode,customer_password,customer_adharno,customer_emailid)values('$customer_name','$customer_address','$customer_city',$customer_contactno,$customer_birthdate,$customer_pincode,$customer_password,$customer_adharno,'$customer_emailid')";
print $q;
mysqli_query($cn,$q);
?>