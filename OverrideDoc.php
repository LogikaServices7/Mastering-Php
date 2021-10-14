<?php 


class Doctor{

	function calculateFees($hours){
		return 10 * $hours;
	}
}

class Specialist extends Doctor{

	function calculateFees($hours){
		return 25 * $hours;
	}
}

$doctor =new Doctor();
echo $doctor->calculateFees(2).PHP_EOL;

$spec = new Specialist();
echo $spec->calculateFees(2).PHP_EOL;



 ?>