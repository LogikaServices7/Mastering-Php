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


	//added the University object here as well
	function setDetails(array $students, University $u) : void{
		$this->studentID = $students['id'];
		$this->studentName = $students['name'];
		$this->setName($u->getName() );//Added this line of object code
	}
}

$u = new University();
$u->setName("Harvard University");
$s = new Student();
$student= ['id'=> 1, 'name' =>'Jane'];
$s->setDetails($student, $u);//added the university object
var_dump($s);











 ?>