<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

	body{
		font-size: 30px;
		font-weight: bold;
	}
		
	</style>
	
</head>
<body>

	<?php 
	$string = "Bob";
	$number =15;
	$float = 6.76456; //Float Variable aka Double Variable, can be any number even negative
	$myarray = array("Al","Dalia","Allen");

	echo $float;

	$bool = true;
	echo "<br>";

	print json_encode ($myarray);
	echo "<br>";
	print_r($myarray);
	echo "<br>";
	var_dump($number);
	echo "<br>";
	var_dump($float);
	echo "<br>";
	var_dump($myarray);
	//object
	
	$p = null; //null
	echo "<br>";
	var_dump($p);
	echo "<br>";
	


	function Al()
	{
		echo "Al";

	}
	$x = Al(); //resource


	

	 ?>

</body>
</html>
