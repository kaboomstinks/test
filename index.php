<?php
		
	function sortArray($arr){
		rsort($arr);
		return $arr[1];
	}	
		
	//$arr = [10,1,3,18,13];
	//echo sortArray($arr);
	
	function fibonacci($num){
			
		$arr = [1,1];
		
		for($i=1;$i<$num;$i++){
			$arr[] = $arr[$i-1] + $arr[$i];
		}
		 
		return $arr[$num-1];
		
	}
	
	echo fibonacci(6);
	//echo '<br /><br />';
	
	echo 'Hello World';
	
	
	
?>
