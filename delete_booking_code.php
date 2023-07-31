<?php
include("connect.php");

$booking_id=$_GET["booking_id"];

$q="delete from booking where booking_id=$booking_id";
print $q;
mysqli_query($cn,$q);
header("location:view_booking.php");
?>