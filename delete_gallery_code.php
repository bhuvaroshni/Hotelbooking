<?php
include("connect.php");

$gallery_id=$_GET["gallery_id"];

$q="delete from hotel_gallery where gallery_id=$gallery_id";
print $q;
mysqli_query($cn,$q);
header("location:view_gallery.php");
?>