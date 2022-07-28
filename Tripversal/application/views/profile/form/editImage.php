<?php
	foreach($loginData as $u){
		if($u['username'] == $this->session->userdata("userTrack")){
			echo"
			<div class='container-fluid p-3 rounded border-gray border' >
				<a class='fw-bold text-dark text-left'>Profile Image</a>
				<div class='d-flex flex-column align-items-center text-center'>
					<form action='profile_C/updateImage' method='POST' id='formImage' enctype='multipart/form-data'>
					<img id='frame' class='img logo rounded-circle shadow' src='http://localhost/Tripversal/assets/uploads/user/".$u['imageURL'].".jpg' alt='".$u['imageURL']."'
						style='display: block; margin-left: auto; margin-right: auto; width:200px;'>
						<div class='image-upload' id='formFileEditAcc' onchange='previewEditAcc()'>
							<label for='file-input'>
								<img class='rounded-circle shadow d-block position-relative p-1' style='width:50px; height:50px; top:-50px; left:50px; background:#198754;' title='Change Image'
									src='http://localhost/Tripversal/assets/icon/ChangeImage.png'/>
							</label>
							<input id='file-input' type='file' name='uploadImage'/>
						</div>
						<input value='".$u['id_user']."' name='id_user' hidden/>
					</form>
					<div class='mb-1'>
						<h4>".$u['username']."</h4>
						<p class='text-muted font-size-sm'>".$u['fullname']."</p>
						<p class='text-secondary mb-1'><i class='fa-solid fa-location-dot'></i> ".$u['address']."</p>
					</div>
				</div>
			</div>
			<div class='container-fluid mt-3 p-3 rounded border-gray border'>
				<a class='fw-bold text-dark text-left'>History</a>
				<div class='row mt-3' style='justify-content:center;'>
					<div class='col-md-5'>
						<a style='font-size:15px; font-weight:bold; text-align:center;'>25</a>
						<a style='font-size:12px; white-space:nowrap;'>Car Rent</a>
					</div>
					<div class='col-md-5'>
						<a style='font-size:15px; font-weight:bold; text-align:center;'>300</a>
						<a style='font-size:12px; white-space:nowrap;'>Tour Guide</a>
					</div>
				</div>
			</div>
			";
		}
	}
?>
