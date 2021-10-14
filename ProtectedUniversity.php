<?php 

class University{


	protected $UniversityName = "University of Miami";
	function helloUniversity(){

		echo "Hello from the staff at the $this->UniversityName". PHP_EOL;
	}





}

class Teacher extends University{

	public $teacherName = "Randy";
	function helloTeacher(){

		echo "Hello from $this->teacherName".PHP_EOL;
	}

	function getUniversityName(){
		return $this->UniversityName;

	}






}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity(); 
echo $teacher1->getUniversityName().PHP_EOL; 





 ?>