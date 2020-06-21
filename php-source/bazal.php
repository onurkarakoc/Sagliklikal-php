<?php
	$bazal_metobolizma_hizi; 
	$errors = array();
	if (isset($_GET['calculate'])) {
	
		$gender = $_GET['gender'];
		$height = $_GET['height'];
		$weight = $_GET['weight'];
		$age = $_GET['age'];

		if (empty($gender)) { array_push($errors, "Lütfen cinsiyetinizi seçin."); }
		if (empty($height)) { array_push($errors, "Lütfen boyunuzu girin."); }
		if (empty($weight)) { array_push($errors, "Lütfen kilonuzu girin."); }
		if (empty($age)) { array_push($errors, "Lütfen yaşınızı girin."); }

		if (count($errors) == 0) {
  			if($gender == 'male'){
  				$bazal_metobolizma_hizi = male($height,$weight,$age);
  			}
  			else if ($gender == 'female') {
  				$bazal_metobolizma_hizi = female($height,$weight,$age);
  			}
  		}


	}

	function male($height,$weight,$age){
		$speed = 66.5 + (13.7 * $weight) + (5 * $height) + (6.7 * $age);
		return $speed;
	} 

	function female($height,$weight,$age){
		$speed = 665 + (9.6 * $weight) + (1.8 * $height) + (4.7 * $age);
		return $speed;
	}





 ?>