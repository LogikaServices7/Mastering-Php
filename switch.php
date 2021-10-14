<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$var = 4;

		switch($var)
		{
			case 1:
				echo "You pressed 1";
				break;
			case 2:
				echo "You pressed 2";
				break;
			case 4:
				echo "You pressed 4";
				break;
			case 5:
				echo "You pressed 5";
				break;	

			default:
				echo "You pressed something else";		
		}

		//remember to add (break) between all cases or else the code will continue to run.

	 ?>

</body>
</html>