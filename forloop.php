<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$x = 1;

		for (;$x<=10;) 
		{ 
			echo "I am from the for loop posse!<br><br>";
			$x+=2;
		}

		//Both are the same code

		for ($x=1;/*Initialize*/ $x<=10 ;/*Condition*/ $x+=2/*Increment*/) 
		{ 
			echo "I am from the for loop posse!<br>";
		}
	 ?>

</body>
</html>