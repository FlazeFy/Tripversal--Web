<!--Leonardho R. Sitanggang-->
<!DOCTYPE html>
<html>

    <head>
        <title>Tripversal | 
			<?php 
				if($this->session->userdata('set_typeBook') == 'Car Rental'){
					foreach($carData as $car){
						if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
							echo $car['car_name'];
						}
					}
				} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
					foreach($guideData as $guide){
						if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
							echo $guide['fullname'];
						}
					}
				}
			?>
		</title>
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
			.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show2{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

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
			.stats{

background: #f2f5f8 !important;
color: #000 !important;
}
.articles{
font-size:10px;
color: #808080;
}
.number1{
font-weight:500;
}
.number2{
font-weight:500;
}
.number3{
font-weight:500;
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
						<a href="#" class="nav_link active"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="#" class="nav_link"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
					</div> 
				</div>
				<a href="#" class="nav_link" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </a>
			</nav>
		</div>
    <!--Container Main start-->
    <div class="height-100">
		<br>
		<div class='row'>
			<div class=col-md-9>
				<div class='row'>
					<div class=col-md-5>
						<div class='container-fluid' style='background: linear-gradient(to right, #7385ff, #95a3fc); padding:10px; border-radius:10px; width:400px; height:260px; margin-left:-2%;'>
						<?php
							if($this->session->userdata('set_typeBook') == 'Car Rental'){
								foreach($carData as $car){
									if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
										echo "<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt='".$car['plate_number'].".png' 
										style='display: block; width: 100%; height: auto; margin-top:-30px; '>";
									}
								}
							}
						?>
						</div>
					</div>
					<div class=col-md-7>
						<h5 style='font-weight:600;'> <?php 
							if($this->session->userdata('set_typeBook') == 'Car Rental'){
								foreach($carData as $car){
									if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
										echo $car['car_name']." / ".$car['year'] ;
									}
								}
							} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
								foreach($guideData as $guide){
									if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
										echo $guide['fullname'];
									}
								}
							}
						?></h5>
						<div class='container-fluid' style='background:#f0f0f0; padding:10px;'>
							<div class='row' style='width:110%;'>
								<div class='col-md-8'>
									<a style='color:#808080; font-size:13px;'>Location</a>
									<h5 style='color:#212121; font-size:15px; font-weight:500;'> 
									<?php 
										if($this->session->userdata('set_typeBook') == 'Car Rental'){
											foreach($carData as $car){
												if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
													echo $car['location'];
												}
											}
										} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
											foreach($guideData as $guide){
												if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
													echo $guide['location'];
												}
											}
										}
									?>	
									</h5>
								</div>
								<div class='col-md-3'>
									<?php
										if($this->session->userdata('set_typeBook') == 'Car Rental'){
											foreach($carData as $car){
												if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
													echo"<button class='btn btn-success' style='font-size:13px; width:130px;' data-toggle='modal' data-target='#loc".$car['id_garage']."'><i class='fa-solid fa-location-dot'></i> See Location</button>
													<input type='text' value='".$car['garage_coordinate']."' id='myInput".$car['id_garage']."' hidden>
													<form class='form-inline' action='bookGuideCar_C/copyCoor' method='post'>
													<button class='btn btn-primary' type='submit' style='font-size:13px; margin-top:5px;' onclick='locationCopy".$car['id_garage']."()'><i class='fa-solid fa-copy'></i> Get Coordinate</button>
													</form>";
												}
											}
										}
									?>
								</div>
							</div>
						</div>
						<div class='container-fluid' style='padding:10px;'>
							<div class='row' style='width:110%;'>
								<div class='col-md-9'>
									<h5 style='color:#212121; font-size:15px; font-weight:500;'> 
									<?php 
										if($this->session->userdata('set_typeBook') == 'Car Rental'){
											foreach($carData as $car){
												if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
													echo "<a style='color:#808080; font-size:13px;'>Driver : </a>";
													if($car['driver'] == 'none'){
														echo"<span style='color:#212121; font-size:15px; font-weight:500;'>None</span>";
													} else {
														echo"<img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Driver' class='rounded-circle img-fluid' 
														style='width:35px; height:35px; type:button; cursor:pointer;'>  <span style='color:#068ac2; text-decoration: underline; type:button; cursor:pointer;'> flazefy</span>";
													}
												}
											}
										} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
											foreach($guideData as $guide){
												if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
													echo $guide['language'];
												}
											}
										}
									?>	
									</h5>
									<h5 style='font-size:14px;'>
										<?php 
											if($this->session->userdata('set_typeBook') == 'Car Rental'){
												foreach($carData as $car){
													if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
														echo "<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-person' style='color:#FF8E77;'></i> Seat : ".$car['seat']."</p>
														<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-gauge-simple-high' style='color:#FF65A3;'></i> Distance : ".$car['distance']."</p>
														<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-gas-pump' style='color:#CB5FCE;'></i> Fuel tank : ".$car['tank']." L</p>
														";
													}
												}
											} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
												foreach($guideData as $guide){
													if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
														echo $guide['language'];
													}
												}
											}
										?>	
									</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class=col-md-5>
						<h5>Review</h5>
						<hr>
					</div>
					<div class=col-md-7>
						<h5>Description</h5>
						<hr>
						<?php 
							if($this->session->userdata('set_typeBook') == 'Car Rental'){
								foreach($carData as $car){
									if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
										echo "<p>".nl2br($car['description'])."</p>";
									}
								}
							} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
								foreach($guideData as $guide){
									if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
										echo $guide['description'];
									}
								}
							}
						?>	
					</div>
				</div>
			</div>

			<div class=col-md-3>
				<?php
					if($this->session->userdata('set_typeBook') == 'Car Rental'){
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
												<span class='number1'>"; 
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
												<span class='number2'>"; 
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
												<span class='number3'>8.9</span>
											</div>
										</div>
										<div class='button d-flex flex-row align-items-center'>
											<button class='btn btn-sm btn-success w-50 m-1'>Chat</button>
											<button class='btn btn-sm btn-primary w-50'>Open</button>									
										</div>
									</div>
								</div>
								<h6>About us</h6>
								<div class='container-fluid' style='width:105%; max-height: calc(60vh - 160px); overflow-x: auto; margin-left:-20px; margin-bottom:5px;'>
									<p>".nl2br($car['garage_desc'])."</p>
								</div>
								";
							}
						}
					}
				?>

				<h5><i class="fa-solid fa-umbrella-beach"></i> Best Destination</h5>
				<hr>
				
			</div>

    	</div>
    </div>

	<!-- Zoom location modal -->
	<?php 
	$i = 1; 
	foreach($carData as $data){
	echo"<div class='modal fade' id='loc".$data['id_garage']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
	<div class='modal-dialog modal-xl' role='document'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h4>".$data['garage_name']."</h4>
				<img type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/MedStory/assets/Error.png'
					width='35px' height='35px'>
			</div>
			<div class='modal-body'>
				<div id='googleMap".$data['id_garage']."' style='width:100%;height:500px; border-radius:10px;'></div>
			</div>			
		</div>
	</div>
	</div>";	
	}?>

	<!-- Success copy modal -->
	<?php if(isset($success_copy)) { echo"
		<div class='modal fade' id='succescopy' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
				<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
			</div>
			<div class='modal-body'>
				<img src='http://localhost/Tripversal/assets/icon/success.png' alt='success.png' style='display: block;
					margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
				<p style='text-align:center; font-weight:bold;'>".$success_copy."</p>
			</div>		
			</div>
		</div>
		</div>";}	
	?>


	<script>
		function myMap() {
		<?php
			foreach($carData as $data){
				echo"
				var mapProp".$data['id_garage']."= {
					center:new google.maps.LatLng(".$data['garage_coordinate']."),
					zoom:15,
				};
				var map".$data['id_garage']." = new google.maps.Map(document.getElementById('googleMap".$data['id_garage']."'),mapProp".$data['id_garage'].");
				";
			}
		?>
			var markers = [
		<?php
			foreach($carData as $data){
				$coor  = $data['garage_coordinate'];
				$newCoor = explode(", ", $coor);
				echo"{
					coords:{lat:".$newCoor[0].",lng:".$newCoor[1]."},
					content:'<div><h4>".$data['garage_name']."</h4><p>".$data['garage_phone']."</p></div>'
				},";
			}
		?>
			];

			
			<?php
			foreach($carData as $data){
				echo"
				// Loop through markers
				for(var i = 0;i < markers.length;i++){
					// Add marker
					addMarker".$data['id_garage']."(markers[i]);
				}
				// Add Marker Function
				function addMarker".$data['id_garage']."(props){
					var marker = new google.maps.Marker({
					position:props.coords,
					map:map".$data['id_garage'].",
					//icon:props.iconImage
					});
					// Check for customicon
					if(props.iconImage){
					// Set icon image
					marker.setIcon(props.iconImage);
					}
					// Check content
					if(props.content){
					var infoWindow = new google.maps.InfoWindow({
						content:props.content
					});
					marker.addListener('click', function(){
						infoWindow.open(map".$data['id_garage'].", marker);
					});
					}
				}";
			}
			?>
		}
		<?php
				foreach($carData as $data){
				echo"
				function locationCopy".$data['id_garage']."(){
					/* Get the text field */
					var copyText = document.getElementById('myInput".$data['id_garage']."');
					/* Select the text field */
					copyText.select();
					copyText.setSelectionRange(0, 99999); /* For mobile devices */
					/* Copy the text inside the text field */
					navigator.clipboard.writeText(copyText.value);
				}";
			}
			?>	
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADRj0HHweuH7Y8Ont5LLO3l6qLODqo9pg&callback=myMap"></script>
	
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
		function refreshMessage() {
			window.location.href="http://localhost/Tripversal/bookGuideCar_C";  
		}
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
		nav.classList.toggle('show2')
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
		<script>
			$(window).on('load', function() {
				$('#succescopy').modal('show');
			});
        </script>
	</body>
</html>