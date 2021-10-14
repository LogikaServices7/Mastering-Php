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
		echo "<br>";

		//multidimensional array
		$myarray2 = array("Name"=>"Al","Age"=>34,"Phone"=>array(91601433,9498160));

		echo $myarray2["Phone"][1]." ";
		echo $myarray2["Phone"][0];

		//multidimensional array example 2
		$myarray2 = array("Name"=>"Al",
			              "Age"=>34,
			              "Phone"=>
			              array("Landline"=>9498160, 
			              "Cell"=>array(91601433, 94491585)
			                   )
			          	 );

		echo "<br>";

		echo $myarray2["Phone"]["Cell"][1];

		echo "<br>";

		echo '<pre>',print_r($myarray2),'</pre>';
		

	 ?>

</body>
</html>