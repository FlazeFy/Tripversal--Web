<?php
	foreach($loginData as $u){
		if($u['username'] == $this->session->userdata("userTrack")){
			echo"
			<form action='profile_C/updateData' method='POST'>
				<div class='container-fluid mb-3 p-4 rounded border-gray border'>
					<a class='fw-bold text-dark text-left'>Edit Profile</a>
					<input value='".$u['id_user']."' name='id_user' hidden>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='username' class='form-control' value='".$u['username']."' placeholder='".$u['username']."' disabled>
						<label for='floatingInput'>Username</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='email' class='form-control' value='".$u['email']."' placeholder='".$u['email']."' disabled>
						<label for='floatingInput'>Email</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='fullname' class='form-control' value='".$u['fullname']."' placeholder='".$u['fullname']."' required>
						<label for='floatingInput'>Fullname</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='address' class='form-control' value='".$u['address']."' placeholder='".$u['address']."' required>
						<label for='floatingInput'>Address</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='nik' class='form-control' value='".$u['nik']."' placeholder='".$u['nik']."' required>
						<label for='floatingInput'>ID Card Number / Passport</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='password' name='password' class='form-control' value='".$u['password']."' placeholder='".$u['password']."' required>
						<label for='floatingInput'>Password</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<input type='text' name='phone' class='form-control' value='".$u['phone']."' placeholder='".$u['phone']."' required>
						<label for='floatingInput'>Phone</label>
					</div>
					<div class='form-floating w-100 mx-auto my-2'>
						<button class='btn btn-success w-25 mx-auto my-2' type='submit'><i class='fa-solid fa-pen-to-square'></i> Save Changes</button>
					</div>		
				</div>
			</form>
			";
		}
	}
?>
