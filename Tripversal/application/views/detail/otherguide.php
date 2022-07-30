<?php
	foreach($guideData as $guide){
		if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
			echo"
			<h6 style='font-weight:600;'>Other Guide in ".$this->session->userdata('set_city_onbook')."</h6><hr>
			<div class='container-fluid' style='margin-left:-10px; margin-bottom:5px;'>
				<div id='myCarouselGuideCity' class='carousel slide' data-ride='carousel' data-interval='0' style='width:115%; margin-left:-35px;'>
					<!-- Carousel indicators -->
					<ol class='carousel-indicators carousel-indicators-numbers' style='bottom: -55px;'>";
					
						$page = 0; $item = 0; $show = 6;
						foreach ($guideData as $guide2){
							if(($guide2['city'] == $guide['city'])&&($guide2['id_guide'] != $this->session->userdata('set_idCarGuide'))){
								if($item == 0 && $page == 0){
									echo"<li data-target='#myCarouselGuideCity' data-slide-to='0' class='active'>1</li>";
									$item++;
									$page++;
								} else if ($item % $show == 0){
									echo"<li data-target='#myCarouselGuideCity' data-slide-to='".$page."'>"; echo $page+1; echo"</li>";
									$item++;
									$page++;
								} else if ($item % $show != 0){
									$item++;
								}
							}
						}
					
					
					echo"</ol>
					<!-- Wrapper for carousel items -->
					<div class='carousel-inner' style='width:115%;'>";
				
						$i = 1; $count = 0; $k = 0;
						$state = ' active'; $show = 6;
						foreach($guideData as $guide2){
							if(($guide2['status'] == 'available')&&($guide2['id_guide'] != $this->session->userdata('set_idCarGuide'))){
								if(($k % $show == 0) || ($k == 0)){
									echo"<div class='item carousel-item".$state."'>
									<div class='row' style='margin-left:5px;'>";
								}	
								echo"
								<div class='card'>
									<img src='http://localhost/Tripversal/assets/image/guide/".$guide['guide_fullname']."_".$guide['phone'].".jpg' class='rounded-circle img-fluid'
										style='width: 80px; margin-left:auto; margin-right:auto; display:block;'>
									<h7 style='color:black; font-size:13px;  white-space: nowrap;'>".$guide2['guide_fullname']."</span></h7>
									<a style='font-size:12px; color:grey;'>".$guide2['language']."</a>
									<div class='row'>
										<div class='col-md-7'>
											<a style='font-size:13px; font-weight:bold; color:black; white-space: nowrap;'>Rp. "; 
											$price = $guide2['price'];
											$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice;
											echo"</a>
										</div>
										<div class='col-md-5'>
											<a style='font-size:14px; color:#4183D7;'><img src='http://localhost/Tripversal/assets/icon/Rating.png' style='width:15px; white-space: nowrap;'>"; 
											$total = 0; $j = 0;
											foreach($guideRating as $rating){
												if($guide2['id_guide'] == $rating['id_guide']){
													$total += $rating['rating'];
													$j++;
												}
											}
											if($j >= 1){
												$total = $total / $j;
											} else if($j == 0){
												$total = '-';
											}
											echo number_format((float)$total, 1, '.', '');
											echo"</a>
										</div>
									</div>
									<div id='content2'>
										<form action='rentGuide_C/bookGuide' method='POST'>
										<input class='form-control' name='id_CarGuide' value='".$guide2['id_guide']."' hidden>
										<input class='form-control' name='city' value='".$guide2['city']."' hidden>
										<button type='submit' class='btn btn-success'>Book Now</button>
										</form>
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
							<a class='carousel-control-prev' href='#myCarouselGuideCity' data-slide='prev' style='margin-bottom:-40px;'>
								<i class='fa fa-angle-left'></i>
							</a>
							<a class='carousel-control-next' href='#myCarouselGuideCity' data-slide='next' style='margin-bottom:-40px;'>
								<i class='fa fa-angle-right'></i>
							</a>";
						} else if($k == 0){
							echo"</div>";
							echo "<div class='container'>
								<p style='font-style:italic; text-align:center; color:grey;'>Sorry there's no guide available</p>
								<img src='http://localhost/Tripversal/assets/icon/Empty.gif' alt='Sorry.png' style='display: block;
									margin-left: auto; margin-right: auto; width: 250px; height: 250px;'>
							</div>";
						}
						
					echo"
				</div>
			</div>
			";
		}
	}
?>
