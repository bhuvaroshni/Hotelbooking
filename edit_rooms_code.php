<?php
		include("aheader.php");
		include("connect.php");
		
		$rm_id=$_GET['room_id'];
		
		$q="select * from rooms where room_id=$rm_id";
		$res=mysqli_query($cn,$q);
		if($row=mysqli_fetch_array($res))
		
		
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
	<h3 class="title-w3-agileits title-black-wthree"> add rooms</h3>
			
  <form action="e_rooms_code.php" method="post" enctype="multipart/form-data">
  
  
	<?php
	
	?>
    
	<div class="form-group">
      <label for="room_name">Enter room Name:</label>
      <input type="text" class="form-control" id="room_name" value="<?php print $row[1]; ?>" name="room_name">
	  <input type="hidden" name="rm_id" value="<?php print $rm_id; ?>">
    </div>
	
	<div class="form-group">
      <label for="roomcategory_id">Enter room category id:</label>
	  
	<select class="form-control" id="roomcategory_id" name="roomcategory_id">
	<?php
	include("connect.php");
		
	$q1="select * from room_category";
	$result1=mysqli_query($cn,$q1);
	while($row1=mysqli_fetch_array($result1))
	{  
	?>
	 <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
	  <?php
	  }
	  ?>	
	</select> 
	</div>
	
	<div class="form-group">
      <label for="room_price">Enter room price:</label>
      <input type="text" class="form-control" id="room_price"value="<?php print $row[3]; ?>" name="room_price">
    </div>
	
	<div class="form-group">
      <label for="room_rating">Enter room rating:</label>
      <input type="text" class="form-control" id="room_rating" value="<?php print $row[4]; ?>" name="room_rating">
    </div>
	
		<div class="form-group">
      <label for="room_rating">Select Room Image:</label>
      <input type="file" class="form-control" name="room_photo">
    </div>
	
	<?php
	
	?>
	
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
	</div>
</div>

<!-- //team -->

	<?php
		include("footer.php");
?>
