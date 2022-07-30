<?php
	foreach($carData as $car){
		if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
			echo"<h5><i class='fa-solid fa-warehouse'></i></i> Garage Profil</h5>
			<hr>
			<div class='d-flex align-items-center' >
				<div class='image' style='margin-right:5px;'>
				<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$car['garage_username'].".jpg' class='rounded' width='135' 
					style='box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;'>
				</div>
				<div class='ml-3 w-100'>
					<h6 class='mb-0 mt-0'>".$car['garage_name']."</h6>
					<span style='font-size:13px;'>".$car['garage_location']."</span>
					<div class='p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats'>
						<div class='d-flex flex-column'>
							<span class='articles'>Vehicle</span>
							<span>"; 
							$count = 0;
							foreach($carData as $car2){
								if($car['id_garage'] == $car2['id_garage']){
									$count++;
								}
							}
							echo $count;
							echo"</span>
						</div>
						<div class='d-flex flex-column'>
							<span class='articles'>Driver</span>
							<span>"; 
							$count2 = 0;
							foreach($carData2 as $car3){
								if(($car['id_garage'] == $car3['id_garage'])&&($car3['driver'] != 'none')){
									$count2++;
								}
							}
							echo $count2;
							echo"</span>
						</div>
						<div class='d-flex flex-column'>
							<span class='articles'>Trip</span>
							<span>8.9</span>
						</div>
					</div>
					<div class='button d-flex flex-row align-items-center'>
						<button class='btn btn-sm btn-success w-50 m-1'>Chat</button>
						<button class='btn btn-sm btn-primary w-50'>Open</button>									
					</div>
				</div>
			</div>
			<h6 style='font-weight:600;'>About us</h6>
			<div class='container-fluid' style=' margin-left:-20px; margin-bottom:5px;'>
				<div style='font-size:15px; color:#212121;  overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 10; line-clamp: 10; -webkit-box-orient: vertical;'
				><p>".nl2br($car['garage_desc'])."</p></div>
			</div>
			<h6 style='font-weight:600;'>Other vehicle</h6><hr>
			<div class='container-fluid' style='margin-left:-10px; margin-bottom:5px;'>
				<div id='myCarouselVehicle' class='carousel slide' data-ride='carousel' data-interval='0' style='width:115%; margin-left:-35px;'>
					<!-- Carousel indicators -->
					<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -55px;'>";
					
						$page = 0; $item = 0; $show = 6;
						if($this->session->userdata('set_typeBook') == 'Car Rental'){
							foreach ($carData as $car2){
								if(($car2['garage_name'] == $car['garage_name'])&&($car2['status'] == 'available')&&($car2['id_car'] != $this->session->userdata('set_idCarGuide'))){
									if($item == 0 && $page == 0){
										echo"<li data-target='#myCarouselVehicle' data-slide-to='0' class='active'>1</li>";
										$item++;
										$page++;
									} else if ($item % $show == 0){
										echo"<li data-target='#myCarouselVehicle' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
										$item++;
										$page++;
									} else if ($item % $show != 0){
										$item++;
									}
								}
							}
						} //else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
						
						// } 
					
					echo"</ol>
					<!-- Wrapper for carousel items -->
					<div class='carousel-inner' style='width:115%;'>";
				
						$i = 1; $count = 0; $k = 0;
						$state = ' active'; $show = 6;
						if($this->session->userdata('set_typeBook') == 'Car Rental'){
							foreach($carData as $car3){
								if(($car3['garage_name'] == $car['garage_name'])&&($car3['status'] == 'available')&&($car3['id_car'] != $this->session->userdata('set_idCarGuide'))){
									if(($k % $show == 0) || ($k == 0)){
										echo"<div class='item carousel-item".$state."'>
										<div class='row' style='margin-left:5px;'>";
									}	
									echo"
									<div class='card'>
										<img src='http://localhost/Tripversal/assets/image/".$car3['plate_number'].".png' alt='".$car3['plate_number'].".png' 
										style='width: 120px; margin-top:-5px;'>
										<h7 style='color:black; font-size:13px;  white-space: nowrap;'>".$car3['car_name']." / <span style='color:grey; font-size:11px;'>".$car3['year']."</span></h7>
										<a style='font-size:12px; color:grey;'>".$car3['driver']."</a>
										<div class='row'>
											<div class='col-md-7'>
												<a style='font-size:13px; font-weight:bold; color:black; white-space: nowrap;'>Rp. "; 
												$price = $car3['price'];
												$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice;
												echo"</a>
											</div>
											<div class='col-md-5'>
												<a style='font-size:14px; color:#4183D7;'><img src='http://localhost/Tripversal/assets/icon/Rating.png' style='width:15px; white-space: nowrap;'>"; 
												$total = 0; $j = 0;
												foreach($carRating as $rating){
													if($car3['id_car'] == $rating['id_car']){
														$total += $rating['rating'];
														$j++;
													}
												}
												if($j >= 1){
													$total = $total / $j;
												} else if($j == 0){
													$total = '-';
												}
												echo number_format((float)$total, 1, '.', '');
												echo"</a>
											</div>
										</div>
										<div id='content2'>
											<form action='rentACar_C/bookCar' method='POST'>
											<input class='form-control' name='id_CarGuide' value='".$car3['id_car']."' hidden>
											<input class='form-control' name='city' value='".$car3['city']."' hidden>
											<button type='submit' class='btn btn-success'>Book Now</button>
											</form>
										</div>
									</div>";
									$k++;
									$state = ' ';
									if($k % $show == 0){
										echo"</div>
									</div>";
									}										
									$count = 0; $i++;
								} 
							}
							echo"</div>"; //end of carousel-inner.
							//Carousel fixes. if there's another bug. check this.
							if($k % $show != 0){
								echo"</div></div>";
							}
							if($k > $show){ 
								echo"
								<!-- Carousel controls -->
								<a class='carousel-control-prev' href='#myCarouselVehicle' data-slide='prev' style='margin-bottom:-40px;'>
									<i class='fa fa-angle-left'></i>
								</a>
								<a class='carousel-control-next' href='#myCarouselVehicle' data-slide='next' style='margin-bottom:-40px;'>
									<i class='fa fa-angle-right'></i>
								</a>";
							} else if($k == 0){
								echo"</div>";
								echo "<div class='container'>
									<p style='font-style:italic; text-align:center; color:grey;'>Sorry there's no car available</p>
									<img src='http://localhost/Tripversal/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
										margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
								</div>";
							}
						}
					echo"
				</div>
			</div>
			";
		}
	}
?>
