<h5 style='font-weight:600;'>Review</h5>
<hr>
<div id='myCarouselRating' class='carousel slide' data-ride='carousel' data-interval='0' style='width:115%; margin-left:-35px;'>
	<!-- Carousel indicators -->
	<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -50px;'>
	<?php
		$page = 0; $item = 0; $show = 3;
		if($this->session->userdata('set_typeBook') == 'Car Rental'){
			foreach ($carRating as $car){
				if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
					if($item == 0 && $page == 0){
						echo"<li data-target='#myCarouselRating' data-slide-to='0' class='active'>1</li>";
						$item++;
						$page++;
					} else if ($item % $show == 0){
						echo"<li data-target='#myCarouselRating' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
						$item++;
						$page++;
					} else if ($item % $show != 0){
						$item++;
					}
				}
			}
		} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
			foreach ($guideRating as $guide){
				if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
					if($item == 0 && $page == 0){
						echo"<li data-target='#myCarouselRating' data-slide-to='0' class='active'>1</li>";
						$item++;
						$page++;
					} else if ($item % $show == 0){
						echo"<li data-target='#myCarouselRating' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
						$item++;
						$page++;
					} else if ($item % $show != 0){
						$item++;
					}
				}
			}
		} 
	?>
	</ol>
	<!-- Wrapper for carousel items -->
	<div class='carousel-inner'>
	<?php 
		$i = 1; $count = 0; $k = 0;
		$state = ' active'; $show = 3;
		if($this->session->userdata('set_typeBook') == 'Car Rental'){
			foreach($carRating as $car){
				if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
					if(($k % $show == 0) || ($k == 0)){
						echo"<div class='item carousel-item".$state."' style='padding:20px;' >
						<div class='col-md'>";
					}	
					echo"
					<div class='container-fluid' style='height:auto; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; padding:10px; margin-bottom:15px;'>
						<div class='row'>
							<div class='col-md-4'>
								<img src='http://localhost/Tripversal/assets/uploads/user/"; 
									foreach($userData as $user){
										if($user['id_user'] == $car['id_user']){
											echo $user['imageURL'];
										}
									}
									echo".jpg' alt='Driver' class='rounded-circle img-fluid' 
									style='width:60px; height:60px; type:button; cursor:pointer; margin-left:35px;'>
								<h5 style='font-size:13px; color:#212121; text-align:center; margin-top:5px;'>by : ";
									foreach($userData as $user){
										if($user['id_user'] == $car['id_user']){
											echo $user['username'];
										}
									}
								echo"</h5>
								<div class='row' style='max-width:200px; margin-top:-10px;'>";
									$star = 0;
									while($star < $car['rating']){
										echo"<div class='col-md-2'><img src='http://localhost/Tripversal/assets/icon/Rating.png' style='width:20px;'></div>";
										$star++;
									}
								echo"</div>
							</div>
							<div class='col-md-8'>
								<div style='font-size:13px; color:#212121;  overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;'
								>".$car['comment']."</div>
								<div class='row'>
									<div class='col-md-6'>
										<h5 style='font-size:11px; color:#808080; margin-top:10px; white-space: nowrap;'>~ "; 
											$s = strtotime($car['datetime']);

											if(date('Y-m-d', $s)== date("Y-m-d")){
												echo"today at ".date('H : i', $s);
											} else {
												echo date('y-m-d', $s)." at ".date('H : i', $s);
											}
										echo"</h5>
									</div>
									<div class='col-md-5'>
										<button class='btn btn-success' style='font-size:12px; margin-top:5px;'><i class='fa-solid fa-thumbs-up'></i> Helpful</button>
									</div>
								</div>
							</div>
						</div>
					</div>";
					$k++;
					$state = ' ';
					if($k % $show == 0){
						echo"</div>
					</div>";
					}										
					$count = 0; $i++;
				} 
			}
			echo"</div>"; //end of carousel-inner.
			//Carousel fixes. if there's another bug. check this.
			if($k % $show != 0){
				echo"</div></div>";
			}
		
			if($k > $show){ 
				echo"
				<!-- Carousel controls -->
				<a class='carousel-control-prev' href='#myCarouselRating' data-slide='prev'>
					<i class='fa fa-angle-left'></i>
				</a>
				<a class='carousel-control-next' href='#myCarouselRating' data-slide='next'>
					<i class='fa fa-angle-right'></i>
				</a>";
			} else if($k == 0){
				echo "<div class='container'>
					<p style='font-style:italic; text-align:center; color:grey;'>Sorry there's no review for this item</p>
					<img src='http://localhost/Tripversal/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
						margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
				</div>";
			}
		} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
			foreach($guideRating as $car){
				if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
					if(($k % $show == 0) || ($k == 0)){
						echo"<div class='item carousel-item".$state."' style='padding:20px;' >
						<div class='col-md'>";
					}	
					echo"
					<div class='container-fluid' style='height:auto; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; padding:10px; margin-bottom:15px;'>
						<div class='row'>
							<div class='col-md-4'>
								<img src='http://localhost/Tripversal/assets/uploads/user/user_"; 
									foreach($userData as $user){
										if($user['id_user'] == $guide['id_user']){
											echo $user['username'];
										}
									}
									echo".jpg' alt='Driver' class='rounded-circle img-fluid' 
									style='width:60px; height:60px; type:button; cursor:pointer; margin-left:35px;'>
								<h5 style='font-size:13px; color:#212121; text-align:center; margin-top:5px;'>by : ";
									foreach($userData as $user){
										if($user['id_user'] == $guide['id_user']){
											echo $user['username'];
										}
									}
								echo"</h5>
								<div class='row' style='max-width:200px; margin-top:-10px;'>";
									$star = 0;
									while($star < $guide['rating']){
										echo"<div class='col-md-2'><img src='http://localhost/Tripversal/assets/icon/Rating.png' style='width:20px;'></div>";
										$star++;
									}
								echo"</div>
							</div>
							<div class='col-md-8'>
								<div style='font-size:13px; color:#212121;  overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;'
								>".$guide['comment']."</div>
								<div class='row'>
									<div class='col-md-6'>
										<h5 style='font-size:11px; color:#808080; margin-top:10px; white-space: nowrap;'>~ "; 
											$s = strtotime($guide['datetime']);

											if(date('Y-m-d', $s)== date("Y-m-d")){
												echo"today at ".date('H : i', $s);
											} else {
												echo date('y-m-d', $s)." at ".date('H : i', $s);
											}
										echo"</h5>
									</div>
									<div class='col-md-5'>
										<button class='btn btn-success' style='font-size:12px; margin-top:5px;'><i class='fa-solid fa-thumbs-up'></i> Helpful</button>
									</div>
								</div>
							</div>
						</div>
					</div>";
					$k++;
					$state = ' ';
					if($k % $show == 0){
						echo"</div>
					</div>";
					}										
					$count = 0; $i++;
				} 
			}
			echo"</div>"; //end of carousel-inner.
			//Carousel fixes. if there's another bug. check this.
			if($k % $show != 0){
				echo"</div></div>";
			}
		
			if($k > $show){ 
				echo"
				<!-- Carousel controls -->
				<a class='carousel-control-prev' href='#myCarouselRating' data-slide='prev'>
					<i class='fa fa-angle-left'></i>
				</a>
				<a class='carousel-control-next' href='#myCarouselRating' data-slide='next'>
					<i class='fa fa-angle-right'></i>
				</a>";
			} else if($k == 0){
				echo "<div class='container'>
					<p style='font-style:italic; text-align:center; color:grey;'>Sorry there's no review for this item</p>
					<img src='http://localhost/Tripversal/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
						margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
				</div>";
			}
		}
	
	?>
</div>
<br>
