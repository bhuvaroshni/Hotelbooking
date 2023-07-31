<?php
		include("aheader.php");
		include("connect.php");
		
		$cat_id=$_GET['cat_id'];
		
		$q="select * from room_category where roomcategory_id=$cat_id";
		$res=mysqli_query($cn,$q);
		
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Room Category</h3>
			
  <form action="e_roomcategory_code.php" method="post" enctype="multipart/form-data">
    
	<?php
	if($row=mysqli_fetch_array($res))
	{
	?>
	
	<div class="form-group">
      <label for="roomcategory_name">Enter Room Category Name:</label>
      <input type="text" class="form-control" id="roomcategory_name" value="<?php print $row[1]; ?>" name="roomcategory_name">
	  <input type="hidden" name="cat_id" value="<?php print $cat_id; ?>">	
	 
	</div>
	
	<div class="form-group">
      <label for="roomcategory_description">Enter Room Category Description:</label>
      <textarea class="form-control" id="roomcategory_description" name="roomcategory_description"><?php print $row[2]; ?></textarea>
	  
    </div>
	
	<div class="form-group">
      <label for="roomcategory_photo">Select Photo:</label>
      <input type="file" class="form-control" id="roomcategory_photo"  name="roomcategory_photo">
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
