<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Customer Registration </h3>
			
			<table class="table table-striped">
		<tr>
		<th> Customer Name</th>
		<th> Customer address</th>
		<th> Customer city</th>
		<th> Customer contactno</th>
		<th> Customer birthday</th>
		<th> Customer pincode</th>
		<th> Customer password</th>
		<th> Customer adharno</th>
		<th> Customer emailid</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from customer_registration";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td><?php echo $row[9]; ?></td>
		<td><a href="delete_register_code.php?register_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		</tr>
		<?php
		}
		?>
		</table>
			
  
	</div>
</div>
</div>
<!-- //team -->

	<?php
		include("footer.php");
?>
