<?php
	$city_id = $_GET['qty'];
	error_reporting(0);
	echo '<label  class="col-md-3 control-label">Location:</label>
          <div class="col-md-3">
          <select  class="form-control select2me" data-placeholder="Select Location" name="location_id" id="location_id" required="required">
		  <option value="" selected="select">Select Location</option>';
	$data = file_get_contents ("../location/location.json");
	$json = json_decode($data, true);
	foreach ($json as $key => $value) {
		if($value["location_id"]!="" && $value["city_id"]==$city_id){
	echo '<option value="'.$value["location_id"].'">'.$value["location_title"].'</option>';
		}
	}
	echo '</select>
	</div>
		<div id="location_id_error" style="font-size:18px; color:#009933; font-weight:700;"></div>';
  ?>