<!--Leonardho R. Sitanggang-->
<!DOCTYPE html>
<html>

    <head>
        <title>Tripversal | Rent A Car</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
		
        <!--Source file.-->
        
		<style>
			::-webkit-scrollbar {
				width: 8px;
			}
			/* Track */
			::-webkit-scrollbar-track {
				background: #f1f1f1; 
			}
				
			/* Handle */
			::-webkit-scrollbar-thumb {
				background: #888; 
			}
			
			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover {
				background: #555; 
			} @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
			:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4169E1;--first-color-light: whitesmoke; --white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}
			body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}
			a{text-decoration: none;}
			.header{box-shadow: rgba(0, 0, 0, 0.35) 0px 4px 12px; width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}
			.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}
			.header_img{width: 60px;height: 60px;display: flex;justify-content: center;overflow: hidden; margin-top:35px;}
			.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}
			.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}
			.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}
			.nav_logo{margin-bottom: 2rem}
			.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}
			.nav_logo-name{color: var(--white-color);font-weight: 700}
			.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}
			.nav_link:hover{color: var(--white-color)}
			.nav_icon{font-size: 1.25rem}
			.show{left: 0}
			.body-pd{padding-left: calc(var(--nav-width) + 1rem)}
			.active{color: var(--white-color); background:#414141; border-top-right-radius:10px; border-bottom-right-radius:10px;}
			.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
			.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

			/*Card item*/
			.glassBox {
				width: 100%;
				height: 280px;
				max-width: 300px;
				border-radius: 10px;
				background: rgba(255, 255, 255, 0.05);
				-webkit-backdrop-filter: blur(2px);
						backdrop-filter: blur(2px);
				border: 1px solid rgba(255, 255, 255, 0.2);
				border-right-color: rgba(255, 255, 255, 0.1);
				border-bottom-color: rgba(255, 255, 255, 0.1);
				box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
				padding: 15px;
				position: relative;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				margin:5px;
				margin-left:15px;
			}
			.glassBox, .glassBox * {
				box-sizing: border-box;
				transition: 400ms;
			}
			.glassBox__imgBox img {
				display: block;
				width: 100%;
				height: auto;
				margin-top:-80px;
			}
			.glassBox__title {
				text-align: center;
				margin-top: 15px;
				color: #212121;
				font-size: 20px;
				font-weight: 400;
				font-family: "Lato";
			}
			.glassBox_content {
				position: absolute;
				right: 15px;
				bottom: 15px;
				left: 15px;
				text-align: center;
				color: #808080;
				font-size: 14px;
				font-family: "Lato";
				letter-spacing: 0.1em;
				opacity: 0;
			}
			.glassBox:hover .glassBox__imgBox {
				transform: translateY(-14px);
			}
			.glassBox:hover .glassBox__imgBox img {
				transform: translate(-7px, -14px) scale(1.15);
			}
			#notification{
				padding-top:3px; padding-bottom:3px; padding-right:6px; padding-left:10px;
				margin-left:-20px; margin-bottom:20px;
				border-radius:0px; border:none; 
			}
			.carousel-item{
				overflow: hidden;
				background:white;
			}
			.carousel-indicators {
				bottom: -30px;
			}
			.carousel-indicators li, .carousel-indicators li.active {
				width: 10px;
				height: 10px;
				margin: 4px;
				border-radius: 50%;
				border: none;
			}
			.carousel-indicators li {	
				background: rgba(0, 0, 0, 0.2);
			}
			.carousel-indicators li.active {	
				background: #212121;
			}

			/*Autocomplete search*/
			/*the container must be positioned relative:*/
			.autocomplete {
			position: relative;
			display: inline-block;
			}

			.autocomplete-items {
				position: absolute;
				border-bottom: none;
				border-top: none;
				z-index: 99;
				/*position the autocomplete items to be the same width as the container:*/
				top: 100%;
				left: 0;
				right: 0;
				border-radius:5px;
			}

			.autocomplete-items div {
				padding: 10px;
				cursor: pointer;
				background-color: whitesmoke;
				border-bottom: 1px solid #d4d4d4; 
				border-radius:5px;
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
				background-color: DodgerBlue;
				color: #ffffff; 
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
				background-color: DodgerBlue !important; 
				color: #ffffff; 
			}			
			.col-md-5.border-right a{
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2; /* number of lines to show */
						line-clamp: 2; 
				-webkit-box-orient: vertical;
			}
		</style>
                             
    </head>
    <body className='snippet-body'>
		<body id="body-pd">
		<form autocomplete="off" action="" method="POST">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<div class="autocomplete" style='width:20%; border-radius:8px; border: 2.5px solid #4169E1; margin-left:50px; position:fixed;'>
				<input class='form-control' type='search' id="myInput" name="carName" placeholder='search by car name...'></input>
			</div>
			<button class='btn btn-success' style='color:whitesmoke; position:relative; margin-left:-60px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>		
			<h5 style='color:#4169E1; font-weight:bold;'>Rent A Car</h5>
			<div class="header_img"> <i class="fa-solid fa-circle-info" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
		</header>
		</form>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
					style='width:50px; height:40px; margin-left:-11px;'>  <span class="nav_logo-name">flazefy</span> </a>
					<div class="nav_list"> 
						<a href="rentACar_C" class="nav_link active"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="rentGuide_C" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="message_C" class="nav_link"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
					</div> 
				</div>
				<a href="#" class="nav_link" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </a>
			</nav>
		</div>
    <!--Container Main start-->
    <div class="height-100">
		<div class='row' style='margin-top:80px;'>
			<div class=col-md-4>
				<div class='container' style='background:#4169E1; border-radius:10px; color:whitesmoke; padding:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
				<form action='rentACar_C/searchCarByControl' method="POST">
					<h4>Control Section</h4>
					<div class="row" style='margin-top:5px;'>
						<div class="col-sm">
							<h5 class='font-weight-100' style='font-size: 16px;'>Driver</h5>
							<select class="form-control" name="driver" style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121;">
								<option value="all">All</option>
								<option value="yes">With driver</option>
								<option value="none">None</option>
							</select>
						</div>
						<div class="col-sm">
							<h5 class='font-weight-100' style='font-size: 16px;'>Sort By</h5>
							<select class="form-control" name="sort" style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121;">
								<option value="1">Price (Up)</option>
								<option value="2">Price (Down)</option>
								<option value="3">Year (Up)</option>
								<option value="4">Year (Down)</option>
							</select>
						</div>
						<div class="col-sm-3">
							<h5 class='font-weight-100' style='font-size: 16px;'>Transmission</h5>
							<select class="form-control" name="transmission" style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121;">
								<option value="all">All</option>
								<option value="MT">Manual</option>
								<option value="AT">Automatic</option>
							</select>
						</div>
					</div>
					<div class="row" style='margin-top:5px;'>
						<div class="col-md-8">
							<h5 class='font-weight-100' style='font-size: 16px;'>City</h5>
							<select class="form-control" name="city" style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121;">
								<option value="Bandung">Bandung</option>
								<option value="Jakarta">Jakarta</option>
								<option value="Lombok">Lombok</option>
								<option value="Bali">Bali</option>
								<option value="Toraja">Toraja</option>
								<option value="Surabaya">Surabaya</option>
							</select>
						</div>
						<div class="col-sm-4">
							<button class='btn btn-success' style='margin-top:25px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i> Search</button>
						</div>
					</div>
				</form>		
				</div>
			</div>
			<div class='col-md-5'>
				<div class='container-fluid' style='width:100%;  padding:10px; background:#414141; border-radius:10px; padding-left:20px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
					<div class='row'>
						<div class='col-md-3'>
							<h4 style='margin-top:50px; color:whitesmoke;'>Top Used Car</h4>
							<button class='btn btn-link' style='margin-top:-15px; margin-left:-10px; color:#068ac2; text-decoration:none; font-size:15px;'><i class="fa-solid fa-arrow-right"></i> See More</button>
						</div>
						<div class='col-md-9'>
						<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							foreach($topUsedCar as $top){
								if(($i < 1)&&($top['city'] == $city)){
									echo"<div class='container' style='width:100%;'>
										<div class='row'>
											<div class='col-md'>
												<img src='http://localhost/Tripversal/assets/image/".$top['plate_number'].".png' style='height:130px; margin-left:-10px;' alt=''>
												<h6 style='font-size:14px; margin-top:5px; color:whitesmoke;'>".$top['car_name']." / ".$top['year']."</h6>
											</div>
											<div class='col-md'>
												<br>
												<p style='font-size:14px; color:whitesmoke;'><i class='fa-solid fa-location-dot'></i> ".$top['location']."</p>
												<div class='container-fluid' style='margin-top:-15px; margin-left:-25px; color:whitesmoke;'>
													<a style='font-size:14px; color:whitesmoke;'><i class='fa-solid fa-person'></i> ".$top['seat']." Seats</a>
													<a style='font-size:14px; color:whitesmoke;'><i class='fa-solid fa-star'></i> 5</a>
												</div>
												<p style='font-size:16px; color:#068ac2; font-weight:bold; margin-top:5px;'> Rp. "; $price = $top['price'];
												$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo" / Day</p>
												<form action='rentACar_C/bookCar' method='POST'>
													<input class='form-control' name='id_CarGuide' value='".$top['id_car']."' hidden>
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
			</div>
			<div class='col-md-3'>
				<div class='container-fluid' style='width:100%; height:100%; padding:10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
					<?php
						$city = $this->session->userdata('set_city');
						echo"<a class='weatherwidget-io' href='"; 
							if($city == 'Bandung'){
								echo "https://forecast7.com/en/n6d92107d62/bandung/";
							} else if($city == 'Jakarta'){
								echo "https://forecast7.com/en/n6d21106d85/jakarta/";
							} else if($city == 'Toraja'){
								echo "https://forecast7.com/en/n2d86119d84/north-toraja-regency/";
							} else if($city == 'Bali'){
								echo "https://forecast7.com/en/n8d67115d21/denpasar-city/";
							} else if($city == 'Lombok'){
								echo "https://forecast7.com/en/n8d60116d10/mataram-city/";
							} else if($city == 'Surabaya'){
								echo "https://forecast7.com/en/n7d26112d75/surabaya/";
							}

						echo"' data-label_1='".$city."' data-label_2=";
						echo date('y/m/d'); echo "-"; echo date('m/d', strtotime('+7 days'));
						echo" data-icons='Climacons Animated' data-mode='Forecast' data-theme='pure'>".$city." Weather</a>				
						<a style='color:grey; font-size:12px; font-style:italic;'>Source : https://weatherwidget.io/</a>";
					?>
				</div>
			</div>
		</div>
		<hr>

		<div class='row'>
			<div class=col-md-9>
				<h5><i class="fa-solid fa-car"></i> Available Vehicle 
					<span style='color:grey; font-size:13px; font-style:italic;'>
						Filtered by : [<?php echo "Driver: ".$this->session->userdata('set_driver').", "; 
							echo "Transmission: ".$this->session->userdata('set_transmission').", "; echo "City: ".$this->session->userdata('set_city');?>]
					</span>
				</h5>
				<div class="accordion" id="accordionExample">	
					<div data-toggle="collapse" href="#collapseCityCar" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
						<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
							margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
							<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'City Car')&&($car['city'] == $city)){
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
						<h5>City Car</h5>
						<div class='container' style='width:80%; margin-left:-20px;'>
							<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
						</div>						
						<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-40px; margin-right:20px;'></i>
					</div>
					<div id="collapseCityCar" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
						<div class='row' style='margin-top:40px;'>
							<?php
							$i = 0;
							//Initial state control
							// $city = 'Bandung';
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'City Car')&&($car['city'] == $city)){
									if($driver == 'all'){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if(($driver == 'yes')&&($car['driver'] != 'none')){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if($driver == $car['driver']){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
					<!--End of category--> 

					<div data-toggle="collapse" href="#collapseMinibus" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
						<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
							margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
							<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'Minibus')&&($car['city'] == $city)){
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
						<h5>Minibus</h5>
						<div class='container' style='width:80%; margin-left:-20px;'>
							<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
						</div>						
						<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-40px; margin-right:20px;'></i>
					</div>
					<div id="collapseMinibus" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
						<div class='row' style='margin-top:60px;'>
							<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'Minibus')&&($car['city'] == $city)){
									if($driver == 'all'){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if(($driver == 'yes')&&($car['driver'] != 'none')){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if($driver == $car['driver']){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
					<!--End of category--> 

					<div data-toggle="collapse" href="#collapseMotorcycle" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
						<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
							margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
							<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');							

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'Motorcycle')&&($car['city'] == $city)){
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
						<h5>Motorcycle</h5>
						<div class='container' style='width:80%; margin-left:-20px;'>
							<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
						</div>						
						<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-40px; margin-right:20px;'></i>
					</div>
					<div id="collapseMotorcycle" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
						<div class='row' style='margin-top:60px;'>
							<?php
							$i = 0;
							$city = $this->session->userdata('set_city');
							$driver = $this->session->userdata('set_driver');
							$transmission = $this->session->userdata('set_transmission');

							foreach ($carData as $car){
								if(($car['status'] == 'available')&&($car['type'] == 'Motorcycle')&&($car['city'] == $city)){
									if($driver == 'all'){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if(($driver == 'yes')&&($car['driver'] != 'none')){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if($driver == $car['driver']){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
					<!--End of category-->

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
									if($driver == 'all'){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if(($driver == 'yes')&&($car['driver'] != 'none')){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
									} else if($driver == $car['driver']){
										if($transmission == 'all'){
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
										} else if($transmission == $car['transmission']){
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
					<!--End of category-->
				</div>
			</div>

			<div class=col-md-3>
				<h5><i class="fa-solid fa-bell"></i> Notifications</h5>
				<button class='btn btn-link' style='float:right; margin-top:-35px; color:grey; text-decoration:none; font-size:13px;'><i class="fa-solid fa-trash-can"></i> Clear All</button>
				<div class='container-fluid' style='width:100%; max-height: calc(100vh - 210px); overflow-x: auto;'>
					<?php
						$i = 0;
						foreach($notification as $notif){
							if(($notif['id_user'] == '1')||($notif['id_user'] == '0')){
								if(($notif['type'] == 'message_car')){
									foreach($carData as $car){if($car['id_car'] == $notif['id_car_guide']){
										echo"<div class='card' id='notification' style='border-left: 4px solid #CB5FCE;'>
											<h6 style='font-weight:600;'>Message | ".$car['garage_name']."</h6>
											<a style='color:grey; font-size:12px;'><i class='fa-solid fa-car'></i> ".$car['car_name']." / ".$car['year']." 
												| <i class='fa-solid fa-location-dot'></i> ".$car['location']."</a>
											<div class='container-fluid' style='width:100%; border-radius:10px; background:#e3e3e3; padding:5px; margin:2px;'>
												<p style='font-size:13px; color:#212121;'>".$notif['text']."</p>
												<a style='color:grey; font-size:12px; font-style:italic;'>~";
													$cek = strtotime($notif['datetime']);
													if(date('Y-m-d', $cek) == date("Y-m-d")){
														$date = strtotime($notif['datetime']);
														echo " Today | " .date('h:i a', $date);
													} else {
														$date = strtotime($notif['datetime']);
														echo date('l, d F y | h:i a', $date);
													}
												echo"</a>
											</div>
										</div>";
									}
								}
								} else if(($notif['type'] == 'maintenance')){
								echo"<div class='card' id='notification' style='border-left: 4px solid #FF8E77;'>
									<h6 style='font-weight:600;'>Announcement | ".$notif['type']."</h6>
									<a style='color:grey; font-size:13px; color:#212121;'>".$notif['text']."</a>"; 
										$datefrom = strtotime($notif['date_from']); $dateuntil = strtotime($notif['date_until']);
										echo"<a style='color:grey; font-size:12px; font-style:italic;'> From : ";  
										echo date('l, d F y | h:i a', $datefrom)."</a>";
										echo"<a style='color:grey; font-size:12px; font-style:italic;'> Until : ";  
										echo date('l, d F y | h:i a', $dateuntil)."</a>
								</div>";
								} else if(($notif['type'] == 'promo')){
								echo"<div class='card' id='notification' style='border-left: 4px solid #FFC45D;'>
									<h6 style='font-weight:600;'>Announcement | ".$notif['type']."</h6>
									<h7 style='font-size:14px;'>Eid Mubarak Holiday</h7>
									<a style='color:grey; font-size:13px; color:#212121;'>".$notif['text']."</a>";
										$datefrom2 = strtotime($notif['date_from']); $dateuntil2 = strtotime($notif['date_until']);
										echo"<a style='color:grey; font-size:12px; font-style:italic;'> From : ";  
										echo date('l, d F y | h:i a', $datefrom2)."</a>";
										echo"<a style='color:grey; font-size:12px; font-style:italic;'> Until : ";  
										echo date('l, d F y | h:i a', $dateuntil2)."</a>
								</div>";
								} if(($notif['type'] == 'message_guide')){
									foreach($guideData as $guide){
										if($guide['id_guide'] == $notif['id_car_guide']){
											echo"<div class='card' id='notification' style='border-left: 4px solid #CB5FCE;'>
												<h6 style='font-weight:600;'>Message | Tour Guide</h6>
												<a style='color:grey; font-size:12px;'><i class='fa-solid fa-user'></i> ".$guide['fullname']." 
													| <i class='fa-solid fa-location-dot'></i> ".$guide['location']."</a>
												<div class='container-fluid' style='width:100%; border-radius:10px; background:#e3e3e3; padding:5px; margin:2px;'>
													<p style='font-size:13px; color:#212121;'>".$notif['text']."</p>
													<a style='color:grey; font-size:12px; font-style:italic;'>~";
														$cek = strtotime($notif['datetime']);
														if(date('Y-m-d', $cek) == date("Y-m-d")){
															$date = strtotime($notif['datetime']);
															echo " Today | " .date('h:i a', $date);
														} else {
															$date = strtotime($notif['datetime']);
															echo date('l, d F y | h:i a', $date);
														}
													echo"</a>
												</div>
											</div>";
										}
									}
								}
							}
						}
					?>
				</div>
				<hr>
				<h5><i class="fa-solid fa-lightbulb"></i> Tips</h5>
				<div class='container-fluid' style='width:105%; margin-left:-20px;'>
					<?php
						$page = 0; $item = 0;
						echo"<div id='carouselTips' class='carousel slide z-depth-2-half' data-ride='carousel'>
							<ol class='carousel-indicators'>";
							foreach ($tipsData as $data){
								if($item == 0 && $page == 0){
									echo"<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
									$item++;
									$page++;
								} else if ($item % 3 == 0){
									echo"<li data-target='#carouselExampleIndicators' data-slide-to='".$page."'></li>";
									$item++;
									$page++;
								} else if ($item % 3 != 0){
									$item++;
								}
							}
						echo"</ol>
							<div class='carousel-inner'>";
							$i = 1; $count = 0; $k = 1;
							$state = ' active';
							foreach($tipsData as $tips){
								if($k % 4 == 0  || $k == 1){
									echo"<div class='carousel-item".$state."' >
									<div class='col-md' style='width:100%; padding:10px;'>";
								}	
								echo"<div class='card' style='border-radius:10px; color:whitesmoke; padding:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin-bottom:10px;'>
									<div class='row'>
										<div class='col-md-4'>
											<img src='http://localhost/Tripversal/assets/icon/tips-".$tips['id_tips'].".png' alt='Tips-1.png'
												style='width:90px; height:90px;'>
										</div>
										<div class='col-md-8'>
											<a style='color:black; font-size:15px; margin-top:15px; display:block;'>".$tips['text']."</a>
										</div>
									</div>
								</div>";
								$k++;
								$state = ' ';
								if($k % 4 == 0){
									echo"</div>
								</div>";
								}
								$count = 0; $i++; 
							}
						echo"</div>
						</div>";
					?>	
					</div>
				</div>
			</div>

    	</div>
    </div>

	<script>
		function autocomplete(inp, arr) {
			var currentFocus;

			inp.addEventListener("input", function(e) {
				var a, b, i, val = this.value;
				closeAllLists();
				if (!val) { return false;}
				currentFocus = -1;
				a = document.createElement("DIV");
				a.setAttribute("id", this.id + "autocomplete-list");
				a.setAttribute("class", "autocomplete-items");
				this.parentNode.appendChild(a);
				for (i = 0; i < arr.length; i++) {
					if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
						b = document.createElement("DIV");
						b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
						b.innerHTML += arr[i].substr(val.length);
						b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
						b.addEventListener("click", function(e) {
							inp.value = this.getElementsByTagName("input")[0].value;
							closeAllLists();
						});
						a.appendChild(b);
					}
				}
			});
			inp.addEventListener("keydown", function(e) {
				var x = document.getElementById(this.id + "autocomplete-list");
				if (x) x = x.getElementsByTagName("div");
				if (e.keyCode == 40) {
					currentFocus++;
					addActive(x);
				} else if (e.keyCode == 38) { 
					currentFocus--;
					addActive(x);
				} else if (e.keyCode == 13) {
					e.preventDefault();
					if (currentFocus > -1) {
						if (x) x[currentFocus].click();
					}
				}
			});
			function addActive(x) {
				if (!x) return false;
				removeActive(x);
				if (currentFocus >= x.length) currentFocus = 0;
				if (currentFocus < 0) currentFocus = (x.length - 1);
				x[currentFocus].classList.add("autocomplete-active");
			}
			function removeActive(x) {
				for (var i = 0; i < x.length; i++) {
				x[i].classList.remove("autocomplete-active");
				}
			}
			function closeAllLists(elmnt) {
				var x = document.getElementsByClassName("autocomplete-items");
				for (var i = 0; i < x.length; i++) {
				if (elmnt != x[i] && elmnt != inp) {
					x[i].parentNode.removeChild(x[i]);
				}
				}
			}
			document.addEventListener("click", function (e) {
				closeAllLists(e.target);
			});
		}

		var carName = [<?php foreach($carData as $car){echo "'"; echo $car['car_name']." / ".$car['year'].", ".$car['city']; echo "',";} ?>];		
		autocomplete(document.getElementById("myInput"), carName);
	</script>

	<script>
		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;
				js.src='https://weatherwidget.io/js/widget.min.js';
				fjs.parentNode.insertBefore(js,fjs);
			}
		}
		(document,'script','weatherwidget-io-js');
	</script>

	<!--Container Main end-->
	<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
	<script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
   
		const showNavbar = (toggleId, navId, bodyId, headerId) =>{
		const toggle = document.getElementById(toggleId),
		nav = document.getElementById(navId),
		bodypd = document.getElementById(bodyId),
		headerpd = document.getElementById(headerId)

		// Validate that all variables exist
		if(toggle && nav && bodypd && headerpd){
		toggle.addEventListener('click', ()=>{
		// show navbar
		nav.classList.toggle('show')
		// change icon
		toggle.classList.toggle('bx-x')
		// add padding to body
		bodypd.classList.toggle('body-pd')
		// add padding to header
		headerpd.classList.toggle('body-pd')
		})
		}
		}

		showNavbar('header-toggle','nav-bar','body-pd','header')

		/*===== LINK ACTIVE =====*/
		const linkColor = document.querySelectorAll('.nav_link')

		function colorLink(){
		if(linkColor){
		linkColor.forEach(l=> l.classList.remove('active'))
		this.classList.add('active')
		}
		}
		linkColor.forEach(l=> l.addEventListener('click', colorLink))

		// Your code to run since DOM is loaded and ready
		});
		</script>

		<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
		myLink.addEventListener('click', function(e) {
		e.preventDefault();
		});</script>
           
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>
