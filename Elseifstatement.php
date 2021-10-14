<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

	    $x = 5;
		$y = "5";
		$z = 10;


		if($x==$z)//Can only have 1 if statement
		{
			echo 'Yessir! They have the same value! <br>';
		}

		elseif($x==$y)//can have multiple elseif statements
		{
			echo $x.' and '.$y.' have the same values!<br>';

		}

		else()// can only have 1 else statement
		{
			echo 'It\'s too much going on!';
		}

	 ?>

</body>
</html>