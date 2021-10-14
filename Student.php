<?php 


class Student{

public $name;
public $id;
public $reading = 0;
public $writing = 0;
public $math = 0;
public $subjects= 3;


function examResults($reading,$writing,$math) : int{

	$totalscore =  $reading + $writing + $math;

	$average =   $totalscore / $this->subjects ;

	return $totalscore.PHP_EOL;

	return $average.PHP_EOL;


	
	







}



}


$student1 = new Student();
$student1->name = "Jackson,Randy";
$student1->$id = 101;
$student1->examResults(75,78,96);
$totalscore = $student1->examResults(75,78,96);
$average = $totalscore/3;
echo "Your Exam Results: $student1->examResults(75,78,96)".PHP_EOL;
echo "$student1->name your totalscore was $totalscore".PHP_EOL;
echo "$student1->name your average was $average. Congrats! You passed!".PHP_EOL;



$student2 = new Student();
$student2->name = "Jackson,Michael";
$student2->$id = 102;
$student2->examResults(67,93,100);
$totalscore = $student2->examResults(67,93,100);
$average = $totalscore/3;
echo "Your Exam Results: $student2->examResults(67,93,100)".PHP_EOL;
echo "$student2->name your totalscore was $totalscore".PHP_EOL;
echo "$student2->name your average was $average. Congrats! You passed!".PHP_EOL;







 ?>