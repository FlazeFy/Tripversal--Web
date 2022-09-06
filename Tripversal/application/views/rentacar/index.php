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
		
        <!--Sidebar.-->
		<link href='http://localhost/Tripversal/assets/css/sidebar.css' rel='stylesheet'>

		<!--Autocomplete.-->
		<link href='http://localhost/Tripversal/assets/css/autocomplete.css' rel='stylesheet'>
        
		<style>
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
		
			.col-md-5.border-right a{
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2; /* number of lines to show */
						line-clamp: 2; 
				-webkit-box-orient: vertical;
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
		<!-- <body id="body-pd"> -->
		<form autocomplete="off" action="" method="POST">
			<header class="header" id="header">
				<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
					<?php
						//Search Car.
						$this->load->view('rentacar/search');
					?>
				<button class='btn btn-success' style='color:whitesmoke; position:relative; margin-left:-60px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>		
				<h5 style='color:#4169E1; font-weight:bold;'>Rent A Car</h5>
				<div class="header_img"> <i class="fa-solid fa-circle-info" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
			</header>
		</form>
		<div class="l-navbar" id="nav-bar">
			<?php
				//Side bar.
				$this->load->view('sidebar');
			?>
		</div>
		
		<!--Content-->
		<div class='row' style='margin-top:80px;'>
			<div class='col-lg-4 col-md-6 col-sm-12'>
				<?php
					//Control section.
					$this->load->view('rentacar/control');
				?>
			</div>
			<div class='col-lg-5 col-md-6 col-sm-12'>
				<?php
					//Top used car.
					$this->load->view('rentacar/topused');
				?>
			</div>
			<div class='col-lg-3 col-md-12 col-sm-12'>
				<?php
					//Weather forecast.
					$this->load->view('others/weather');
				?>
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
					<?php
						//City Car.
						$this->load->view('rentacar/category/citycar');
					?>

					<?php
						//Minibus.
						$this->load->view('rentacar/category/minibus');
					?>

					<?php
						//City Car.
						$this->load->view('rentacar/category/motorcycle');
					?>

					<?php
						//Others vehicle.
						$this->load->view('rentacar/category/others');
					?>
				</div>
			</div>

			<div class=col-md-3>
				<h5><i class="fa-solid fa-bell"></i> Notifications</h5>
				<?php
					//Notifications.
					$this->load->view('others/notification');
				?>
				<hr>

				<h5><i class="fa-solid fa-lightbulb"></i> Tips</h5>
				<?php
					//Tips.
					$this->load->view('others/tips');
				?>
			</div>
		</div>

		<!--Others CDN-->
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>   
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
		<!--Navbar-->
		<script src="http://localhost/Tripversal/assets/js/navbar.js"></script>
	</body>
</html>
