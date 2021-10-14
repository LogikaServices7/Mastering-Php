<?php 

class Student{

private $id;
private $name = "";
private $class = "";


	public function setId($id){
		$this->id = $id;

	}
	public function getId(): int{
		return $this->id;

	}

	public function setName($name){
		$this->name = $name;

	}
	public function getName(): string{
		return $this->name;

	}

	public function setClass($class){
		$this->class = $class;

	}
	public function getClass(): string{
		return $this->class;

	}



}


$student1 = new Student();
$student1->setName("Chidi");
$student1->setClass("Math");
$student1->setId(101);
echo $student1->getName()." is a student taking ".$student1->getClass()." class"." and his id number is: ".$student1->getId().PHP_EOL;






 ?>