<?php
include("connect.php");

$cat_id=$_GET["cat_id"];

$q="delete from room_category where roomcategory_id=$cat_id";
print $q;
mysqli_query($cn,$q);
header("location:view_rooms_category.php");
?>