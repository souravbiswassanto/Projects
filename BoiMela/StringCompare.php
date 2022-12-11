<?php 

	function StringProcess($S1){
		$removespace = str_replace(' ', '', $S1);
		$lowercase=strtolower($removespace);
		return $lowercase;
	}
	function StringMatching($S1,$S2){
		$S1=StringProcess($S1);
		$S2=StringProcess($S2);

		$X=preg_match("/$S2/", $S1);

		return $X;
	}

 ?>