<div class='container-fluid' style='width:105%; margin-left:-20px;'>
	<?php
		$page = 0; $item = 0;
		echo"<div id='carouselTips' class='carousel slide z-depth-2-half' data-ride='carousel'>
			<ol class='carousel-indicators'>";
			foreach ($tipsData as $data){
				if($item == 0 && $page == 0){
					echo"<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
					$item++;
					$page++;
				} else if ($item % 3 == 0){
					echo"<li data-target='#carouselExampleIndicators' data-slide-to='".$page."'></li>";
					$item++;
					$page++;
				} else if ($item % 3 != 0){
					$item++;
				}
			}
		echo"</ol>
			<div class='carousel-inner'>";
			$i = 1; $count = 0; $k = 1;
			$state = ' active';
			foreach($tipsData as $tips){
				if($k % 4 == 0  || $k == 1){
					echo"<div class='carousel-item".$state."' >
					<div class='col-md' style='width:100%; padding:10px;'>";
				}	
				echo"<div class='card' style='border-radius:10px; color:whitesmoke; padding:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; margin-bottom:10px;'>
					<div class='row'>
						<div class='col-md-4'>
							<img src='http://localhost/Tripversal/assets/icon/tips-".$tips['id_tips'].".png' alt='Tips-1.png'
								style='width:90px; height:90px;'>
						</div>
						<div class='col-md-8'>
							<a style='color:black; font-size:15px; margin-top:15px; display:block;'>".$tips['text']."</a>
						</div>
					</div>
				</div>";
				$k++;
				$state = ' ';
				if($k % 4 == 0){
					echo"</div>
				</div>";
				}
				$count = 0; $i++; 
			}
		echo"</div>
		</div>";
	?>	
	</div>
</div>
