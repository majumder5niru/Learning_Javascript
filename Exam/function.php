<?php
	$sentence = "hi hello hi my 
	hi hello hi hi";
	function myExplode($sentence){
		$words = array();
		$strLength = strlen($sentence);
		$word = "";
		for($i=0;$i<$strLength;$i++){
			
			if($sentence[$i]==" "||$sentence[$i]=="\n"||$i==$strLength-1){
				if($i==$strLength-1){
					$word = $word.$sentence[$i];
				}
				array_push($words,$word);
				$word = "";
			}
			else{
				$word = $word.$sentence[$i];
			}
			
			
		}
		return $words;
	}
	$words = myExplode($sentence);
	print_r($words);
?>