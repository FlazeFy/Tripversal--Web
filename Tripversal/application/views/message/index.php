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
			.col-md-5.border-right a{
				overflow: hidden;
				text-overflow: ellipsis;
				display: -webkit-box;
				-webkit-line-clamp: 2; /* number of lines to show */
						line-clamp: 2; 
				-webkit-box-orient: vertical;
			}

			.chat-messages {
				display: flex;
				flex-direction: column;
				max-height: 500px;
				height:500px;
				overflow-y: scroll;
			}
			#contact {
				display: flex;
				flex-direction: column;
				max-height: 600px;
				height:600px;
				overflow-y: scroll;
			}

			.chat-message-left,
			.chat-message-right {
				display: flex;
				flex-shrink: 0
			}

			.chat-message-left {
				margin-right: auto
			}

			.chat-message-right {
				flex-direction: row-reverse;
				margin-left: auto
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

			.chat-message-right #content, .chat-message-left #content {
				position : relative;
				padding : 4px;
				color : whitesmoke;
				text-align : center;
				visibility : hidden;
				opacity : 0;
				transition : 0.3s ease-in-out;	
			}
			.chat-message-right:hover #content, .chat-message-left:hover #content {
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
					$this->load->view('rentacar/search');
				?>
				<button class='btn btn-success' style='color:whitesmoke; position:relative; margin-left:-60px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i></button>		
				<h5 style='color:#4169E1; font-weight:bold;'>Message</h5>
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
		<div class="row g-0">
			<div class="col-lg-3 col-md-5 col-sm-12">
				<h5 class="mt-4">Contact</h5>
				<?php
					//Contact list.
					$this->load->view('message/contact');
				?>
			</div>
			<div class="col-lg-9 col-md-7 col-sm-12">
				<div class="py-2 px-4 border-bottom d-none d-lg-block">
					<?php
						//Contanct mini profile.
						$this->load->view('message/miniprofile');
					?>
				</div>
				<div class='position-relative'>
					<?php
						//Chat box.
						$this->load->view('message/chatbox');
					?>
				</div>

				<div class="flex-grow-0 py-3 px-4 border-top">
					<?php
						//Send chat.
						$this->load->view('message/send');
					?>
				</div>

			</div>
		</div>

		<!--Others CDN-->
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

		<!--Navbar-->
		<script src="http://localhost/Tripversal/assets/js/navbar.js"></script>
	</body>
</html>
