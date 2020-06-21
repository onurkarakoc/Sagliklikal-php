<?php
	$vucut_kitle_indeksi; 
	$errors = array();
	if (isset($_GET['calculate'])) {
	
		$height = $_GET['height'];
		$weight = $_GET['weight'];

		
		if (empty($height)) { array_push($errors, "Lütfen boyunuzu girin."); }
		if (empty($weight)) { array_push($errors, "Lütfen kilonuzu girin."); }
		

		if (count($errors) == 0) {
			$height_metre = $height / 100;
  			$vucut_kitle_indeksi = $weight / ($height_metre * $height_metre); 
  		}


	}



 ?>