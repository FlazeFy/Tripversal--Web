<div class="d-flex align-items-center py-1">
	<?php
		foreach($contactData as $contact){
			if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
				if($contact['type'] == "Guide"){
					echo"
					<div class='position-relative'>
						<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle mr-1' alt='Sharon Lessman' width='40' height='40'>
					</div>
					<div class='flex-grow-1 pl-3' style='margin-left:10px !important;'>
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
					<div class='flex-grow-1 pl-3' style='margin-left:10px !important;'>
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
