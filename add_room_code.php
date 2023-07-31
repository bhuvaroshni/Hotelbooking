<?php
include("connect.php");


$room_image="room_photo1/".$_FILES['room_photo']['name'];
move_uploaded_file($_FILES['room_photo']['tmp_name'],$room_image);

$room_name=$_POST["room_name"];
$roomcategory_id=$_POST["roomcategory_id"];
$room_price=$_POST["room_price"];
$room_rating=$_POST["room_rating"];

$q="insert into rooms(room_name,roomcategory_id,room_price,room_rating,room_photo)values('$room_name',$roomcategory_id,$room_price,$room_rating,'$room_image')";
print $q;
mysqli_query($cn,$q);
?>