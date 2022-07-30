<nav class="nav">
	<div> <a href="profile_C" class="nav_logo"> <img src='http://localhost/Tripversal/assets/uploads/user/
		<?php 
			foreach($loginData as $u){
				if($u['username'] == $this->session->userdata("userTrack")){
					echo $u['imageURL'];
				}
			}
		?>.jpg' alt='Card image cap' class='rounded-circle img-fluid' 
		style='width:50px; height:40px; margin-left:-11px;'>  <span class="nav_logo-name">
			<?php 
				echo $this->session->userdata("userTrack");
			?>
			</span> </a>
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
