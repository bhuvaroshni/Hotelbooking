<?php
include("connect.php");

$roomcategory_photo="room_photo/".$_FILES['roomcategory_photo']['name'];
move_uploaded_file($_FILES['roomcategory_photo']['tmp_name'],$roomcategory_photo);


$roomcategory_name=$_POST["roomcategory_name"];
$roomcategory_description=$_POST["roomcategory_description"];

$q="insert into room_category(roomcategory_name,roomcategory_description,roomcategory_photo )values('$roomcategory_name','$roomcategory_description','$roomcategory_photo')";
print $q;
mysqli_query($cn,$q);
?>