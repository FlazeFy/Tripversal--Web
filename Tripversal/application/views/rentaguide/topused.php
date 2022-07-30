<div class='container-fluid' style='width:100%;  padding:10px; background:#414141; border-radius:10px; padding-left:20px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
	<div class='row'>
		<div class='col-md-3'>
			<h4 style='margin-top:50px; color:whitesmoke;'>Top Used Guide</h4>
			<button class='btn btn-link' style='margin-top:-15px; margin-left:-10px; color:#068ac2; text-decoration:none; font-size:15px;'><i class="fa-solid fa-arrow-right"></i> See More</button>
		</div>
		<div class='col-md-9'>
		<?php
			$i = 0;
			$city = $this->session->userdata('set_city');
			foreach($topUsedGuide as $top){
				if(($i < 1)&&($top['city'] == $city)){
					echo"<div class='container' style='width:100%;'>
						<div class='row'>
							<div class='col-md'>
								<img src='http://localhost/Tripversal/assets/image/guide/".$top['guide_fullname']."_".$top['phone'].".jpg' style='height:130px; margin-left:-10px; border-radius:100%;' alt=''>
								<h6 style='font-size:14px; margin-top:5px; color:whitesmoke;'>".$top['guide_fullname']."</h6>
							</div>
							<div class='col-md'>
								<br>
								<p style='font-size:14px; color:whitesmoke;'><i class='fa-solid fa-location-dot'></i> ".$top['location']."</p>
								<div class='container-fluid' style='margin-top:-15px; margin-left:-25px; color:whitesmoke;'>
									<a style='font-size:14px; color:whitesmoke;'><i class='fa-solid fa-star'></i> 5</a>
								</div>
								<p style='font-size:16px; color:#068ac2; font-weight:bold; margin-top:5px;'> Rp. "; $price = $top['price'];
								$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo" / Day</p>
								<form action='rentGuide_C/bookGuide' method='POST'>
									<input class='form-control' name='id_CarGuide' value='".$top['id_guide']."' hidden>
									<input class='form-control' name='city' value='".$top['city']."' hidden>
									<button type='submit' class='btn btn-success'>Book Now</button>
								</form>
							</div>
						</div>
					</div>";
					$i++;
				}
			}
			if($i == 0){
				echo"<div class='container' style='width:100%;'>
					<p style='font-style:italic; text-align:center; color:whitesmoke; font-size:14px; margin-top:20px;'>Data not found</p>
					<img src='http://localhost/Tripversal/assets/icon/404 Error.png' alt='Data not found.png' style='display: block;
						margin-left: auto; margin-right: auto; width: 160px; height: 160px; margin-top:-40px;'>
				</div>";
			}				
		?>
		</div>
	</div>
</div>
