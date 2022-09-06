<?php 
    foreach($travelData as $travel){
        if($this->session->userdata('set_city_onbook') ==  $travel['place_city']){
            echo"
            <div class='modal fade' id='trv".$travel['id_place']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-xl' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4>".$travel['place_name']."</h4>
                            <img type='button' data-dismiss='modal' aria-label='Close' src='http://localhost/Tripversal/assets/icon/Close.png'
                                width='35px' height='35px'>
                        </div>
                        <div class='modal-body'>
                            <div id='googleMapTrv".$travel['id_place']."' style='width:100%;height:500px; border-radius:10px;'></div>
                        </div>			
                    </div>
                </div>
            </div>";	
        }
    }

?>

<script type="text/javascript">
	function myMap() {
		<?php
			foreach($travelData as $travel){
				echo"
				var mapProp".$travel['id_place']."= {
					center:new google.maps.LatLng(".$travel['place_coordinate']."),
					zoom:15,
				};
				var mapTrv".$travel['id_place']." = new google.maps.Map(document.getElementById('googleMapTrv".$travel['id_place']."'),mapProp".$travel['id_place'].");
				";
			}
		?>
		
		var markers = [
			<?php
				foreach($travelData as $travel){
					$coor  = $travel['place_coordinate'];
					$newCoor = explode(", ", $coor);
					echo"{
						coords:{lat:".$newCoor[0].",lng:".$newCoor[1]."},
						content:'<div><h4>".$travel['place_name']."</h4><p>".$travel['place_address']."</p></div>'
					},";
				}
			?>
		];

			
		<?php
			foreach($travelData as $travel){
				echo"
				// Loop through markers
				for(var i = 0;i < markers.length;i++){
					// Add marker
					addMarker".$travel['id_place']."(markers[i]);
				}
				// Add Marker Function
				function addMarker".$travel['id_place']."(props){
					var marker = new google.maps.Marker({
					position:props.coords,
					map:mapTrv".$travel['id_place'].",
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
						infoWindow.open(map".$travel['id_place'].", marker);
					});
					}
				}";
			}
		?>
	}
</script>