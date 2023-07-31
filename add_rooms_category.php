<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Room Category</h3>
			
  <form action="add_roomcategory_code.php" method="post" enctype="multipart/form-data">
    
	<div class="form-group">
      <label for="roomcategory_name">Enter Room Category Name:</label>
      <input type="text"class="form-control"id="roomcategory_name"placeholder="Enter Room Category Name"name="roomcategory_name">
    </div>
	
	<div class="form-group">
      <label for="roomcategory_description">Enter Room Category Description:</label>
      <textarea class="form-control" id="roomcategory_description" name="roomcategory_description"></textarea>
	  
    </div>
	
	<div class="form-group">
      <label for="roomcategory_photo">Select Photo:</label>
      <input type="file"class="form-control"id="roomcategory_photo"placeholder="enter select photo"name="roomcategory_photo">
    </div>
	
	
	
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
	</div>
</div>

<!-- //team -->

	<?php
		include("footer.php");
?>
