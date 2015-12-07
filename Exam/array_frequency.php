<html>
<?php
	if(isset($_GET['freq'])&& $_GET['freq']!=""){
		
		
		echo "Your sentence is : ", $_GET["freq"],"<br>";
		
	}
	
	else{
		echo "Please fill the form";
	}
	
    $letter = "bangladesh";
	$length = strlen($letter);
	$frequency = "";
	for($i=0;$i<$length;$i++){
		if($letter[$i]>="a" && $letter[$i]<="z"){
			
		}
	}
?>
	<body>
		<form action="array_frequency.php" method="get" >
			Sentence:<br>
			<textarea name="freq"></textarea>
			<button>Submit</button>
		</form>
	</body>
</html>