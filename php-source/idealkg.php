<?php
	$ideal_kilo; 
	$errors = array();
	if (isset($_GET['calculate'])) {
	
		$gender = $_GET['gender'];
		$height = $_GET['height'];


		if (empty($gender)) { array_push($errors, "Lütfen cinsiyetinizi seçin."); }
		if (empty($height)) { array_push($errors, "Lütfen boyunuzu girin."); }

		if (count($errors) == 0) {
  			if($gender == 'male'){
  				$ideal_kilo = male($height);
  			}
  			else if ($gender == 'female') {
  				$ideal_kilo = female($height);
  			}
  		}


	}

	function male($height){
		$ideal = 50 + (2.3 / 2.54) * ($height - 152.4);
		return $ideal;
	} 

	function female($height){
		$ideal = 45.5 + (2.3 / 2.54) * ($height - 152.4);
		return $ideal;
	}





 ?>
