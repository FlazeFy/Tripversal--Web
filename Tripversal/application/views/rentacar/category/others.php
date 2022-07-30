<div data-toggle="collapse" href="#collapseOthers" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
	<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
		margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
		<?php
		$i = 0;
		$city = $this->session->userdata('set_city');
		$driver = $this->session->userdata('set_driver');
		$transmission = $this->session->userdata('set_transmission');
		
		foreach ($carData as $car){
			if(($car['status'] == 'available')&&($car['type'] == 'Others')&&($car['city'] == $city)){
				if($driver == 'all'){
					if($transmission == 'all'){
						$i++;
					} else if($transmission == $car['transmission']){
						$i++;
					}
				} else if(($driver == 'yes')&&($car['driver'] != 'none')){
					if($transmission == 'all'){
						$i++;
					} else if($transmission == $car['transmission']){
						$i++;
					}
				} else if($driver == $car['driver']){
					if($transmission == 'all'){
						$i++;
					} else if($transmission == $car['transmission']){
						$i++;
					}
				}
			}
		}
		echo $i; 
		?>
	</a></div>
	<h5>Others</h5>
	<div class='container' style='width:80%; margin-left:-20px;'>
		<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
	</div>
	<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-40px; margin-right:20px;'></i>
	</div>
	<div id="collapseOthers" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
	<div class='row' style='margin-top:60px;'>
		<?php
		$i = 0;
		$city = $this->session->userdata('set_city');
		$driver = $this->session->userdata('set_driver');
		$transmission = $this->session->userdata('set_transmission');

		foreach ($carData as $car){
			if(($car['status'] == 'available')&&($car['type'] == 'Others')&&($car['city'] == $city)){
				echo"
				<div class='glassBox'>
					<div class='glassBox__imgBox'>
						<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt=''>
						<h3 class='glassBox__title'>".$car['car_name']." / <span style='color:grey; font-size:14px;'>".$car['year']."</span></h3>
						<hr>
					</div>
					<div class='card-body' style='width:120%; margin-top:-25px; display: block; margin-left: auto; margin-right: auto;'>
						<div class='row'>
							<div class='col-md-5 border-right'>
								<a style='color:#068ac2; font-size:14px;'><i class='fa-solid fa-location-dot'></i> ".$car['location']."</a>
							</div>
							<div class='col-md-4'>
								<a style='color:#068ac2; font-size:14px;'><i class='fa-solid fa-person'></i> ".$car['seat']." seats</a>
							</div>
							<div class='col-md-3' style='margin-left:-30px;'>
								<a style='color:#068ac2; font-size:14px;'><i class='fa-solid fa-star'></i> "; 
								$total = 0; $i = 0;
								foreach($carRating as $rating){
									if($car['id_car'] == $rating['id_car']){
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
						<div class='row' style='margin-top:5px;'>";
							if($car['driver'] == 'none'){
								echo"<a style='margin-left:-10px; float:left; font-size:14px;'>Driver <span style='color:#808080;'> none</span></a>";
							} else {
								echo"<a style='margin-left:-10px; float:left; font-size:14px;'>Driver <img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Driver' class='rounded-circle img-fluid' 
									style='width:35px; height:35px; type:button; cursor:pointer;'>  <span style='color:#068ac2; text-decoration: underline; type:button; cursor:pointer;'> flazefy</span> </a>";
							}
						echo"</div>
						<div class='row' style='margin-top:5px;'>
							<div class='col-md-6' style='margin-top:10px;'>
								<h6 style='color:grey;'>Rp. <a style='color:#212121; font-weight:bold;'>"; $price = $car['price'];
								$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo"</a> / Day</h6>
							</div>
							<div class='col-md-6'>
								<form action='rentACar_C/bookCar' method='POST'>
									<input class='form-control' name='id_CarGuide' value='".$car['id_car']."' hidden>
									<input class='form-control' name='city' value='".$car['city']."' hidden>
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
