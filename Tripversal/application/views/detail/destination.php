<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="slider-hero">
					<div class="featured-carousel owl-carousel">
						<?php
							foreach($travelData as $travel){
								if($this->session->userdata('set_city_onbook') ==  $travel['place_city']){
									echo"
									<div class='item'>
										<div class='work'>
											<div class='img d-flex align-items-center justify-content-center' style='background-image: url(http://localhost/Tripversal/assets/travelDestination/".str_ireplace(' ', '%20', $travel['place_name']).".jpg);'>
												<div class='container' style='margin-top:280px;'>
													<h2>".$travel['place_name']."</h2>
													<div style='overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 10; line-clamp: 2; -webkit-box-orient: vertical;'
													><p>".$travel['place_desc']."</p></div>
													<p>".$travel['place_day']." - ".$travel['place_time']."</p>
													<button class='btn btn-success' style='font-size:13px; width:130px;' data-toggle='modal' data-target=''><i class='fa-solid fa-location-dot'></i> See Location</button>
												</div>
											</div>
										</div>
									</div>";
								}
							}
						?>
					</div>

					<div class="text-center">
					<ul class="thumbnail">
						<?php
							$initial = "active img";
							foreach($travelData as $travel){
								if($this->session->userdata('set_city_onbook') ==  $travel['place_city']){
									echo "<li class='".$initial."'><a href='#'><img src='http://localhost/Tripversal/assets/travelDestination/".str_ireplace(' ', '%20', $travel['place_name'])."-small.jpg' alt='Image' class='img-fluid'></a></li>";
									$initial = " ";
								}
							}
						?>
					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
