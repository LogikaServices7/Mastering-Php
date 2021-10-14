<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$x = 5;
		$y = "5";
		
		if($x==$y)
		{
			echo 'Both are the same value.<br>';
			if($x===$y)
			{
				echo 'Both are identical.<br>';
			}

			else
			{
				echo 'Both are the same value but different type.<br>';
			}
		}

		else
		{
			echo 'this part will not execute for our condition';

		}
	 ?>

</body>
</html>