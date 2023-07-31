<?php
		include("aheader.php");
		
		
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Room Category</h3>
			
			<table class="table table-striped">
		<tr>
		<th>Room category Name</th>
		<th>Room category Description</th>
		<th>Room category Photo</th>
		<th> Edit</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from room_category";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><img src="<?php echo $row[3];?>"width="200px" height="200px"></td>
		
		<td><a href="edit_roomcategory_code.php?cat_id=<?php print $row[0];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
		<td><a href="delete_roomcategory_code.php?cat_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
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
