<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		//indexed array
		$myarray = array("Al","Dalia","Reggie");
		print_r($myarray);
		echo '<br>';
		echo $myarray[2];
		echo '<br>';


		// associative array
		$myarray1 = array("Name"=>"Al","Age"=>34,"Phone"=>91601433);
		print_r($myarray1);
		echo "<br>";
		echo $myarray1["Name"];
	 ?>

</body>
</html>