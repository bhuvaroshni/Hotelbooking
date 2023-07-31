<?php
include("connect.php");

$room_id=$_GET["room_id"];

$q="delete from rooms where room_id=$room_id";
print $q;
mysqli_query($cn,$q);
header("location:view_rooms.php");
?>