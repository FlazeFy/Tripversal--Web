<div class='container-fluid m-1' style='padding:10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
	<?php
		$city = $this->session->userdata('set_city');
		echo"<a class='weatherwidget-io' href='"; 
			if($city == 'Bandung'){
				echo "https://forecast7.com/en/n6d92107d62/bandung/";
			} else if($city == 'Jakarta'){
				echo "https://forecast7.com/en/n6d21106d85/jakarta/";
			} else if($city == 'Toraja'){
				echo "https://forecast7.com/en/n2d86119d84/north-toraja-regency/";
			} else if($city == 'Bali'){
				echo "https://forecast7.com/en/n8d67115d21/denpasar-city/";
			} else if($city == 'Lombok'){
				echo "https://forecast7.com/en/n8d60116d10/mataram-city/";
			} else if($city == 'Surabaya'){
				echo "https://forecast7.com/en/n7d26112d75/surabaya/";
			}

		echo"' data-label_1='".$city."' data-label_2=";
		echo date('y/m/d'); echo "-"; echo date('m/d', strtotime('+7 days'));
		echo" data-icons='Climacons Animated' data-mode='Forecast' data-theme='pure'>".$city." Weather</a>				
		<a style='color:grey; font-size:12px; font-style:italic;'>Source : https://weatherwidget.io/</a>";
	?>
</div>

<script>
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){
			js=d.createElement(s);
			js.id=id;
			js.src='https://weatherwidget.io/js/widget.min.js';
			fjs.parentNode.insertBefore(js,fjs);
		}
	}
	(document,'script','weatherwidget-io-js');
</script>
