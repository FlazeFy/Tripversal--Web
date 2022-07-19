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
			/*Footer*/
            .deneb_footer .widget_wrapper {
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 50px;
                padding-bottom: 50px;
				border-radius:40px 40px 0px 0px;
				background:#4169e1;
            }
            @media (max-width: 767px) {
                .deneb_footer .widget_wrapper .widget {
                    margin-bottom: 40px;
                }
            }
            .deneb_footer .widget_wrapper .widget .widget_title {
                margin-bottom: 30px;
				color:white;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4 {
                font-weight: bold;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4:after {
                content: "";
                display: block;
                max-width: 38px;
                height: 2px;
                margin-top: 5px;
            }
            .deneb_footer .widget_wrapper .widegt_about p {
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li {
                margin-bottom: 5px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a {
                text-transform: capitalize;
                color: white;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a:hover,
            .deneb_footer .widget_wrapper .widget_link ul li a:focus {
                color: #4169e1;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
                max-width: 250px;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
                font-size: 12px;
                color: white;
                margin-right: 10px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p {
                color: white;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
                display: block;
            }
            .deneb_cta .cta_wrapper {
                padding: 20px;
                max-width: 970px;
                border-radius: 15px;
                margin: auto;
                margin-bottom: -185px;
                position: relative;
                background:#414141;
                z-index: 1;
            }
            .deneb_cta .cta_wrapper:after {
                background-position: bottom;
                width: 100%;
                height: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: -1;
            }
            .deneb_cta .cta_wrapper .cta_content h3 {
                color: #fff;
                font-weight: bold;
            }
            @media (max-width: 767px) {
                .deneb_cta .cta_wrapper .cta_content h3 {
                    font-size: 24px;
                }
            }
            .deneb_cta .cta_wrapper .cta_content p {
                color: #fff;
            }

			.services .icon-box {
				padding: 30px;
				position: relative;
				overflow: hidden;
				background: #fff;
				border-radius: 30px;
				box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
				transition: all 0.3s ease-in-out;
				text-align: center;
				border: 3px solid #fff;
			}
			.services .icon {
				margin: 0 auto 20px auto;
				padding-top: 17px;
				display: inline-block;
				text-align: center;
				border-radius: 50%;
				width: 70px;
				height: 70px;
				background:	#c9d3f0;
			}
			.services .icon i {
				font-size: 36px;
				line-height: 1;
				color: #4169E1;
			}
			.services .title {
				font-weight: 700;
				margin-bottom: 15px;
				font-size: 18px;
			}
			.services .title a {
				color: #111;
				transition: 0.3s;
			}
			.services .description {
				font-size: 15px;
				line-height: 28px;
				margin-bottom: 0;
			}
			.services .icon-box:hover {
				border-color: #4169E1;
			}
			.services .icon-box:hover .title a {
				color: #4169E1;
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
				<div class="accordion" id="accordionLanding">
					<div class="collapse show" id="loginAcc" data-bs-parent="#accordionLanding">
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
											<span data-purecounter-start="0" data-purecounter-end="<?php $i = 0; foreach($driverData as $dr){$i++;} echo $i; ?>" data-purecounter-duration="1" class="purecounter"></span>
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
							<div class="col-lg-4 d-flex flex-column align-items-stretch text-center">
								<form action="landing_C/login"  method="POST">
									<h5 class="fw-bold">Create Account</h5>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="username" name="username" class="form-control">
										<label for="floatingInput">Username</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="password" name="password" class="form-control">
										<label for="floatingInput">Password</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<button class="btn btn-success w-100 mx-auto my-2" type="submit">Log In</button>
										<a class="text-secondary text-center">Don't have an account?</a>
										<a class="btn btn-primary mx-auto my-2" data-bs-toggle="collapse" href="#createAcc" role="button"
										><i class="fa-solid fa-arrow-right-to-bracket"></i> Sign Up</a>
									</div>
								</form>
							</div>
						</div><!--End of row login section-->
					</div>

					<div class="collapse" id="createAcc" data-bs-parent="#accordionLanding">
						<div class="container p-3 text-center">
							<h5 class="fw-bold">Create Account</h5>
							<form action="landing_C/createAcc" method="POST" enctype="multipart/form-data">
							<div class="row px-4">
								<div class="col-md">
									<div class="d-flex flex-column align-items-center text-center p-3">
										<img src="http://localhost/Tripversal/assets/icon/profile.png" alt="Admin" class="rounded-circle img-fluid" width="200px" id="frame">
									</div>
									<div class="input-group mb-3">
										<input type="file" class="form-control" id="uploadImage" onchange="preview()" name="uploadImage" accept='image/*'>
										<label class="input-group-text" for="inputGroupFile02">Upload</label>
									</div>
									<a onclick="clearImage()" type="button" class="btn btn-danger float-end">Reset</a>
								</div>
								<div class="col-md">
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="fullname" class="form-control">
										<label for="floatingInput">Fullname</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="username" class="form-control">
										<label for="floatingInput">Username</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="address" class="form-control">
										<label for="floatingInput">Address</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="nik" class="form-control">
										<label for="floatingInput">ID Card Number / Passport</label>
									</div>
								</div>
								<div class="col-md">
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="email" class="form-control">
										<label for="floatingInput">Email</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="password" name="password" class="form-control">
										<label for="floatingInput">Password</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<input type="text" name="phone" class="form-control">
										<label for="floatingInput">Phone</label>
									</div>
									<div class="form-floating w-75 mx-auto my-2">
										<button class="btn btn-success w-100 mx-auto my-2" type="submit">Submit</button>
									</div>				
								</div>
							</div>
							<a class="text-secondary text-center mt-2">Already have an account? 
							<span class="btn btn-primary mx-auto my-2" data-bs-toggle="collapse" href="#loginAcc" role="button"
							>Sign In</span></a>
							</form>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End About Us Section -->

		<!-- Our Services Section -->
		<section id="services" class="services">
			<div class="container">
				<div class="section-title">
					<span>All Free!</span>
					<h2>Our Features</h2>
					<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-car"></i></div>
							<h4 class="title"><a href="">Rent A Car</a></h4>
							<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-people-group"></i></div>
							<h4 class="title"><a href="">Rent Tour Guide</a></h4>
							<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="fa-solid fa-map-location"></i></div>
							<h4 class="title"><a href="">Travel Destination</a></h4>
							<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
						<div class="icon-box">
							<div class="icon"><i class="bx bx-world"></i></div>
							<h4 class="title"><a href="">Stay Connected With Us</a></h4>
							<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End of our Services Section -->

		<!-- FAQ -->
		<section id="faq" class="faq">
			<div class="container">
				<div class="section-title">
					<span>You must know</span>
					<h2>F.A.Q</h2>
					<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div id="accordionFAQ">
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingOne" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseA1" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> Why use Tripversal?</h6>
									</a>
								</div>
								<div id="collapseA1" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingTwo" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseA2" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> Are Tripversal ensure security of user data?</h6>
									</a>
								</div>
								<div id="collapseA2" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingThree" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseA3" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> Are all driver and tour guide in Tripversal competent?</h6>
									</a>
								</div>
								<div id="collapseA3" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div id="accordion2">
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingOne" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseB1" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> The difference between Tripversal and others similiar Apps?</h6>
									</a>
								</div>
								<div id="collapseB1" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion2">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingTwo" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseB2" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> Can Tripversal be used for free?</h6>
									</a>
								</div>
								<div id="collapseB2" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion2">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card bg-transparent border-0">
								<div class="card-header bg-transparent" id="headingThree" style='border:none;'>
									<a data-bs-toggle="collapse" href="#collapseB3" role="button" aria-expanded="false" aria-controls="collapseExample">
										<h6 class="text-title"><i class="fa-solid fa-angle-down float-right"></i> When we use Tripversal?</h6>
									</a>
								</div>
								<div id="collapseB3" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion2">
									<div class="card-body text-title">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End FAQ Section -->

		<!-- Feedback -->
		<section id="faq" class="faq">
			<div class="container">
				<div class="section-title">
					<span>What they think about Us?</span>
					<h2>Feeback</h2>
					<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
				</div>
				<div class="row">
					<div class="card border-0 bg-transparent m-5 p-3 w-25">
						<img class="rounded-circle img-fluid rounded shadow w-50 mx-auto d-block" src="http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg" alt='user.jpg'>
						<h4 class="text-center fw-bold">@flazefy</h4>
						<a class="text-center">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid"</a>
						<a class="text-center fst-italic fw-bold mt-2">joined since Dec 2021</a>
					</div>
					<div class="card border-0 bg-transparent m-5 p-3 w-25">
						<img class="rounded-circle img-fluid rounded shadow w-50 mx-auto d-block" src="http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg" alt='user.jpg'>
						<h4 class="text-center fw-bold">@richardkyle</h4>
						<a class="text-center">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid"</a>
						<a class="text-center fst-italic fw-bold mt-2">joined since Jan 2022</a>
					</div>
					<div class="card border-0 bg-transparent m-5 p-3 w-25">
						<img class="rounded-circle img-fluid rounded shadow w-50 mx-auto d-block" src="http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg" alt='user.jpg'>
						<h4 class="text-center fw-bold">@teresevy</h4>
						<a class="text-center">"Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid"</a>
						<a class="text-center fst-italic fw-bold mt-2">joined since Apr 2022</a>
					</div>
				</div>
			</div>
		</section><!-- End Feedback Section -->

		<!-- Others Platform -->
		<section id="faq" class="faq">
			<div class="container">
				<div class="section-title">
					<span>Get Tripversal In</span>
					<h2>Mobile Apps</h2>
					<p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
				</div>
				<div class="row">
				
				</div>
			</div>
		</section><!-- End Other platform Section -->

		<section class="deneb_cta mt-5">
        <div class="container">
            <div class="cta_wrapper">
                <div class="cta_content">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="http://localhost/Tripversal/assets/icon/JoinUs.png" alt='logo'
                                style='width:100%; margin-top:-100px;'>
                        </div>
                        <div class="col-md-8">
                            <h3>Want to be a part of our driver or guide?</h3>
                            <p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh feugiat, auctor enim quis.</p>
                            <a href="#" class="btn btn-primary">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

		<footer class="deneb_footer">
            <div class="widget_wrapper" style="">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="widget widegt_about">
                                <div class="widget_title">
                                    <h2>Tripversal</h2>
                                </div>
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget widget_link">
                                <div class="widget_title">
                                    <h4>Links</h4>
                                </div>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget widget_contact">
                                <div class="widget_title">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="contact_info">
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p>0811 4882 001</p>
                                        </div>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-envelope text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p>flazen.edu@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="single_info">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt text-white"></i>
                                        </div>
                                        <div class="info">
                                            <p>Bandung</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center text-white">Copyright &copy; 2022 All rights reserved.</p>
            </div>
        </footer>

		<?php 
			if(isset($errorLogin)) { 
				echo"<div class='modal fade' id='errorLogin' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title'>Error</h5>
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
