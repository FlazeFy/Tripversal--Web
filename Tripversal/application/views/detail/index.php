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
							echo $guide['guide_fullname'];
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
		
       	<!--Sidebar.-->
		<link href='http://localhost/Tripversal/assets/css/sidebar.css' rel='stylesheet'>

		<!--Carousel destination.-->
		<link href='http://localhost/Tripversal/assets/css/carousel-destination.css' rel='stylesheet'>

		<!--Autocomplete.-->
		<link href='http://localhost/Tripversal/assets/css/autocomplete.css' rel='stylesheet'>
        
		<style>
			.stats{
				background: #f2f5f8 !important;
				color: #000 !important;
			}
			.articles{
				font-size:10px;
				color: #808080;
			}		
			.carousel {
				margin: 10px auto;
				padding: 0 30px;
			}
			.carousel-item{
				overflow: hidden;
				background:white;
			}
			.carousel .item h4 {
				font-size: 18px;
			}
			.carousel .item h4, .carousel .item p, .carousel .item ul {
				margin-bottom: 5px;
			}
			.carousel-control-prev, .carousel-control-next {
				height: 30px;
				width: 30px;
				background: #4183D7;	
				margin: auto 0;
				border-radius: 4px;
				opacity: 0.8;
				margin-bottom:-25px;
				margin-right:50px;
				margin-left:50px;
			}
			.carousel-control-prev:hover, .carousel-control-next:hover {
				background: #4183D7;
				opacity: 1;
			}
			.carousel-control-prev i, .carousel-control-next i {
				font-size: 26px;
				position: absolute;
				top: 70%;
				display: inline-block;
				margin: -19px 0 0 0;
				z-index: 5;
				left: 0;
				right: 0;
				color: #fff;
				text-shadow: none;
				font-weight: bold;
			}
			.carousel-control-prev i {
				margin-left: -2px;
			}
			.carousel-control-next i {
				margin-right: -4px;
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
			.carousel-indicators-numbers li {
				text-indent: 0;
				text-align:center;
				margin: 0 5px;
				width: 25px;
				height: 25px;
				border: none;
				border-radius: 5px;
				color: white;
				background: grey;
				transition: all 0.25s ease;
			}
			.carousel-indicators-numbers li.visited, .carousel-indicators-numbers li:hover, .carousel-indicators-numbers li.active {
				margin: 0 5px;
				margin-bottom:5px;
				width: 25px;
				height: 25px;
				border-radius: 5px;
				background-color: #4169E1;
			}
		/*Other car hover*/
		.row .card:hover {
			height : 200px;  
			color:white;
		}
		.row .card {
			position: relative;
			height : 160px;  
			border-radius: 6px; 
			text-align: left;
			display : flex;
			flex-direction : column;
			box-shadow : 0 5px 20px rgba(0,0,0,0.5);
			transition : 0.3s ease-in-out;
			padding:10px;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			width:145px;  
			margin:5px;
		}
		.row .card button{
			font-size:14px;
		}
		.row .card #content2 {
			position : relative;
			padding : 4px;
			color : whitesmoke;
			text-align : center;
			visibility : hidden;
			opacity : 0;
			transition : 0.3s ease-in-out;	
		}
		.row .card:hover #content2 {
			margin-top : 2px;
			visibility : visible;
			opacity : 1;
			transition-delay: 0.2s;
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

    <body className='snippet-body' id="body-pd">
		<form autocomplete="off" action="" method="POST">
		<header class="header" id="header">
			<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
				<?php
					//Search Car.
					if($this->session->userdata('set_typeBook') == 'Car Rental'){
						$this->load->view('rentacar/search');
					} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
						$this->load->view('rentaguide/search');
					}
				?>
			<button class='btn btn-success' style='color:whitesmoke; position:relative; margin-left:-50px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>		
			<h5 style='color:#4169E1; font-weight:bold;'>Book <?php echo $this->session->userdata('set_typeBook'); ?></h5>
			<div class="header_img"> <i class="fa-solid fa-circle-info" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
		</header>
		</form>

		<div class="l-navbar" id="nav-bar">
			<?php
				//Side bar.
				$this->load->view('sidebar');
			?>
		</div>

		<!--Container Main start-->
		<div class="height-100">
			<br>
			<div class='row'>
				<div class='col-lg-9 col-md-12 col-sm-12'>
					<div class='row'>
						<div class='col-md-5'>
							<?php
								//Detail image.
								$this->load->view('detail/image');
							?>
						</div>
						<div class='col-md-7'>
							<?php
								//Detail profile.
								$this->load->view('detail/profile');
							?>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-5'>
							<?php
								//Detail review.
								$this->load->view('detail/review');
							?>
						</div>

						<div class=col-md-7>
							<?php
								//Detail description.
								$this->load->view('detail/description');
							?>
						</div>
					</div>
					<h5><i class="fa-solid fa-umbrella-beach"></i> Best Destination</h5>
					<hr>
					<?php
						//Top destination.
						$this->load->view('detail/destination');
					?>
				</div>
								
				<div class='col-lg-3 col-md-12 col-sm-12'>
					<?php
						if($this->session->userdata('set_typeBook') == 'Car Rental'){
							//Garage detail.
							$this->load->view('detail/garage');
						} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
							//Other guide.
							$this->load->view('detail/otherguide');
						}
					?>
				</div>
						
			</div>
			<?php
				//Other car.
				$this->load->view('detail/othercar');
			?>
		</div>

		<!-- Zoom location modal -->
		<?php 
			$this->load->view('detail/zoom');
		?>

		<!--Success Modal-->
		<?php
			$this->load->view('popup/success');
		?>

		<script>
			//Refresh page.
			function refreshMessage() {
				window.location.href="http://localhost/Tripversal/bookGuideCar_C";  
			}
		</script>

		<!--Others CDN-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADRj0HHweuH7Y8Ont5LLO3l6qLODqo9pg&callback=myMap"></script>
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="http://localhost/Tripversal/assets/js/owl.carousel.min.js"></script>
		<script src="http://localhost/Tripversal/assets/js/main.js"></script>

		<!--Navbar-->
		<script src="http://localhost/Tripversal/assets/js/navbar.js"></script>
	</body>
</html>
