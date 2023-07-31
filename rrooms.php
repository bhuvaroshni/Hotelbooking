<?php
		include("rheader.php");
?>
<!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
					<div class="priceing-table-main">
					
					
				<?php
				include("connect.php");
					
				$q="select * from room_category";
				$res=mysqli_query($cn,$q);
				
				
				while($row=mysqli_fetch_array($res))
				{
				?>
		
					<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="<?php print $row[3]; ?>" alt=" " width="250px" height="250px"/>
							<h4><?php print $row[1]; ?></h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									
							</div>
							<div class="price-selet">	
								<h5><span></span><?php print $row[2]; ?></h5>						
								<a href="rviewroomdetail.php?rc_id=<?php print $row[0]; ?>">More Detail</a>
								

							</div>
						</div>
					</div>
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
