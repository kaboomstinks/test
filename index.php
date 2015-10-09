<?php
		
	function sortArray($arr){
		rsort($arr);
		return $arr[1];
	}	
		
		
	$arr = [10,1,3,18,13];
	echo sortArray($arr);
	
	


?>