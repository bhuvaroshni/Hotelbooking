<?php
		include("vheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Registration</h3>
			
  <form action="registration_code.php" method="post">
    
	<div class="form-group">
      <label for="customer_name">Enter Your Name:</label>
      <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Your Name">
    </div>
	
	<div class="form-group">
      <label for="customer_address">Enter Address:</label>
      <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter Address">
    </div>
	
	<div class="form-group">
      <label for="customer_city">Enter City:</label>
      <input type="text" class="form-control"  id="customer_city" name="customer_city" placeholder="Enter City">
    </div>
	
	
	<div class="form-group">
      <label for="customer_contactno">Enter Contact No:</label>
      <input type="text" class="form-control" id="customer_contactno" name="customer_contactno" placeholder="Enter Contect No">
	</div>
	
	  <div class="form-group">
      <label for="customer_birthdate">Enter Birthdate:</label>
      <input type="date" class="form-control" id="customer_birthdate" name="customer_birthdate" placeholder="Enter Birthdate">
	  </div>
	  
	  <div class="form-group">
      <label for="customer_pincode">Enter Pincode:</label>
      <input type="text" class="form-control" id="customer_pincode" name="customer_pincode" placeholder="Enter Pincode">
	  </div>
	  <div class="form-group">
      <label for="customer_password">Enter Password:</label>
      <input type="password" class="form-control" id="customer_password" name="customer_password" placeholder="Enter Password">
	  </div>
	  
	  <div class="form-group">
      <label for="customer_adharno">Enter Aadhar No:</label>
      <input type="text" class="form-control" id="customer_adharno"  name="customer_adharno" placeholder="Enter Aadhar No">
	  </div>
	  
      <div class="form-group">
      <label for="customer_emailid">Enter Email Id:</label>
      <input type="email" class="form-control" id="customer_emailid" name="customer_emailid" placeholder="Enter Email Id">
	  </div>
	  	  
	
	<button type="submit" class="btn btn-default">Submit</button>
  </form>
  </form>
	</div>
</div>
</div>
<!-- //team -->

	<?php
		include("footer.php");
?>
