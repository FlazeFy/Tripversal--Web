<h5 style='font-weight:600;'>Description</h5>
<hr>
<?php 
	if($this->session->userdata('set_typeBook') == 'Car Rental'){
		foreach($carData as $car){
			if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
				echo "<div class='container-fluid' style='width:105%; max-height: calc(80vh - 140px); overflow-x: auto; margin-left:-20px;'>
				<p>".nl2br($car['description'])."</p>
				</div>
				<div class='container-fluid' style='background:#F0F0F0; padding:10px; border-radius:6px; margin-top:10px;'>
					<div class='row'>
						<div class='col-md-8' style='padding:10px;'>
							<h6 style='font-weight:bold;'>Rp. "; $price = $car['price'];
							$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo" / Day</h6>
						</div>
						<div class='col-md-1'>
							<button class='btn btn-primary'><i class='fa-solid fa-heart'></i></button>
						</div>
						<div class='col-md-3'>
							<button class='btn btn-success'><i class='fa-solid fa-arrow-right'></i> Order Now</button>
						</div>
					</div>
				</div>
				";
			}
		}
	} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
		foreach($guideData as $guide){
			if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
				echo "<div class='container-fluid' style='width:105%; max-height: calc(80vh - 140px); overflow-x: auto; margin-left:-20px;'>
				<p>".nl2br($guide['description'])."</p>
				</div>
				<div class='container-fluid' style='background:#F0F0F0; padding:10px; border-radius:6px; margin-top:10px;'>
					<div class='row'>
						<div class='col-md-8' style='padding:10px;'>
							<h6 style='font-weight:bold;'>Rp. "; $price = $guide['price'];
							$newPrice = wordwrap($price , 3 , '.' , true ); echo $newPrice; echo" / Day</h6>
						</div>
						<div class='col-md-1'>
							<button class='btn btn-primary'><i class='fa-solid fa-heart'></i></button>
						</div>
						<div class='col-md-3'>
							<button class='btn btn-success'><i class='fa-solid fa-arrow-right'></i> Order Now</button>
						</div>
					</div>
				</div>
				";
			}
		}
	}
?>	
