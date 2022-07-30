<?php 
	if(isset($success_copy)) { 
		echo"
		<div class='modal fade' id='succescopy' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false'>
			<div class='modal-dialog' role='document'>
				<div class='modal-content'>
				<div class='modal-header'>
					<i class='fa-solid fa-xmark' class='closebtn' type='button' data-dismiss='modal' aria-label='Close' onClick='refreshMessage()'></i>
				</div>
				<div class='modal-body'>
					<img src='http://localhost/Tripversal/assets/icon/success.png' alt='success.png' style='display: block;
						margin-left: auto; margin-right: auto; width: 120px; height: 120px;'>
					<p style='text-align:center; font-weight:bold;'>".$success_copy."</p>
				</div>		
				</div>
			</div>
		</div>";
	}	
?>

<script>
	<?php
		foreach($carData as $data){
			echo"
			function locationCopy".$data['id_garage']."(){
				/* Get the text field */
				var copyText = document.getElementById('myInput".$data['id_garage']."');
				/* Select the text field */
				copyText.select();
				copyText.setSelectionRange(0, 99999); /* For mobile devices */
				/* Copy the text inside the text field */
				navigator.clipboard.writeText(copyText.value);
			}";
		}
	?>	
</script>
