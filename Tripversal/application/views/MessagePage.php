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
			.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

			
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

			.chat-online {
				color: #34ce57
			}

			.chat-offline {
				color: #e4606d
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
			<h5 style='color:#4169E1; font-weight:bold;'>Message</h5>
			<div class="header_img"> <i class="fa-solid fa-circle-info" style='margin-right:10px;'></i> <i class="fa-solid fa-gear"></i> </div>
		</header>
		</form>
		<div class="l-navbar" id="nav-bar">
			<nav class="nav">
				<div> <a href="#" class="nav_logo"> <img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
					style='width:50px; height:40px; margin-left:-11px;'>  <span class="nav_logo-name">flazefy</span> </a>
					<div class="nav_list"> 
						<a href="rentACar_C" class="nav_link"> <i class="fa-solid fa-car"></i> <span class="nav_name">Rent A Car</span> </a> 
						<a href="rentGuide_C" class="nav_link"> <i class="fa-solid fa-people-group"></i> <span class="nav_name">Tour Guide</span> </a> 
						<a href="#" class="nav_link"> <i class="fa-solid fa-folder-open"></i> <span class="nav_name">My Reservation</span> </a>
						<a href="#" class="nav_link"> <i class="fa-solid fa-map-location"></i> <span class="nav_name">Travel Destination</span> </a>  
						<a href="message_C" class="nav_link active"> <i class="fa-solid fa-message"></i> <span class="nav_name">Messages</span> </a> 
					</div> 
				</div>
				<a href="#" class="nav_link" style='background:#D62C49; margin-left:10px; border-radius:5px; color:whitesmoke;'> <i class='bx bx-log-out nav_icon' style='margin-left:-15px;'></i> <span class="nav_name">Sign Out</span> </a>
			</nav>
		</div>

    <!--Container Main start-->
	<div class="row g-0">
		<div class="col-3">
			<h5 class="mt-4">Contact</h5>
			<div class="col w-100" id="contact">
				<?php
					foreach($contactData as $contact){
						if($contact['username'] == "flazefy"){
							if($contact['type'] == "Guide"){
								echo"
								<form action='message_C/selectContact' method='POST'>
								<input name='id_contact' value='".$contact['id_contact']."' hidden></input>
								<button type='submit' class='list-group-item list-group-item-action border-0'>
									<div class='d-flex align-items-start'>
										<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle' alt='".$contact['guide_fullname']."' id='contactImage'>
										<div class='flex-grow-1 ml-3 w-100'>".$contact['guide_fullname']."
											<div class='text-secondary'>"; 
												$i = 0;
												foreach($newMessageData as $message){
													if(($message['id_contact'] == $contact['id_contact'])&&($i < 1)){
														echo $message['body'];
														$i++;
													}
												}
											echo"</div>
										</div>
									</div>
								</button></form>";
							} else {
								echo"
								<form action='message_C/selectContact' method='POST'>
								<input name='id_contact' value='".$contact['id_contact']."' hidden></input>
								<button type='submit' class='list-group-item list-group-item-action border-0'>
									<div class='d-flex align-items-start'>
										<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$contact['garage_username'].".jpg' class='rounded-circle' alt='".$contact['garage_username']."' id='contactImage'>
										<div class='flex-grow-1 ml-3 w-100'>".$contact['garage_name']."
											<div class='text-secondary'>"; 
											$i = 0;
											foreach($newMessageData as $message){
												if(($message['id_contact'] == $contact['id_contact'])&&($i < 1)){
													echo $message['body'];
													$i++;
												}
											}
											echo"</div>
										</div>
									</div>
								</button></form>";
							}
						}
					}
				?>
			<hr class="d-block d-lg-none mt-1 mb-0">
			</div>
		</div>
		<div class="col-9">
			<div class="py-2 px-4 border-bottom d-none d-lg-block">
				<div class="d-flex align-items-center py-1">
					<?php
						foreach($contactData as $contact){
							if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
								if($contact['type'] == "Guide"){
									echo"
									<div class='position-relative'>
										<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle mr-1' alt='Sharon Lessman' width='40' height='40'>
									</div>
									<div class='flex-grow-1 pl-3'>
										<strong>".$contact['guide_fullname']."</strong><br>";
										if($contact['guide_active'] == "online")
											echo"<a class='text-muted small' style='color:green !important;'>".$contact['guide_active']."</a>";
										else {
											echo"<a class='text-muted small'>".$contact['guide_active']."</a>";
										}
									echo"</div>
									<div>
										<button class='btn btn-primary btn-lg mr-1 px-3'><i class='fa-solid fa-phone'></i></button>
										<button class='btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block'><i class='fa-solid fa-video text-white'></i></button>
										<button class='btn btn-light border btn-lg px-3 border-0'><i class='fa-solid fa-ellipsis-vertical'></i></button>
									</div>";
								} else {
									echo"
									<div class='position-relative'>
										<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$contact['garage_username'].".jpg' class='rounded-circle mr-1' alt='Sharon Lessman' width='40' height='40'>
									</div>
									<div class='flex-grow-1 pl-3'>
										<strong>".$contact['garage_name']."</strong><br>";
										if($contact['garage_active'] == "online")
											echo"<a class='text-muted small' style='color:green !important;'>".$contact['garage_active']."</a>";
										else {
											echo"<a class='text-muted small'>".$contact['garage_active']."</a>";
										}
									echo"</div>
									<div>
										<button class='btn btn-primary btn-lg mr-1 px-3'><i class='fa-solid fa-phone'></i></button>
										<button class='btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block'><i class='fa-solid fa-video text-white'></i></button>
										<button class='btn btn-light border btn-lg px-3 border-0'><i class='fa-solid fa-ellipsis-vertical'></i></button>
									</div>";
								}
							}
						}
					?>
				</div>
			</div>
			<div class='position-relative'>
				<div class='chat-messages p-4' id='chat-box'>
				<?php
					foreach($messageData as $message){
						if($message['id_contact'] == $this->session->userdata('set_id_contact')){
							if($message['sender'] == 'customer'){
								foreach($contactData as $contact){
									if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
										echo"
										<div class='chat-message-right pb-4'>
											<div style='margin:10px !important;'>
												<img src='http://localhost/Tripversal/assets/uploads/user/user_".$contact['username'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>
											</div>
											<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
												".$message['body']."
												<div class='text-secondary mt-2' style='font-size:11px;'>".$message['datetime']."</div>
											</div>
										</div>";
									}
								}
							} else {
								foreach($contactData as $contact){
									if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
										echo"
										<div class='chat-message-left pb-4'>
											<div style='margin:10px !important;'>";
												if($contact['type'] == "Guide"){
													echo "<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>";
												} else {
													echo "<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$contact['garage_username'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>";
												}
											echo"</div>
											<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
												".$message['body']."
												<div class='text-secondary mt-2' style='font-size:11px;'>".$message['datetime']."</div>
											</div>
										</div>";
									}
								}
							}
						}
					}
				?>
				</div>
			</div>

			<div class="flex-grow-0 py-3 px-4 border-top">
				<?php
					foreach($contactData as $contact){
						if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
							echo"
							<form action='message_C/sendMessage' method='post'>
								<div class='input-group'>
									<a class='btn btn-primary'><i class='fa-solid fa-paperclip'></i></a>
									<input type='text' class='form-control' placeholder='Type your message' name='body' required>
									<button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
								</div>
							</form>";
						}
					}
				?>
			</div>

		</div>
	</div>

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
		var myDiv = document.getElementById("chat-box");
    	myDiv.scrollTop = myDiv.scrollHeight;
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
		});
	</script>
           
	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>
</html>
