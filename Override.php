<?php 


class University{
		function hello(){
			echo "Hello from the University Class!".PHP_EOL;
		}
}

class Teacher extends University{

	//Overriding Methods (must be exact same function as parent class)
	function hello(){
		echo "Hello from Teacher Class!".PHP_EOL;
		parent::hello(); //calls method from parent class
	}
}


$teacher = new Teacher();
$teacher->hello();




 ?>