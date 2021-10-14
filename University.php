<?php 

class University{


	public $UniversityName = "University of Miami";
	function helloUniversity(){

		echo "Hello from the staff at the $this->UniversityName". PHP_EOL;
	}





}

class Teacher extends University{

	public $teacherName = "Randy";
	function helloTeacher(){

		echo "Hello from $this->teacherName".PHP_EOL;
	}






}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity(); //We are using the child object to call the parent method

echo $teacher1->teacherName.PHP_EOL;
echo $teacher1->UniversityName.PHP_EOL;




 ?>