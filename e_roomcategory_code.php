<?php
include("connect.php");

$roomcategory_photo="room_photo/".$_FILES['roomcategory_photo']['name'];
move_uploaded_file($_FILES['roomcategory_photo']['tmp_name'],$roomcategory_photo);


$roomcategory_name=$_POST["roomcategory_name"];
$roomcategory_description=$_POST["roomcategory_description"];
$cat_id=$_POST['cat_id'];

$q="update room_category set roomcategory_name='$roomcategory_name',roomcategory_description='$roomcategory_description',roomcategory_photo='$roomcategory_photo' where roomcategory_id=$cat_id";
print $q;
mysqli_query($cn,$q);
header("location:view_rooms_category.php")
?>