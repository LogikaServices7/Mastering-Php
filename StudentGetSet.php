<?php 

class Student{

	private $id;
	private $name;


	function __set($name, $value){
		echo "Set method is not found so this is called". PHP_EOL;

		echo $name.PHP_EOL;
		echo $value.PHP_EOL;

		if($name == "id"){
			$this->id = $value;
		}

	}

	function __get($name){
		echo "Get method is not found so this is called". PHP_EOL;

		echo $name.PHP_EOL;

		if($name == "id"){
			echo $this->id;
		}

		//All of the above is the standard syntax for these two functions

	}
}

$student1 = new Student();
$student1->id = "Test"; //Test = the "value" of "name" of the variable $id.
echo $student1->id.PHP_EOL;







 ?>