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
		<div class="l-navbar" id="nav-bar">
			<?php
				$this->load->view('sidebar');
			?>
		</div>
		<!--Container Main start-->
		<div class="container w-75">
			<h3 class="mb-2">Profile</h3>
			<div class='row gutters-sm'>
				<div class='col-md-4 mb-3'>
					<!--Edit profile image-->
					<?php
						$this->load->view('profile/form/editImage');
					?>
				</div>
				<div class='col-md-8'>
					<!--Edit profile data-->
					<?php
						$this->load->view('profile/form/editData');
					?>
				</div>
			</div>
		</div>

		<!--Modal-->
		<?php
			$this->load->view('popup/success');
			$this->load->view('popup/failed');
		?>
	
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
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>
