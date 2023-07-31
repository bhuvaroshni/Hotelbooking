<?php
		include("vheader.php");
?>
<!-- contact -->
 <div class="team" id="team">
	<div class="container">
	<div class="col-md-6">
	<h3 class="title-w3-agileits title-black-wthree">Login</h3>
			
  <form action="login_code.php" method="post" enctype="multipart/form-data">
    
	<div class="form-group">
      <label for="room_name">Enter UserName:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter UserName" name="email">
    </div>
	
	
	<div class="form-group">
      <label for="room_price">Enter Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
    </div>
	
	<button type="submit" class="btn btn-primary">Login</button>
  </form>
  <div>
	<a href="admin_login.php">Click here For Admin Login</a>
  </div>
  </div>
  <div class="col-md-6">
  <img src="images/rs1.jpg">
  </div>
	</div>
</div>

<!-- //team --><!-- /contact -->

	<?php
		include("footer.php");
?>
