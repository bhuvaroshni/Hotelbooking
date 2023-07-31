<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">booking</h3>
			
			<table class="table table-striped">
		<tr>
		<th>booking date</th>
		<th>booking from</th>
		<th>booking to</th>
		<th>adult</th>
		<th>child</th>
	    <th>total amount</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from booking ";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td><a href="delete_booking_code.php?booking_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
