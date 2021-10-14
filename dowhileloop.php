<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$x = 1;
		while($x<0)//will execute only if condtion is true
		{
			echo 'Hi <br>';
			//$x=$x=2;
			$x+=2;
		}

		$y = 1;
		do//will execute atleast once even if false
		{
			echo 'Hi to the Y! <br>';
			//$x=$x=2;
			$y+=2;


		}while($y<0);

	 ?>

</body>
</html>