<?php 
	if(isset($success)) { 
		echo"
		<div class='modal fade' id='successModal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
					<div class='modal-header'>
						<h5 class='modal-title'>Success</h5>
						<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
					</div>
					<div class='modal-body'>
						<img src='http://localhost/MedStory/assets/icon/success.png' alt='Failed.png' style='display: block;
							margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
						<p style='text-align:center;'>".$success."</p>
					</div>		
				</div>
			</div>
		</div>";
	}	
?>

<script>
	//Modal setting.
	$(window).on('load', function() {
		$('#successModal').modal('show');
	})
	$('#successModal').modal({backdrop: 'static', keyboard: false})  
</script>
