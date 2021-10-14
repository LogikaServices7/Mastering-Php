<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body>

	<?php 
		$x = 5;
		$y = 13;

		$z = $x + $y;

		$x = $x + $y;// $x=5+13 (18)
		//$x += $y;//  $x= 18 + 13 (31)
		$x -=$y;// $x = $x - $y;
		$x /= 5; //$x = $x/5;
		$x *= 5;
		$x %= 3;

		echo $x;
	 ?>

</body>
</html>