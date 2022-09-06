<div class='container-fluid my-2' style='background:#4169E1; border-radius:10px; color:whitesmoke; padding:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
	<form action='rentACar_C/searchCarByControl' method="POST">
		<h4>Control Section</h4>
		<div class="row" style='margin-top:5px;'>
			<div class="col-sm">
				<h5 class='font-weight-100' style='font-size: 16px;'>Driver</h5>
				<select class="form-control" name="driver" style="background:#f4f4f4; border-width: 0 0 3px; 
					border-bottom: 3.5px solid #4183D7; color:#212121;">
					<option value="all">All</option>
					<option value="yes">With driver</option>
					<option value="none">None</option>
				</select>
			</div>
			<div class="col-sm">
				<h5 class='font-weight-100' style='font-size: 16px;'>Sort By</h5>
				<select class="form-control" name="sort" style="background:#f4f4f4; border-width: 0 0 3px; 
					border-bottom: 3.5px solid #4183D7; color:#212121;">
					<option value="1">Price (Up)</option>
					<option value="2">Price (Down)</option>
					<option value="3">Year (Up)</option>
					<option value="4">Year (Down)</option>
				</select>
			</div>
			<div class="col-sm-3">
				<h5 class='font-weight-100' style='font-size: 16px;'>Transmission</h5>
				<select class="form-control" name="transmission" style="background:#f4f4f4; border-width: 0 0 3px; 
					border-bottom: 3.5px solid #4183D7; color:#212121;">
					<option value="all">All</option>
					<option value="MT">Manual</option>
					<option value="AT">Automatic</option>
				</select>
			</div>
		</div>
		<div class="row" style='margin-top:5px;'>
			<div class="col-md-8">
				<h5 class='font-weight-100' style='font-size: 16px;'>City</h5>
				<select class="form-control" name="city" style="background:#f4f4f4; border-width: 0 0 3px; 
					border-bottom: 3.5px solid #4183D7; color:#212121;">
					<option value="Bandung">Bandung</option>
					<option value="Jakarta">Jakarta</option>
					<option value="Lombok">Lombok</option>
					<option value="Bali">Bali</option>
					<option value="Toraja">Toraja</option>
					<option value="Surabaya">Surabaya</option>
				</select>
			</div>
			<div class="col-sm-4">
				<button class='btn btn-success' style='margin-top:25px;' type='submit'><i class="fa-solid fa-magnifying-glass"></i> Search</button>
			</div>
		</div>
	</form>		
	</div>
