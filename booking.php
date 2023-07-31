<?php
		include("rheader.php");
		$roomid=$_GET['roomid'];
		
		
?>
<!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Booking Detail</h3>
				<div class="priceing-table-main">
					
					
				<?php
				include("connect.php");
					
				$q="select * from rooms where room_id=$roomid";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
				?>
		
					<div class="col-md-6 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="<?php print $row[5]; ?>" alt=" " width="300px" height="300px"/>
							<h4><?php print $row[1]; ?></h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									
								</div>
							<div class="price-selet">	
							    <h3><span>Price :</span><?php print $row[3]; ?></h3>
							    <h3><span>Rating :</span><?php print $row[4]; ?></h3>
								
							</div>
						</div>
					</div>
					</div>
					<div class="col-md-6">
					<form action="booking_code.php" method="post">
					Check-In Date <input type="date" name="fromdate" class="form-control"><br>
					Check-Out Date<input type="date" name="todate" class="form-control"><br>
					Adult<input type="number" name="adult" class="form-control"><br>
					Child<input type="number" name="child" class="form-control"><br>
					<input type="hidden" name="roomid" value="<?php print $roomid;?>"><br>
					<input type="hidden" name="roomprice" value="<?php print $row[3];?>"><br>
						
					<input type="submit" name="s1" class="btn btn-primary" value="Confirm Booking"><br>
					
					</form>
					</div>
				<?php
				}
				?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
			
	 <!--// rooms & rates -->

	<?php
		include("footer.php");
?>
