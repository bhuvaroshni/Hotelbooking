<?php
		include("aheader.php");
		
		
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
	<h3 class="title-w3-agileits title-black-wthree"> add rooms</h3>
			
  <form action="add_room_code.php" method="post" enctype="multipart/form-data">
    
	<div class="form-group">
      <label for="room_name">Enter room Name:</label>
      <input type="text" class="form-control" id="room_name" placeholder="Enter Your Name" name="room_name">
    </div>
	
	<div class="form-group">
      <label for="roomcategory_id">Enter room category id:</label>
	  
	<select class="form-control" id="roomcategory_id" name="roomcategory_id">
	<?php
	include("connect.php");
		
	$q="select * from room_category";
	$result=mysqli_query($cn,$q);
	while($row=mysqli_fetch_array($result))
	{  
	?>
	 <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
	  <?php
	  }
	  ?>	
	</select> 
	</div>
	
	<div class="form-group">
      <label for="room_price">Enter room price:</label>
      <input type="text" class="form-control" id="room_price"placeholder="Enter room_price" name="room_price">
    </div>
	
	<div class="form-group">
      <label for="room_rating">Enter room rating:</label>
      <input type="text" class="form-control" id="room_rating" placeholder="Enter room_rating" name="room_rating">
    </div>
	
	<div class="form-group">
      <label for="room_rating">Select Room Image:</label>
      <input type="file" class="form-control" name="room_photo">
    </div>
	
	
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
	</div>
</div>

<!-- //team -->

	<?php
		include("footer.php");
?>
