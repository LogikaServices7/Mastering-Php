<?php 

class University{


	public $UniversityName = "University of Miami";
	function helloUniversity(){

		echo "Hello from the staff at the $this->UniversityName". PHP_EOL;
	}

}

class Teacher extends University{

	public $teacherName = "Randy";
	private $workingHours = 40;
	function helloTeacher(){

		echo "Hello from $this->teacherName".PHP_EOL;
	}

	function calculateSalary($hourlyWage) : int{
		return $hourlyWage * $this->workingHours;

	}

}


class PartTimeTeacher extends Teacher{

	public $teacherName = "Bundi";
	private $workingHours = 8;
	function helloTeacher(){

		echo "Hello from $this->teacherName".PHP_EOL;
	}

	function calculateSalary($hourlyWage) : int{
		return $hourlyWage * $this->workingHours;

	}

}


$teacher1 = new PartTimeTeacher();
$teacher1->helloUniversity();
$teacher1->helloTeacher();
echo $teacher1->calculateSalary(10).PHP_EOL;

$teacher2 = new Teacher();
$teacher2->helloUniversity();
$teacher2->helloTeacher();
echo $teacher2->calculateSalary(10).PHP_EOL;


 ?>