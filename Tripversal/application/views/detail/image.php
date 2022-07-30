<?php
	if($this->session->userdata('set_typeBook') == 'Car Rental'){
		foreach($carData as $car){
			if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
				echo "<img src='http://localhost/Tripversal/assets/image/".$car['plate_number'].".png' alt='".$car['plate_number'].".png' 
				style='display: block; width: 100%; height: auto; margin-top:-30px; '>";
			}
		}
	} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
		foreach($guideData as $guide){
			if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
				echo "<img src='http://localhost/Tripversal/assets/image/guide/".$guide['guide_fullname']."_".$guide['phone'].".jpg' class='rounded-circle img-fluid'
				style='display: block; width: 60%; height: auto; margin-left:auto; margin-right:auto;'>";
			}
		}
	}
?>
