<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">rooms</h3>
			
  <table class="table table-striped">
		<tr>
		<th>Room Name</th>
		<th>Room Category</th>
		<th>Room Price</th>
		<th>Room Rating</th>
		<th>Room Image</th>
		<th> Edit</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from rooms";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td>
		<?php
		
		$q3="select * from room_category where roomcategory_id=$row[2]";
		$result3=mysqli_query($cn,$q3);
		while($row3=mysqli_fetch_array($result3))
		{  
			print $row3[1]; 
		}
	  ?>
		</td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><img src="<?php echo $row[5]; ?>" width="150px" height="150px" alt=""></td>
		<td><a href="edit_rooms_code.php?room_id=<?php print $row[0];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
		<td><a href="delete_rooms_code.php?room_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
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
