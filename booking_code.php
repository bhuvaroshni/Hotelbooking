<?php
include("connect.php");

session_start();

$userid=$_SESSION["user_id"];
$tdate=date("d-m-Y");
$fromdate=$_POST["fromdate"];
$todate=$_POST["todate"];

 
$adult=$_POST["adult"];
$child=$_POST["child"];
$roomid=$_POST["roomid"];
$roomprice=$_POST["roomprice"];


$q="INSERT INTO booking(customer_id,room_id,booking_date,booking_from,booking_to,adult,child,total_amount) VALUES ($userid,$roomid,'$tdate','$fromdate','$todate',$adult,$child,$roomprice)";
print $q;
mysqli_query($cn,$q);
header("location:rbooking.php");
?>