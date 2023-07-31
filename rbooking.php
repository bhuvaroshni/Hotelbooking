<?php
		include("rheader.php");
		$userid=$_SESSION["user_id"];
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">booking</h3>
			
			<table class="table table-striped">
		<tr>
		<th>booking date</th>
		<th>Room id</th>
		<th>booking from</th>
		<th>booking to</th>
		<th>adult</th>
		<th>child</th>
	    <th>total amount</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from booking where customer_id=$userid";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
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
