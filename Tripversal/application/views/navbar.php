<style>

</style>

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

<script>
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
	var myLink = document.querySelector('a[href="#"]');
	myLink.addEventListener('click', function(e) {
		e.preventDefault();
	});
</script>
