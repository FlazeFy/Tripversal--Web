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
			.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;z-index: var(--z-fixed);transition: .5s}
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
			.showSide{left: 0}
			.active{color: var(--white-color); background:#414141; border-top-right-radius:10px; border-bottom-right-radius:10px;}
			.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
			.l-navbar{left: 0;padding: 1rem 1rem 0 0}.showSide{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

			
			#notification{
				padding-top:3px; 
				padding-bottom:3px; 
				padding-right:6px; 
				padding-left:10px;
				margin-left:-20px; 
				margin-bottom:20px;
				border-radius:0px; 
				border:none; 
			}
			.btn.btn-primary{
				background:#4169E1;
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
			#hero {
				width: 100%;
				height: 80vh;
				background: url("http://localhost/Tripversal/assets/image/bg-landing.jpg") top right;
				background-size: cover;
				position: relative;
				left:-40px;
				margin-top:-100px;
			}
			#hero:before {
				content: "";
				background: rgba(0, 0, 0, 0.65);
				position: absolute;
				bottom: 0;
				top: 0;
				left: 0;
				right: 0;
			}
			#hero .hero-container {
				position: absolute;
				bottom: 0;
				top: 0;
				left: 0;
				right: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
				padding: 0 15px;
			}
			#hero h1 {
				margin: 0 0 10px 0;
				font-size: 64px;
				color: #fff;
			}
			#hero h2 {
				color: #eee;
				margin-bottom: 50px;
				font-size: 13px;
				font-weight: 500;
				letter-spacing: 1px;
				text-transform: uppercase;
			}
			#hero .btn-scroll {
				transition: 0.4s;
				color: rgba(255, 255, 255, 0.6);
				animation: up-down 1s ease-in-out infinite alternate-reverse both;
			}
			#hero .btn-scroll i {
				font-size: 48px;
			}
			#hero .btn-scroll:hover {
				color: #ffb727;
			}
			@media (min-width: 1024px) {
			#hero {
				background-attachment: fixed;
			}
			}
			@media (max-width: 575px) {
			#hero h1 {
				font-size: 40px;
			}
			#hero h2 {
				text-align: center;
				margin-bottom: 30px;
			}
			}

			@-webkit-keyframes up-down {
			0% {
				transform: translateY(5px);
			}
			100% {
				transform: translateY(-5px);
			}
			}

			@keyframes up-down {
			0% {
				transform: translateY(5px);
			}
			100% {
				transform: translateY(-5px);
			}
			}
			section {
				padding: 60px 0;
			}

			.section-bg {
				background-color: white;
			}

			.section-title {
				text-align: center;
				padding: 30px 0;
				position: relative;
			}
			.section-title h2 {
				font-size: 32px;
				font-weight: 700;
				text-transform: uppercase;
				margin-bottom: 20px;
				padding-bottom: 0;
				color: #3b434a;
				position: relative;
				z-index: 2;
			}
			.section-title span {
				position: absolute;
				top: 30px;
				color: #eef0f2;
				left: 0;
				right: 0;
				z-index: 1;
				font-weight: 700;
				font-size: 52px;
				text-transform: uppercase;
				line-height: 0;
			}
			.section-title p {
				margin-bottom: 0;
				position: relative;
				z-index: 2;
			}
			@media (max-width: 575px) {
			.section-title h2 {
				font-size: 28px;
				margin-bottom: 15px;
			}
			.section-title span {
				font-size: 38px;
			}
			}
			.about .content h3 {
				font-weight: 700;
				font-size: 26px;
				color: #3b434a;
				text-transform: uppercase;
			}
			.about .content ul {
				list-style: none;
				padding: 0;
			}
			.about .content ul li {
				margin-bottom: 20px;
				display: flex;
				align-items: center;
			}
			.about .content ul strong {
				margin-right: 10px;
			}
			.about .content ul i {
				font-size: 16px;
				margin-right: 5px;
				color: #ffb727;
				line-height: 0;
			}
			.about .content p:last-child {
				margin-bottom: 0;
			}
			.about .content .count-box {
				width: 100%;
			}
			.about .content .count-box i {
				display: block;
				font-size: 36px;
				color: #ffb727;
				float: left;
				line-height: 0;
			}
			.about .content .count-box span {
				font-size: 36px;
				line-height: 30px;
				display: block;
				font-weight: 700;
				color: #3b434a;
				margin-left: 50px;
			}
			.about .content .count-box p {
				padding: 15px 0 0 0;
				margin: 0 0 0 50px;
				font-size: 14px;
				color: #5d6a75;
			}
			.about .content .count-box a {
				font-weight: 600;
				display: block;
				margin-top: 20px;
				color: #5d6a75;
				font-size: 15px;
				transition: ease-in-out 0.3s;
			}
			.about .content .count-box a:hover {
				color: #82909c;
			}
			.about .image {
				background: url("../img/me.jpg") center center no-repeat;
				background-size: cover;
				min-height: 500px;
			}
			.about .skills-content {
				margin-top: 30px;
			}
			.about .skills-content .progress {
				height: 60px;
				display: block;
				background: none;
				border-radius: 0;
			}
			.about .skills-content .progress .skill {
				padding: 10px 0;
				margin: 0 0 6px 0;
				text-transform: uppercase;
				display: block;
				font-weight: 700;
				color: #3b434a;
			}
			.about .skills-content .progress .skill .val {
				float: right;
				font-style: normal;
			}
			.about .skills-content .progress-bar-wrap {
				background: #e6e8eb;
			}
			.about .skills-content .progress-bar {
				width: 1px;
				height: 10px;
				transition: 0.9s;
				background-color: #ffb727;
			}
		</style>                 
    </head>

    <body id="body-pd">
		<!--Bg landing-->
		<section id="hero">
			<div class="hero-container">
				<h1>Tripversal</h1>
				<h2>-The joy of trip-</h2>
				<a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
			</div>
		</section>
			
		<form autocomplete="off" action="" method="POST">
			<header class="header border-0 bg-transparent" id="header">
				<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
			</header>
		</form>

		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
					style='width:50px; height:40px; margin-left:-11px;'>  <span class="nav_logo-name">flazefy</span> </a>
					<div class="nav_list"> 
						<a href="" class="nav_link"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="" class="nav_link"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
					</div> 
				</div>
				<a href="#" class="nav_link" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </a>
			</nav>
		</div>
		
		<section id="about" class="about">
			<div class="container">

				<div class="section-title">
				<span>About Us</span>
				<h2>Tripversal</h2>
				<p>Tripversal is an application that will help you travel around Indonesia. With Tripversal you can rent a various of vehicle like citycar, minibus, motorcycle, even a bus. Not only that, you can also rent a tour guide with various spoken language. Our vehicle and guide are trusted and will help you through the day. So dont hesitate and book now to get a trip that will never be forgotten.</p>
				</div>

				<div class="row">
					<div class="col-lg-8 d-flex flex-column align-items-stretch">
						<div class="content ps-lg-4 d-flex flex-column justify-content-center">
							<div class="row mt-n4">
								<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="fa-solid fa-car" style="color: #20b38e;"></i>
									<span data-purecounter-start="0" data-purecounter-end="
										<?php 
											$i = 0;
											foreach($carData as $car){
												$i++;
											}
											echo $i;
										?>
									" data-purecounter-duration="1" class="purecounter"></span>
									<p><strong>Car</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
								</div>
								</div>

								<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="fa-solid fa-people-group" style="color: #8a1ac2;"></i>
									<span data-purecounter-start="0" data-purecounter-end="
										<?php 
											$i = 0;
											foreach($guideData as $guide){
												$i++;
											}
											echo $i;
										?>" data-purecounter-duration="1" class="purecounter"></span>
									<p><strong>Tour Guide</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
								</div>
								</div>

								<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="fa-solid fa-user-tie" style="color: #2cbdee;"></i>
									<span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
									<p><strong>Experienced Driver</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
								</div>
								</div>

								<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
								<div class="count-box">
									<i class="fa-solid fa-suitcase" style="color: #ffb459;"></i>
									<span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
									<p><strong>Trips</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
								</div>
								</div>
							</div>
						</div><!-- End .content-->
							
					</div>
					<div class="col-lg-4 d-flex flex-column align-items-stretch">
						<form action="landing_C/login"  method="POST">
							<div class="form-floating w-75 mx-auto my-2">
								<input type="username" name="username" class="form-control" id="floatingInput" required>
								<label for="floatingInput">Username</label>
							</div>
							<div class="form-floating w-75 mx-auto my-2">
								<input type="password" name="password" class="form-control" id="floatingInput" required>
								<label for="floatingInput">Password</label>
							</div>
							<div class="form-floating w-75 mx-auto my-2">
								<button class="btn btn-success w-100 mx-auto my-2" type="submit">Log In</button>
								<a class="btn btn-primary w-100 mx-auto my-2" ><i class="fa-solid fa-arrow-right-to-bracket"></i> Sign Up</a>
							</div>
						</form>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<?php 
			if(isset($errorLogin)) { 
				echo"<div class='modal fade' id='errorLogin' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title'>Informasi</h5>
						<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
					</div>
					<div class='modal-body'>
						<img src='http://localhost/MedStory/assets/icon/Failed.png' alt='Failed.png' style='display: block;
							margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
						<p style='text-align:center;'>".$errorLogin."</p>
					</div>		
					</div>
				</div>
				</div>";
			}	
		?>
			
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		
		<script type='text/javascript'>
			//Refresh page.
			function refreshMessage() {
				window.location.href="http://localhost/Tripversal";  
			}

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
				nav.classList.toggle('showSide')
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

		<!-- Vendor JS Files -->
		<script src="http://localhost/Tripversal/assets/js/vendor/purecounter/purecounter.js"></script>

		<script>
			//Modal setting.
			$(window).on('load', function() {
				//$('#successLogin').modal('show');
				$('#errorLogin').modal('show');
			})
			$('#errorLogin').modal({backdrop: 'static', keyboard: false})  
			
		</script>
	</body>
</html>
