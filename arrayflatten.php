<?php 

	function arrayFlatten($noFlatten){
		# code...
		$flatten = array();


		# code...
		foreach ($noFlatten as $key => $value) {
			# code...
			if (is_array($value)) {
				# code...
				$flatten = array_merge_recursive($flatten, arrayFlatten($value));
			}

			else {
				array_push($flatten, $value);
			}
		}
		return $flatten;
	}

	//php sample/////////////////////////////////////////////
	
	$a = array( 1, 2, array(3, 5, array(6, 8, 9), 2), 13 );
	echo "[";
	foreach (arrayFlatten($a) as $key => $value) {
		# show result
		echo " ".$value;
	}
	echo " ]";

?>
