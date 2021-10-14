<?php 

class Posts{

	function __call($name, $arguments){

		echo $name.PHP_EOL;
		var_dump($arguments) .PHP_EOL;
	}



}

$post1 = new Posts();
$post1->createPosts("This is a test",10);






 ?>