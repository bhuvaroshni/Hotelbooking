<?php
include("connect.php");

$gallery_photo="room_photo/".$_FILES['gallery_photo']['name'];
move_uploaded_file($_FILES['gallery_photo']['tmp_name'],$gallery_photo);


$gallery_name =$_POST["gallery_name"];
$glr_id=$_POST['glr_id'];

$q="update hotel_gallery set gallery_name ='$gallery_name ',gallery_photo='$gallery_photo' where gallery_id=$glr_id";
print $q;
mysqli_query($cn,$q);
header("location:view_gallery.php")
?>