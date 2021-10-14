<?php 

declare(strict_types=1);

class University{

	private $name;
	function getName() : string{
		return $this->name;
	}

	function setName(string $name) : void{
		$this->name = $name;
	}
}

class Student extends University{

	private $studentID = "";
	private $studentName = "";

	function setDetails(array $students) : void{
		$this->studentID = $students['id'];
		$this->studentName = $students['name'];
	}
}

$u = new University();
$u->setName("Harvard University");
$s = new Student();
$student= ['id'=> 1, 'name' =>'Jane'];
$s->setDetails($student);
var_dump($s);











 ?>