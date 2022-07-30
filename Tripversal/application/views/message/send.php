<?php
	foreach($contactData as $contact){
		if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
			echo"
			<form action='message_C/sendMessage' method='post'>
				<div class='input-group'>
					<a class='btn btn-primary'><i class='fa-solid fa-paperclip'></i></a>
					<input type='text' class='form-control' placeholder='Type your message' name='body' required>
					<button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
				</div>
			</form>";
		}
	}
?>
