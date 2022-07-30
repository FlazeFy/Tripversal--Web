<div class='chat-messages p-4' id='chat-box'>
	<?php
		foreach($messageData as $message){
			if($message['id_contact'] == $this->session->userdata('set_id_contact')){
				if($message['sender'] == 'customer'){
					foreach($contactData as $contact){
						if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
							echo"
							<div class='chat-message-right pb-4'>
								<div style='margin:10px !important;'>
									<img src='http://localhost/Tripversal/assets/uploads/user/user_".$contact['username'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>
								</div>
								<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
									".$message['body']."
									<div class='text-secondary mt-2' style='font-size:11px;'>".$message['datetime']."</div>
									<input type='text' value='".$message['body']."' id='msgBody".$message['id_message']."' hidden>
								</div>
								<div id='content'>
									<a id='chatdropdown' data-bs-toggle='dropdown' type='button'><i class='fa-solid fa-gear fa-lg mx-2 my-4' style='color:#4169e1;'></i></a>
									<ul class='dropdown-menu' aria-labelledby='chatdropdown'>
										<li>
											<form action='message_C/unsend' method='POST'>
												<input name='id_message' value='".$message['id_message']."' hidden>
												<button class='dropdown-item' type='submit'><i class='fa-solid fa-trash'></i> Unsend</button>
											</form>
										</li>
										<li><a class='dropdown-item' onclick='messageCopy".$message['id_message']."()'><i class='fa-solid fa-copy'></i> Copy</a></li>
										<li><a class='dropdown-item' href='#'><i class='fa-solid fa-share'></i> Forward</a></li>
									</ul>
								</div>
							</div>";
						}
					}
				} else {
					foreach($contactData as $contact){
						if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
							echo"
							<div class='chat-message-left pb-4'>
								<div style='margin:10px !important;'>";
									if($contact['type'] == "Guide"){
										echo "<img src='http://localhost/Tripversal/assets/image/guide/".$contact['guide_fullname']."_".$contact['phone'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>";
									} else {
										echo "<img src='http://localhost/Tripversal/assets/uploads/garage/garage_".$contact['garage_username'].".jpg' class='rounded-circle mr-1' alt='Chris Wood' width='40' height='40'>";
									}
								echo"</div>
								<div class='flex-shrink-1 bg-light rounded py-2 px-3 mr-3'>
									".$message['body']."
									<div class='text-secondary mt-2' style='font-size:11px;'>".$message['datetime']."</div>
									<input type='text' value='".$message['body']."' id='msgBody".$message['id_message']."' hidden>
								</div>
								<div id='content'>
									<a id='chatdropdown' data-bs-toggle='dropdown' type='button'><i class='fa-solid fa-gear fa-lg mx-2 my-4' style='color:#4169e1;'></i></a>
									<ul class='dropdown-menu' aria-labelledby='chatdropdown'>
										<li><a class='dropdown-item' onclick='messageCopy".$message['id_message']."()'><i class='fa-solid fa-copy'></i> Copy</a></li>
										<li><a class='dropdown-item' href='#'><i class='fa-solid fa-share'></i> Forward</a></li>
									</ul>
								</div>
							</div>";
						}
					}
				}
			}
		}
	?>
</div>

<script>
	//Chat setting.
	var myDiv = document.getElementById("chat-box");
	myDiv.scrollTop = myDiv.scrollHeight;

	//Copy message.
	<?php
		foreach($messageData as $message){
			echo"
			function messageCopy".$message['id_message']."(){
				var copyText = document.getElementById('msgBody".$message['id_message']."');
				copyText.select();
				copyText.setSelectionRange(0, 99999); /* For mobile devices */
				navigator.clipboard.writeText(copyText.value);
			}";
		}
	?>	
</script>
