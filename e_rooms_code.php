<?php
include("connect.php");

$room_image="room_photo1/".$_FILES['room_photo']['name'];
move_uploaded_file($_FILES['room_photo']['tmp_name'],$room_image);


$room_name=$_POST["room_name"];
$roomcategory_id=$_POST["roomcategory_id"];
$room_price=$_POST["room_price"];
$room_rating =$_POST["room_rating"];
$rm_id=$_POST['rm_id'];

$q="update rooms set room_name='$room_name',roomcategory_id='$roomcategory_id',room_price='$room_price',room_rating='$room_rating',room_photo='$room_image' where room_id=$rm_id";
print $q;
mysqli_query($cn,$q);
header("location:view_rooms.php")
?>