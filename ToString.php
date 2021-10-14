<?php 

class Teacher{


	public $name = "Randy the Boring Baby";

	function __toString() : string{
		echo "Name: ".$this->name.PHP_EOL;
		return "To string method is called.".PHP_EOL;
	}




}


$teacher = new Teacher();
echo $teacher;
var_dump($teacher);




 ?>