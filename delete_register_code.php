<?php
include("connect.php");

$register_id=$_GET["register_id"];

$q="delete from customer_registration where customer_id=$register_id";
print $q;
mysqli_query($cn,$q);
header("location:view_register_users.php");
?>