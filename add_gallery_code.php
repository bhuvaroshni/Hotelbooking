<?php
include("connect.php");

$gallery_photo="room_photo/".$_FILES['gallery_photo']['name'];
move_uploaded_file($_FILES['gallery_photo']['tmp_name'],$gallery_photo);

$gallery_name=$_POST["gallery_name"];



$q="insert into hotel_gallery(gallery_name,gallery_photo)values('$gallery_name','$gallery_photo')";
print $q;
mysqli_query($cn,$q);
?>