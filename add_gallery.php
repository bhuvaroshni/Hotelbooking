<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">add gallery</h3>
			
  <form action="add_gallery_code.php" method="post" enctype="multipart/form-data">
    
	<div class="form-group">
      <label for="gallery_name">Enter gallery name:</label>
      <input type="text" class="form-control" id="gallery_name" placeholder="Enter Your gallery name" name="gallery_name">
    </div>
	
	<div class="form-group">
      <label for="gallery_photo">Enter gallery photo:</label>
      <input type="file" class="form-control" id="gallery_photo" placeholder="Enter gallery photo" name="gallery_photo">
    </div>
	
	
	
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
	</div>
</div>

<!-- //team -->

	<?php
		include("footer.php");
?>
