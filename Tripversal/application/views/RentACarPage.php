<!--Leonardho R. Sitanggang-->
<!DOCTYPE html>
<html>

    <head>
        <title>Tripversal | RentACarPage</title>
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
			.header_img{width: 60px;height: 40px;display: flex;justify-content: center;overflow: hidden; margin-top:15px;}
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
			.active{color: var(--white-color); background:#454555; border-top-right-radius:10px; border-bottom-right-radius:10px;}
			.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
			.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

			/*Card item*/
			.glassBox {
				width: 100%;
				height: 270px;
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
				transform: translate(-7px, -14px) scale(1.25);
			}			
		</style>
                             
    </head>
    <body className='snippet-body'>
		<body id="body-pd">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<input class='form-control' type='search' style='width:20%; border-radius:8px; border: 2.5px solid #4169E1; margin-left:50px; position:fixed;' placeholder='search by car name...'></input>
			<h5 style='color:#4169E1; font-weight:bold;'>Rent A Car</h5>
			<div class="header_img"> <i class="fa-solid fa-bell" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
		</header>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
					style='width:50px; height:40px; margin-left:-11px;'>  <span class="nav_logo-name">flazefy</span> </a>
					<div class="nav_list"> <a href="#" class="nav_link active"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="#" class="nav_link"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-circle-info"></i> <span class="nav_name">About us</span> </a> </div>
				</div> 
				<a href="#" class="nav_link" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </a>
			</nav>
		</div>
    <!--Container Main start-->
    <div class="height-100">
		<div class='row' style='margin-top:80px;'>
			<div class=col-md-4>
				<div class='container' style='background:#4169E1; border-radius:10px; color:whitesmoke; padding:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
					<h4>Control Section</h4>
					<div class="row" style='margin-top:5px;'>
						<div class="col-sm">
							<h5 class='font-weight-100' style='font-size: 16px;'>Driver</h5>
							<select class="form-control" name="driver" style="background:#f4f4f4; border-width: 0 0 3px; 
								border-bottom: 3.5px solid #4183D7; color:#212121;">
								<option value="all">All</option>
								<option value="yes">With driver</option>
								<option value="no">None</option>
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
						<div class="col-sm-6">
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
							<button class='btn btn-success' style='margin-top:25px;'><i class="fa-solid fa-magnifying-glass"></i> Search</button>
						</div>
						<div class="col-sm">
							<button class='btn btn-dark' style='margin-top:25px; color:white;'><i class="fa-solid fa-hand"></i></button>
						</div>
					</div>		
				</div>
			</div>
			<div class=col-md-6>
			
			
			</div>
		</div>
		<hr>
		<div class="accordion" id="accordionExample">	
			<div data-toggle="collapse" href="#collapseCityCar" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
				<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
					margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'City Car')){
							$i++;
						}
					}
					echo $i; 
					?>
				</a></div>
				<h5>City Car</h5>
				<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
				<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-5px; margin-right:20px;'></i>
			</div>
			<div id="collapseCityCar" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
				<div class='row' style='margin-top:40px;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'City Car')){
							echo"
							<div class='glassBox'>
								<div class='glassBox__imgBox'>
									<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt=''>
									<h3 class='glassBox__title'>".$car['car_name']." / ".$car['year']."</h3>
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
											}
											echo $total;
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
											<button type='button' class='btn btn-success'>Book Now</button>
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
			<!--End of category--> 

			<div data-toggle="collapse" href="#collapseMinibus" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
				<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
					margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Minibus')){
							$i++;
						}
					}
					echo $i; 
					?>
				</a></div>
				<h5>Minibus</h5>
				<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
				<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-5px; margin-right:20px;'></i>
			</div>
			<div id="collapseMinibus" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
				<div class='row' style='margin-top:60px;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Minibus')){
							echo"
							<div class='glassBox'>
								<div class='glassBox__imgBox'>
									<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt=''>
									<h3 class='glassBox__title'>".$car['car_name']." / ".$car['year']."</h3>
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
											}
											echo $total;
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
											<button type='button' class='btn btn-success'>Book Now</button>
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
			<!--End of category--> 

			<div data-toggle="collapse" href="#collapseMotorcycle" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
				<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
					margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Motorcycle')){
							$i++;
						}
					}
					echo $i; 
					?>
				</a></div>
				<h5>Motorcycle</h5>
				<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
				<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-5px; margin-right:20px;'></i>
			</div>
			<div id="collapseMotorcycle" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
				<div class='row' style='margin-top:60px;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Motorcycle')){
							echo"
							<div class='glassBox'>
								<div class='glassBox__imgBox'>
									<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt=''>
									<h3 class='glassBox__title'>".$car['car_name']." / ".$car['year']."</h3>
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
											}
											echo $total;
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
											<button type='button' class='btn btn-success'>Book Now</button>
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
			<!--End of category-->

			<div data-toggle="collapse" href="#collapseOthers" role="button" aria-expanded="false" aria-controls="collapseExample" style='margin-bottom:10px;'>
				<div class='container' style='background:#068ac2; color:whitesmoke; border-radius:100px; width:30px; height:30px; position:relative; float:left; padding:2px;
					margin-right:10px; bottom:3px;'><a style='margin-left:9px; top:15px; font-size:13px; text-align:center;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Others')){
							$i++;
						}
					}
					echo $i; 
					?>
				</a></div>
				<h5>Others</h5>
				<a style='font-style:italic; color:grey; font-size:13px;'><i class="fa-solid fa-circle-info"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis tellus in metus vulputate. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna.</a>
				<i class="fa-solid fa-circle-chevron-down fa-lg" style='float:right; margin-top:-5px; margin-right:20px;'></i>
			</div>
			<div id="collapseOthers" class='card-body collapse show' style='width:100%; margin-bottom:20px;'>
				<div class='row' style='margin-top:60px;'>
					<?php
					$i = 0;
					foreach ($carData as $car){
						if(($car['status'] == 'available')&&($car['type'] == 'Others')){
							echo"
							<div class='glassBox'>
								<div class='glassBox__imgBox'>
									<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt=''>
									<h3 class='glassBox__title'>".$car['car_name']." / ".$car['year']."</h3>
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
											}
											echo $total;
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
											<button type='button' class='btn btn-success'>Book Now</button>
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
			<!--End of category-->
		</div>
    </div>


	<!--Container Main end-->
	<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
	<script type='text/javascript' src='#'></script>
	<script type='text/javascript' src='#'></script>
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
