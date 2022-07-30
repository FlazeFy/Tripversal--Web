<div data-toggle="collapse" href="#collapseTourGuide" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
	<div class='container' style='width:80%; margin-left:-20px;'>
		<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
	</div>						
	<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-40px; margin-right:20px;'></i>
</div>
<div id="collapseTourGuide" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
	<div class='row' style='margin-top:40px;'>
		<?php
		$i = 0;
		//Initial state control
		// $city = 'Bandung';
		$city = $this->session->userdata('set_city');
		$language = $this->session->userdata('set_language');

		foreach ($guideData as $guide){
			if(($guide['status'] == 'available')&&($guide['city'] == $city)){
				echo"
				<div class='glassBox'>
					<div class='glassBox__imgBox'>
						<img src='http://localhost/Tripversal/assets/image/guide/".$guide['guide_fullname']."_".$guide['phone'].".jpg' alt=''>
						<h3 class='glassBox__title'>".$guide['guide_fullname']."</h3>
						<hr>
					</div>
					<div class='card-body' style='width:120%; margin-top:-25px; display: block; margin-left: auto; margin-right: auto;'>
						<div class='row'>
							<div class='col-md-8 border-right'>
								<a style='color:#068ac2; font-size:14px;'><i class='fa-solid fa-location-dot'></i> ".$guide['location']."</a>
							</div>
							<div class='col-md-3' style='margin-left:-30px;'>
								<a style='color:#068ac2; font-size:14px;'><i class='fa-solid fa-star'></i> "; 
								$total = 0; $i = 0;
								foreach($guideRating as $rating){
									if($guide['id_guide'] == $rating['id_guide']){
										$total += $rating['rating'];
										$i++;
									}
								}
								if($i >= 1){
									$total = $total / $i;
								} else if($i == 0){
									$total = '-';
								}
								echo number_format((float)$total, 1, '.', '');
								echo"</a>
							</div>
						</div>
						<a style='margin-left:-10px; float:left; font-size:14px;'>Language <span style='color:#808080;'>".$guide['language']."</span></a>	
						<br>
						<div class='row' style='margin-top:5px;'>
							<div class='col-md-6' style='margin-top:10px;'>
								<h6 style='color:grey;'>Rp. <a style='color:#212121; font-weight:bold;'>"; $price = $guide['price'];
								$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo"</a> / Day</h6>
							</div>
							<div class='col-md-6'>
								<form action='rentGuide_C/bookGuide' method='POST'>
									<input class='form-control' name='id_CarGuide' value='".$guide['id_guide']."' hidden>
									<input class='form-control' name='city' value='".$guide['city']."' hidden>
									<button type='submit' class='btn btn-success'>Book Now</button>
								</form>
							</div>
						</div>
					</div>
				</div>";
				$i++;
			} 
		}
		if($i == 0){
		echo "<div class='container' style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding:10px; width:500px;'>
				<p style='font-style:italic; text-align:center; font-size:14px;'>Sorry, there's no type of this vehicle found in this city or all vehicles are busy. Try another type.</p>
				<img src='http://localhost/Tripversal/assets/icon/Car driving.gif' alt='Empty.png' style='display: block;
					margin-left: auto; margin-right: auto; width: 200px; height: 200px; margin-top:-20px;'>
			</div>";
		}
		?>
	</div>
</div>
