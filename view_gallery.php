<?php
		include("aheader.php");
?>
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Hotel Gallery </h3>
			
	<table class="table table-striped">
		<tr>
		<th> gallery Name</th>
		<th> gallery photo</th>
		<th> Edit</th>
		<th> Delete</th>
		</tr>
		
		<?php
				include("connect.php");
					
				$q="select * from hotel_gallery";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
		?>
		<tr>
		<td><?php echo $row[1]; ?></td>
		<td><img src="<?php echo $row[2]; ?>" width="200px" height="200px"</td>
		<td><a href="edit_gallery_code.php?gallery_id=<?php print $row[0];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
		<td><a href="delete_gallery_code.php?gallery_id=<?php print $row[0];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
		
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
