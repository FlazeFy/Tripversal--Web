<h5 style='font-weight:600;'>
<?php 
	if($this->session->userdata('set_typeBook') == 'Car Rental'){
		foreach($carData as $car){
			if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
				echo "<a type='button' style='color:#212121;' href='rentACar_C'>Rent A Car</a>"." >> ".$car['car_name']." / ".$car['year'] ;
			}
		}
	} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
		foreach($guideData as $guide){
			if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
				echo "<a type='button' style='color:#212121;' href='rentGuide_C'>Tour Guide</a>"." >> ".$guide['guide_fullname'];
			}
		}
	}
?>
</h5>
<div class='container-fluid' style='background:#f0f0f0; padding:10px;'>
	<div class='row' style='width:110%;'>
		<div class='col-md-8'>
			<a style='color:#808080; font-size:13px;'>Location</a>
			<h5 style='color:#212121; font-size:15px; font-weight:500;'> 
			<?php 
				if($this->session->userdata('set_typeBook') == 'Car Rental'){
					foreach($carData as $car){
						if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
							echo $car['location'];
						}
					}
				} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
					foreach($guideData as $guide){
						if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
							echo $guide['location'];
						}
					}
				}
			?>	
			</h5>
		</div>
		<div class='col-md-3'>
			<?php
				if($this->session->userdata('set_typeBook') == 'Car Rental'){
					foreach($carData as $car){
						if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
							echo"<button class='btn btn-success' style='font-size:13px; width:130px;' data-toggle='modal' data-target='#loc".$car['id_garage']."'><i class='fa-solid fa-location-dot'></i> See Location</button>
							<input type='text' value='".$car['garage_coordinate']."' id='myInput".$car['id_garage']."' hidden>
							<form class='form-inline' action='bookGuideCar_C/copyCoor' method='post'>
							<button class='btn btn-primary' type='submit' style='font-size:13px; margin-top:5px;' onclick='locationCopy".$car['id_garage']."()'><i class='fa-solid fa-copy'></i> Get Coordinate</button>
							</form>";
						}
					}
				}
				//Car rent only. 
			?>
		</div>
	</div>
</div>
<div class='container-fluid' style='padding:10px;'>
	<div class='row' style='width:110%;'>
		<div class='col-md-9'>
			<h5 style='color:#212121; font-size:15px; font-weight:500;'> 
			<?php 
				if($this->session->userdata('set_typeBook') == 'Car Rental'){
					foreach($carData as $car){
						if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
							echo "<a style='color:#808080; font-size:13px;'>Driver : </a>";
							if($car['driver'] == 'none'){
								echo"<span style='color:#212121; font-size:15px; font-weight:500;'>None</span>";
							} else {
								echo"<img src='http://localhost/Tripversal/assets/uploads/user/user_flazefy.jpg' alt='Driver' class='rounded-circle img-fluid' 
								style='width:35px; height:35px; type:button; cursor:pointer;'>  <span style='color:#068ac2; text-decoration: underline; type:button; cursor:pointer;'> flazefy</span>";
							}
						}
					}
				} else if($this->session->userdata('set_typeBook') == 'Tour Guide'){
					foreach($guideData as $guide){
						if($guide['id_guide'] == $this->session->userdata('set_idCarGuide')){
							echo "<h4 class='text-dark' style='font-size:16px;'>Language</h4>";
							echo "<h4 class='text-secondary' style='font-size:15px;'><i class='fa-solid fa-language' style='color:#FF8E77;'></i> ".$guide['language']."</h4>";
						}
					}
				}
			?>	
			</h5>
			<h5 style='font-size:14px;'>
				<?php 
					if($this->session->userdata('set_typeBook') == 'Car Rental'){
						foreach($carData as $car){
							if($car['id_car'] == $this->session->userdata('set_idCarGuide')){
								echo "<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-person' style='color:#FF8E77;'></i> Seat : ".$car['seat']."</p>
								<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-gauge-simple-high' style='color:#FF65A3;'></i> Distance : ".$car['distance']."</p>
								<p style='color:#212121; font-size:15px;'><i class='fa-solid fa-gas-pump' style='color:#CB5FCE;'></i> Fuel tank : ".$car['tank']." L</p>
								";
							}
						}
					} 
				?>	
			</h5>
		</div>
	</div>
</div>


