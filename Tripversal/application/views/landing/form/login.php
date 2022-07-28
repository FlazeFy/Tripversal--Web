<style>
	.purecounter{
		font-weight:bold;
		font-size:34px;
	}
</style>

<div class="row">
	<div class="col-lg-8 d-flex flex-column align-items-stretch">
		<div class="content ps-lg-4 d-flex flex-column justify-content-center">
			<div class="row mt-n4">
				<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
				<div class="count-box">
					<i class="fa-solid fa-car" style="color: #20b38e;"></i>
					<span data-purecounter-start="0" data-purecounter-end="
						<?php 
							$i = 0;
							foreach($carData as $car){
								$i++;
							}
							echo $i;
						?>
					" data-purecounter-duration="1" class="purecounter"></span>
					<p><strong>Car</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
				</div>
				</div>

				<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
				<div class="count-box">
					<i class="fa-solid fa-people-group" style="color: #8a1ac2;"></i>
					<span data-purecounter-start="0" data-purecounter-end="
						<?php 
							$i = 0;
							foreach($guideData as $guide){
								$i++;
							}
							echo $i;
						?>" data-purecounter-duration="1" class="purecounter"></span>
					<p><strong>Tour Guide</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
				</div>
				</div>

				<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
				<div class="count-box">
					<i class="fa-solid fa-user-tie" style="color: #2cbdee;"></i>
					<span data-purecounter-start="0" data-purecounter-end="<?php $i = 0; foreach($driverData as $dr){$i++;} echo $i; ?>" data-purecounter-duration="1" class="purecounter"></span>
					<p><strong>Experienced Driver</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
				</div>
				</div>

				<div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
				<div class="count-box">
					<i class="fa-solid fa-suitcase" style="color: #ffb459;"></i>
					<span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
					<p><strong>Trips</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
				</div>
				</div>
			</div>
		</div><!-- End .content-->
			
	</div>
	<div class="col-lg-4 d-flex flex-column align-items-stretch text-center">
		<form action="landing_C/login"  method="POST">
			<h5 class="fw-bold">Create Account</h5>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="username" name="username" class="form-control">
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<input type="password" name="password" class="form-control">
				<label for="floatingInput">Password</label>
			</div>
			<div class="form-floating w-75 mx-auto my-2">
				<button class="btn btn-success w-100 mx-auto my-2" type="submit">Log In</button>
				<a class="text-secondary text-center">Don't have an account?</a>
				<a class="btn btn-primary mx-auto my-2" data-bs-toggle="collapse" href="#createAcc" role="button"
				><i class="fa-solid fa-arrow-right-to-bracket"></i> Sign Up</a>
			</div>
		</form>
	</div>
</div>
