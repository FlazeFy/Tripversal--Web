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
		<link href='http://localhost/Tripversal/assets/css/sidebar.css' rel='stylesheet'>		
		
		<style>
			
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
				color: #4169e1;
				animation: up-down 1s ease-in-out infinite alternate-reverse both;
			}
			#hero .btn-scroll i {
				font-size: 48px;
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
			<?php
				//Side bar.
				$this->load->view('landing/sidebar');
			?>
		</div>
		
		<section id="about" class="about">
			<div class="container">
				<div class="section-title">
					<span>About Us</span>
					<h2>Tripversal</h2>
					<p>Tripversal is an application that will help you travel around Indonesia. With Tripversal you can rent a various of vehicle like citycar, minibus, motorcycle, even a bus. Not only that, you can also rent a tour guide with various spoken language. Our vehicle and guide are trusted and will help you through the day. So dont hesitate and book now to get a trip that will never be forgotten.</p>
				</div>
				<div class="accordion" id="accordionLanding">
					<div class="collapse show" id="loginAcc" data-bs-parent="#accordionLanding">
						<!--Login-->
						<?php
							$this->load->view('landing/form/login');
						?>
					</div>

					<div class="collapse" id="createAcc" data-bs-parent="#accordionLanding">
						<!--Login-->
						<?php
							$this->load->view('landing/form/createAcc');
						?>
					</div>
				</div>

			</div>
		</section>

		<section id="services" class="services">
			<!--FAQ-->
			<?php
				$this->load->view('landing/services');
			?>
		</section>

		<section id="faq" class="faq">
			<!--FAQ-->
			<?php
				$this->load->view('landing/faq');
			?>
		</section>

		<section id="feedback" class="faq">
			<!--Feedback-->
			<?php
				$this->load->view('landing/feedback');
			?>
		</section>

		<section id="others" class="faq">
			<!--Others platform-->
			<?php
				$this->load->view('landing/others');
			?>
		</section>

		<!--Footer-->
		<?php
			$this->load->view('footer');
		?>

		<!--Modal-->
		<?php
			$this->load->view('popup/failed');
		?>
			
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		
		<script type='text/javascript'>
			//Refresh page.
			function refreshMessage() {
				window.location.href="http://localhost/Tripversal";  
			}

			//Preview upload image.
			function preview() {
				frame.src = URL.createObjectURL(event.target.files[0]);
			}
			function clearImage() {
				document.getElementById('uploadImage').value = null;
				frame.src = "http://localhost/Tripversal/assets/icon/profile.png";
			}

			//Sidebar.
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

		<!-- Vendor JS Files -->
		<script src="http://localhost/Tripversal/assets/js/vendor/purecounter/purecounter.js"></script>
	</body>
</html>
