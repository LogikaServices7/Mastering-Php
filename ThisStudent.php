<?php 

class Student{


	public $name;
	public $class;


	function getName(): string{
		return $this->name;
	}

	function setName($name){
		$this->name = $name;
	}

	function getClass(): string{
		return $this->class;
	}

	function setClass($class){
		$this->class = $class;
	}

	function printDetails(){


		echo "$this->name is studying in $this->class class.".PHP_EOL;
	}










}


$student1 = new Student();
$student2 = new Student();


$student1->setName("Bunti");
$student1->setClass("Math");

$student2->setName("Baby Baluga");
$student2->setClass("Love");


$student1->printDetails().PHP_EOL;
$student2->printDetails().PHP_EOL;






 ?>