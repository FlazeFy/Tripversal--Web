<div class="col w-100" id="contact">
	<?php
		foreach($contactData as $contact){
			if($contact['username'] == $this->session->userdata("userTrack")){
				if($contact['type'] == "Guide"){
					echo"
					<form action='message_C/selectContact' method='POST'>
					<input name='id_contact' value='".$contact['id_contact']."' hidden></input>
					<button type='submit' class='list-group-item list-group-item-action border-0' style='"; 
						if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
							echo "border-left:4px solid #4169E1 !important;";
						}
						echo"'>
						<div class='d-flex align-items-start'>";
							$i = 0;
							foreach($newMessageData as $message){
								if(($message['id_contact'] == $contact['id_contact'])&&($i < 1)){
									echo"
									<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle' alt='".$contact['guide_fullname']."' id='contactImage'>
									<div class='flex-grow-1 ml-3 w-100'>".$contact['guide_fullname']."
										<div class='text-secondary'>".$message['body']."</div>
									</div>
									<a class='fw-bold text-secondary mt-1' style='font-size:11px; white-space:nowrap;'>";
										//Show last message date.
										$date = strtotime($message['datetime']);
										if(date("Y-m-d", $date) == date("Y-m-d")){
											echo"Today<br><span>".date("H:i", $date)."</span>";
										} else if(date("Y-m-d", $date) == date('Y-m-d',strtotime("-1 days"))){
											echo"Yesterday<br><span style='float:right;'>".date("H:i", $date)."</span>";
										} else {
											echo date("Y-m-d", $date)."<br><span>".date("H:i", $date)."</span>";
										}	
									echo"</a>";
									$i++;
								}
							}
						echo"</div>
					</button></form>";
				} else {
					echo"
					<form action='message_C/selectContact' method='POST'>
					<input name='id_contact' value='".$contact['id_contact']."' hidden></input>
					<button type='submit' class='list-group-item list-group-item-action border-0' style='";
						if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
							echo "border-left:4px solid #4169E1 !important;";
						}
						echo"'>
						<div class='d-flex align-items-start'>";
							$i = 0;
							foreach($newMessageData as $message){
								if(($message['id_contact'] == $contact['id_contact'])&&($i < 1)){
									echo"
									<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$contact['garage_username'].".jpg' class='rounded-circle' alt='".$contact['garage_username']."' id='contactImage'>
									<div class='flex-grow-1 ml-3 w-100'>".$contact['garage_name']."
										<div class='text-secondary'>".$message['body']."</div>
									</div>
									<a class='fw-bold text-secondary mt-1' style='font-size:11px; white-space:nowrap;'>";
										//Show last message date.
										$date = strtotime($message['datetime']);
										if(date("Y-m-d", $date) == date("Y-m-d")){
											echo"Today<br><span>".date("H:i", $date)."</span>";
										} else if(date("Y-m-d", $date) == date('Y-m-d',strtotime("-1 days"))){
											echo"Yesterday<br><span style='float:right;'>".date("H:i", $date)."</span>";
										} else {
											echo date("M d", $date)."<br><span>".date("H:i", $date)."</span>";
										}	
									echo"</a>";
									$i++;
								}
							}
						echo"</div>
					</button></form>";
				}
			}
		}
	?>
<hr class="d-block d-lg-none mt-1 mb-0">
</div>
