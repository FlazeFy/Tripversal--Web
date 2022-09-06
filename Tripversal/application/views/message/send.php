<?php
	foreach($contactData as $contact){
		if($contact['id_contact'] == $this->session->userdata('set_id_contact')){
			echo"
			<form id='send_message_form'>
				<div class='input-group'>
					<a class='btn btn-primary'><i class='fa-solid fa-paperclip'></i></a>
					<input type='text' value='' class='form-control' placeholder='Type your message' name='body' id='msg_box' required>
					<button class='btn btn-success' type='submit'><i class='fa-solid fa-paper-plane'></i> Send</button>
				</div>
			</form>";
		}
	}
?>

<script type="text/javascript">
	//Post ajax
	$('#send_message_form').submit(function( event ) {
		event.preventDefault();
		$.ajax({
			url: 'message_C/sendMessage',
			type: 'post',
			data: $('#send_message_form').serialize(),
			dataType: 'json',
			success: function( _response ){
				//...
			},
			error: function( _response ){
				// Handle error
			}
		});
		
		//Empty input box after send message
		$("#msg_box").val('');
	});
</script>
