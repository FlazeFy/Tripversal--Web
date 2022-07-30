<style>
	#notification{
		padding-top:3px; padding-bottom:3px; padding-right:6px; padding-left:10px;
		margin-left:-20px; margin-bottom:20px;
		border-radius:0px; border:none; 
	}
</style>

<button class='btn btn-link' style='float:right; margin-top:-35px; color:grey; text-decoration:none; font-size:13px;'><i class="fa-solid fa-trash-can"></i> Clear All</button>
<div class='container-fluid' style='width:100%; max-height: calc(100vh - 210px); overflow-x: auto;'>
	<?php
		$i = 0;
		foreach($notification as $notif){
			foreach($loginData as $u){
				if(($notif['id_user'] == $u['id_user'])||($notif['id_user'] == '0')){
					if(($notif['type'] == 'message_car')){
						foreach($carData as $car){if($car['id_car'] == $notif['id_car_guide']){
							echo"<div class='card' id='notification' style='border-left: 4px solid #CB5FCE;'>
								<h6 style='font-weight:600;'>Message | ".$car['garage_name']."</h6>
								<a style='color:grey; font-size:12px;'><i class='fa-solid fa-car'></i> ".$car['car_name']." / ".$car['year']." 
									| <i class='fa-solid fa-location-dot'></i> ".$car['location']."</a>
								<div class='container-fluid' style='width:100%; border-radius:10px; background:#e3e3e3; padding:5px; margin:2px;'>
									<p style='font-size:13px; color:#212121;'>".$notif['text']."</p>
									<a style='color:grey; font-size:12px; font-style:italic;'>~";
										$cek = strtotime($notif['datetime']);
										if(date('Y-m-d', $cek) == date("Y-m-d")){
											$date = strtotime($notif['datetime']);
											echo " Today | " .date('h:i a', $date);
										} else {
											$date = strtotime($notif['datetime']);
											echo date('l, d F y | h:i a', $date);
										}
									echo"</a>
								</div>
							</div>";
						}
					}
					} else if(($notif['type'] == 'maintenance')){
					echo"<div class='card' id='notification' style='border-left: 4px solid #FF8E77;'>
						<h6 style='font-weight:600;'>Announcement | ".$notif['type']."</h6>
						<a style='color:grey; font-size:13px; color:#212121;'>".$notif['text']."</a>"; 
							$datefrom = strtotime($notif['date_from']); $dateuntil = strtotime($notif['date_until']);
							echo"<a style='color:grey; font-size:12px; font-style:italic;'> From : ";  
							echo date('l, d F y | h:i a', $datefrom)."</a>";
							echo"<a style='color:grey; font-size:12px; font-style:italic;'> Until : ";  
							echo date('l, d F y | h:i a', $dateuntil)."</a>
					</div>";
					} else if(($notif['type'] == 'promo')){
					echo"<div class='card' id='notification' style='border-left: 4px solid #FFC45D;'>
						<h6 style='font-weight:600;'>Announcement | ".$notif['type']."</h6>
						<h7 style='font-size:14px;'>Eid Mubarak Holiday</h7>
						<a style='color:grey; font-size:13px; color:#212121;'>".$notif['text']."</a>";
							$datefrom2 = strtotime($notif['date_from']); $dateuntil2 = strtotime($notif['date_until']);
							echo"<a style='color:grey; font-size:12px; font-style:italic;'> From : ";  
							echo date('l, d F y | h:i a', $datefrom2)."</a>";
							echo"<a style='color:grey; font-size:12px; font-style:italic;'> Until : ";  
							echo date('l, d F y | h:i a', $dateuntil2)."</a>
					</div>";
					} if(($notif['type'] == 'message_guide')){
						foreach($guideData as $guide){
							if($guide['id_guide'] == $notif['id_car_guide']){
								echo"<div class='card' id='notification' style='border-left: 4px solid #CB5FCE;'>
									<h6 style='font-weight:600;'>Message | Tour Guide</h6>
									<a style='color:grey; font-size:12px;'><i class='fa-solid fa-user'></i> ".$guide['guide_fullname']." 
										| <i class='fa-solid fa-location-dot'></i> ".$guide['location']."</a>
									<div class='container-fluid' style='width:100%; border-radius:10px; background:#e3e3e3; padding:5px; margin:2px;'>
										<p style='font-size:13px; color:#212121;'>".$notif['text']."</p>
										<a style='color:grey; font-size:12px; font-style:italic;'>~";
											$cek = strtotime($notif['datetime']);
											if(date('Y-m-d', $cek) == date("Y-m-d")){
												$date = strtotime($notif['datetime']);
												echo " Today | " .date('h:i a', $date);
											} else {
												$date = strtotime($notif['datetime']);
												echo date('l, d F y | h:i a', $date);
											}
										echo"</a>
									</div>
								</div>";
							}
						}
					}
				}
			}
		}
	?>
</div>
