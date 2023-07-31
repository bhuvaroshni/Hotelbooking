<?php
		include("aheader.php");
		include("connect.php");
		
		$glr_id=$_GET['gallery_id'];
		
		$q="select * from hotel_gallery where gallery_id=$glr_id";
		$res=mysqli_query($cn,$q);
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">add gallery</h3>
			
  <form action="e_gallery_code.php" method="post" enctype="multipart/form-data">
  
  <?php
	if($row=mysqli_fetch_array($res))
	{
  ?>
    
	<div class="form-group">
      <label for="gallery_name">Enter gallery name:</label>
      <input type="text" class="form-control" id="gallery_name" value="<?php print $row[1]; ?>" name="gallery_name">
	  <input type="hidden" name="glr_id" value="<?php print $glr_id; ?>">
    </div>
	
	<div class="form-group">
      <label for="gallery_photo">Enter gallery photo:</label>
      <input type="file" class="form-control" id="gallery_photo" name="gallery_photo">
    </div>
	
	<?php
	}
	?>
	
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
	</div>
</div>

<!-- //team -->

	<?php
		include("footer.php");
?>
