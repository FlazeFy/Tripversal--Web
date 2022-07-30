<?php
	$i = 1; 
	foreach($carData as $data){
		echo"
		<div class='modal fade' id='loc".$data['id_garage']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
			<div class='modal-dialog modal-xl' role='document'>
				<div class='modal-content'>
					<div class='modal-header'>
						<h4>".$data['garage_name']."</h4>
						<img type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/Tripversal/assets/icon/Close.png'
							width='35px' height='35px'>
					</div>
					<div class='modal-body'>
						<div id='googleMap".$data['id_garage']."' style='width:100%;height:500px; border-radius:10px;'></div>
					</div>			
				</div>
			</div>
		</div>";	
	}
?>

<script type="text/javascript">
	function myMap() {
		<?php
			foreach($carData as $data){
				echo"
				var mapProp".$data['id_garage']."= {
					center:new google.maps.LatLng(".$data['garage_coordinate']."),
					zoom:15,
				};
				var map".$data['id_garage']." = new google.maps.Map(document.getElementById('googleMap".$data['id_garage']."'),mapProp".$data['id_garage'].");
				";
			}
		?>
		
		var markers = [
			<?php
				foreach($carData as $data){
					$coor  = $data['garage_coordinate'];
					$newCoor = explode(", ", $coor);
					echo"{
						coords:{lat:".$newCoor[0].",lng:".$newCoor[1]."},
						content:'<div><h4>".$data['garage_name']."</h4><p>".$data['garage_phone']."</p></div>'
					},";
				}
			?>
		];

			
		<?php
			foreach($carData as $data){
				echo"
				// Loop through markers
				for(var i = 0;i < markers.length;i++){
					// Add marker
					addMarker".$data['id_garage']."(markers[i]);
				}
				// Add Marker Function
				function addMarker".$data['id_garage']."(props){
					var marker = new google.maps.Marker({
					position:props.coords,
					map:map".$data['id_garage'].",
					//icon:props.iconImage
					});
					// Check for customicon
					if(props.iconImage){
					// Set icon image
					marker.setIcon(props.iconImage);
					}
					// Check content
					if(props.content){
					var infoWindow = new google.maps.InfoWindow({
						content:props.content
					});
					marker.addListener('click', function(){
						infoWindow.open(map".$data['id_garage'].", marker);
					});
					}
				}";
			}
		?>
	}
</script>
