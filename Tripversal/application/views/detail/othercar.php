<?php
	if($this->session->userdata('set_typeBook') == 'Car Rental'){
		foreach($carData as $car){
			if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
				echo"<h5><i class='fa-solid fa-city'></i> Other Vehicle in ".$car['city']."</h5><hr>
				<div class='container-fluid' style='margin-left:-10px;'>
					<div id='myCarouselVehicleCity' class='carousel slide' data-ride='carousel' data-interval='0'>
						<!-- Carousel indicators -->
						<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -55px;'>";
						
							$page = 0; $item = 0; $show = 8;
							if($this->session->userdata('set_typeBook') == 'Car Rental'){
								foreach ($carData as $car2){
									if(($car2['status'] == 'available')&&($car2['city'] == $car['city'])&&($car2['id_car'] != $this->session->userdata('set_idCarGuide'))){
										if($item == 0 && $page == 0){
											echo"<li data-target='#myCarouselVehicleCity' data-slide-to='0' class='active'>1</li>";
											$item++;
											$page++;
										} else if ($item % $show == 0){
											echo"<li data-target='#myCarouselVehicleCity' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
											$item++;
											$page++;
										} else if ($item % $show != 0){
											$item++;
										}
									}
								}
							} 
						
						echo"</ol>
						<!-- Wrapper for carousel items -->
						<div class='carousel-inner'>";
					
							$i = 1; $count = 0; $k = 0;
							$state = ' active'; $show = 8;
							if($this->session->userdata('set_typeBook') == 'Car Rental'){
								foreach($carData as $car3){
									if(($car3['status'] == 'available')&&($car3['city'] == $car['city'])&&($car3['id_car'] != $this->session->userdata('set_idCarGuide'))){
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
									<a class='carousel-control-prev' href='#myCarouselVehicleCity' data-slide='prev' style='margin-bottom:-40px;'>
										<i class='fa fa-angle-left'></i>
									</a>
									<a class='carousel-control-next' href='#myCarouselVehicleCity' data-slide='next' style='margin-bottom:-40px;'>
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
				</div>";
			}
		}				
	} 	
?>
