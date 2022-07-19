<!DOCTYPE html>
<html>
    <head>
        <title>Tripversal | Profile</title>
        <!--Meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--CDN Bootstrap CSS-->
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
		
        <!--Source file.-->
		<link href='http://localhost/Tripversal/assets/css/sidebar.css' rel='stylesheet'>
        
		<style>
			#notification{
				padding-top:3px; padding-bottom:3px; padding-right:6px; padding-left:10px;
				margin-left:-20px; margin-bottom:20px;
				border-radius:0px; border:none; 
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

			.py-3 {
				padding-top: 1rem!important;
				padding-bottom: 1rem!important;
			}
			.px-4 {
				padding-right: 1.5rem!important;
				padding-left: 1.5rem!important;
			}
			.flex-grow-0 {
				flex-grow: 0!important;
			}
			.border-top {
				border-top: 1px solid #dee2e6!important;
			}
			#contactImage{
				box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
				width:40px;
				margin-right:10px;
			}
			.flex-grow-1.ml-3.w-100 .text-secondary{
				font-size:12px; 
				overflow: hidden; 
				text-overflow: ellipsis; 
				display: -webkit-box; 
				-webkit-line-clamp: 1; 
				line-clamp: 1; 
				-webkit-box-orient: vertical;
			}
			.image-upload>input {
                display: none;
            }
			/*Fixed for sidebar*/
			.fade.show{
				width:100% !important;
			}
			.collapse.show{
				width:100% !important;
			}
		</style>
                             
    </head>

	<body id="body-pd">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			<h5 style='color:#4169E1; font-weight:bold;'>Profile</h5>
			<div class="header_img"> <i class="fa-solid fa-circle-info" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
		</header>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> 
					<a href="#" class="nav_logo active" style="margin-left:-5px;"> <img src='http://localhost/Tripversal/assets/uploads/user/
						<?php 
							foreach($loginData as $u){
								if($u['username'] == $this->session->userdata("userTrack")){
									echo $u['imageURL'];
								}
							}
						?>.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
						style='width:50px; height:40px; margin-left:-11px;'>  
						<span class="nav_logo-name">
						<?php 
							echo $this->session->userdata("userTrack");
						?>
						</span> 
					</a>
					<div class="nav_list"> 
						<a href="rentACar_C" class="nav_link"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="rentGuide_C" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="message_C" class="nav_link"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
					</div> 
				</div>
				<form action='landing_C/logout' method='post'>
					<button type="submit" class="nav_link border-0 w-100 rounded" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </button>
				</form>			
			</nav>
		</div>

		<!--Container Main start-->
		<div class="container w-75">
			<h3 class="mb-2">Profile</h3>
			<?php
				foreach($loginData as $u){
					if($u['username'] == $this->session->userdata("userTrack")){
						echo"
						<div class='row gutters-sm'>
							<div class='col-md-4 mb-3'>
								<div class='container-fluid p-3 rounded border-gray border' >
									<a class='fw-bold text-dark text-left'>Profile Image</a>
									<div class='d-flex flex-column align-items-center text-center'>
										<form action='profile_C/updateImage' method='POST' id='formImage' enctype='multipart/form-data'>
										<img id='frame' class='img logo rounded-circle shadow' src='http://localhost/Tripversal/assets/uploads/user/".$u['imageURL'].".jpg' alt='".$u['imageURL']."'
											style='display: block; margin-left: auto; margin-right: auto; width:200px;'>
											<div class='image-upload' id='formFileEditAcc' onchange='previewEditAcc()'>
												<label for='file-input'>
													<img class='rounded-circle shadow d-block position-relative p-1' style='width:50px; height:50px; top:-50px; left:50px; background:#198754;' title='Change Image'
														src='http://localhost/Tripversal/assets/icon/ChangeImage.png'/>
												</label>
												<input id='file-input' type='file' name='uploadImage'/>
											</div>
											<input value='".$u['id_user']."' name='id_user' hidden/>
										</form>
										<div class='mb-1'>
											<h4>".$u['username']."</h4>
											<p class='text-muted font-size-sm'>".$u['fullname']."</p>
											<p class='text-secondary mb-1'><i class='fa-solid fa-location-dot'></i> ".$u['address']."</p>
										</div>
									</div>
								</div>
								<div class='container-fluid mt-3 p-3 rounded border-gray border'>
									<a class='fw-bold text-dark text-left'>History</a>
									<div class='row mt-3' style='justify-content:center;'>
										<div class='col-md-5'>
											<a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
											<a style='font-size:12px; white-space:nowrap;'>Car Rent</a>
										</div>
										<div class='col-md-5'>
											<a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
											<a style='font-size:12px; white-space:nowrap;'>Tour Guide</a>
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-8'>
								<form action='profile_C/updateData' method='POST'>
								<div class='container-fluid mb-3 p-4 rounded border-gray border'>
									<a class='fw-bold text-dark text-left'>Edit Profile</a>
									<input value='".$u['id_user']."' name='id_user' hidden>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='username' class='form-control' value='".$u['username']."' placeholder='".$u['username']."' disabled>
										<label for='floatingInput'>Username</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='email' class='form-control' value='".$u['email']."' placeholder='".$u['email']."' disabled>
										<label for='floatingInput'>Email</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='fullname' class='form-control' value='".$u['fullname']."' placeholder='".$u['fullname']."' required>
										<label for='floatingInput'>Fullname</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='address' class='form-control' value='".$u['address']."' placeholder='".$u['address']."' required>
										<label for='floatingInput'>Address</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='nik' class='form-control' value='".$u['nik']."' placeholder='".$u['nik']."' required>
										<label for='floatingInput'>ID Card Number / Passport</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='password' name='password' class='form-control' value='".$u['password']."' placeholder='".$u['password']."' required>
										<label for='floatingInput'>Password</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<input type='text' name='phone' class='form-control' value='".$u['phone']."' placeholder='".$u['phone']."' required>
										<label for='floatingInput'>Phone</label>
									</div>
									<div class='form-floating w-100 mx-auto my-2'>
										<button class='btn btn-success w-25 mx-auto my-2' type='submit'><i class='fa-solid fa-pen-to-square'></i> Save Changes</button>
									</div>		
								</div>
								</form>
							</div>
						</div>";
					}
				}
			?>
			</div>
		</div>

		<?php 
			if(isset($failedEdit)) { 
				echo"<div class='modal fade' id='failedEdit' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title'>Error</h5>
						<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
					</div>
					<div class='modal-body'>
						<img src='http://localhost/MedStory/assets/icon/Failed.png' alt='Failed.png' style='display: block;
							margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
						<p style='text-align:center;'>".$failedEdit."</p>
					</div>		
					</div>
				</div>
				</div>";
			}	
		?>

		<?php 
			if(isset($successEdit)) { 
				echo"<div class='modal fade' id='successEdit' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title'>Error</h5>
						<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
					</div>
					<div class='modal-body'>
						<img src='http://localhost/MedStory/assets/icon/success.png' alt='Failed.png' style='display: block;
							margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
						<p style='text-align:center;'>".$successEdit."</p>
					</div>		
					</div>
				</div>
				</div>";
			}	
		?>

		<!--Container Main end-->
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		
		<script type='text/javascript'>
			//Refresh page.
			function refreshMessage() {
				window.location.href="http://localhost/Tripversal/profile_C";  
			}

			//Image upload preview.
			function previewEditAcc() {
				frame.src = URL.createObjectURL(event.target.files[0]);
			}
			document.getElementById("formFileEditAcc").onchange = function() {
				document.getElementById("formImage").submit();
			};

			document.addEventListener("DOMContentLoaded", function(event) {
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

		<script type='text/javascript'>
			var myLink = document.querySelector('a[href="#"]');
			myLink.addEventListener('click', function(e) {
			e.preventDefault();
			});
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<script>
			//Modal setting.
			$(window).on('load', function() {
				$('#successEdit').modal('show');
				$('#failedEdit').modal('show');
			})
			$('#successEdit').modal({backdrop: 'static', keyboard: false})  
			$('#failedEdit').modal({backdrop: 'static', keyboard: false})  
		</script>
	</body>
</html>
