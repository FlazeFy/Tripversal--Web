<div class="container p-3 text-center">
	<h5 class="fw-bold">Create Account</h5>
	<form action="landing_C/createAcc" method="POST" enctype="multipart/form-data">
	<div class="row px-4">
		<div class="col-md">
			<div class="d-flex flex-column align-items-center text-center p-3">
				<img src="http://localhost/Tripversal/assets/icon/profile.png" alt="Admin" class="rounded-circle img-fluid" width="200px" id="frame">
			</div>
			<div class="input-group mb-3">
				<input type="file" class="form-control" id="uploadImage" onchange="preview()" name="uploadImage" accept='image/*'>
				<label class="input-group-text" for="inputGroupFile02">Upload</label>
			</div>
			<a onclick="clearImage()" type="button" class="btn btn-danger float-end">Reset</a>
		</div>
		<div class="col-md">
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="fullname" class="form-control">
				<label for="floatingInput">Fullname</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="username" class="form-control">
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="address" class="form-control">
				<label for="floatingInput">Address</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="nik" class="form-control">
				<label for="floatingInput">ID Card Number / Passport</label>
			</div>
		</div>
		<div class="col-md">
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="email" class="form-control">
				<label for="floatingInput">Email</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="password" name="password" class="form-control">
				<label for="floatingInput">Password</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="text" name="phone" class="form-control">
				<label for="floatingInput">Phone</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<button class="btn btn-success w-100 mx-auto my-2" type="submit">Submit</button>
			</div>				
		</div>
	</div>
	<a class="text-secondary text-center mt-2">Already have an account? 
	<span class="btn btn-primary mx-auto my-2" data-bs-toggle="collapse" href="#loginAcc" role="button"
	>Sign In</span></a>
	</form>
</div>
