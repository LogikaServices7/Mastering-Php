<?php 


class Father{


protected $lname;
protected $address;
protected $nationality;


function __construct($lname,$address,$nationality){
	$this->lname =$lname;
	$this->address =$address;
	$this->nationality =$nationality; 

}

function printFatherDetails(){
		echo "My last name is: $this->lname".PHP_EOL;
		echo "My Address is: $this->address".PHP_EOL;
		echo "And I'm from: $this->nationality".PHP_EOL;


	}



}


class Son extends Father{

	public $name;
	public $age;
	public $occupation;

	function __construct($name, $age, $occupation,Father $father){

		$this->name = $name;
		$this->age = $age;
		$this->occupation = $occupation;

		$this->lname = $father->lname;
		$this->address = $father->address;
		$this->car = $father->car;
		$this->nationality = $father->nationality;
	}

		function printSonDetails(){

		echo "My name is $this->name $this->lname and I was born in $this->address and I'm from $this->nationality. I'm $this->age years old and I do $this->occupation for a living.".PHP_EOL;
		

		
	}
	
	






}

class Daughter extends Son{

	public $name;
	public $age;
	public $occupation;

	function __construct($name, $age, $occupation,Father $father){

		$this->name = $name;
		$this->age = $age;
		$this->occupation = $occupation;

		$this->lname = $father->lname;
		$this->address = $father->address;
		$this->car = $father->car;
		$this->nationality = $father->nationality;
	}

		function printDaughterDetails(){

		echo "My name is $this->name $this->lname and I was born on the island of $this->address and I'm from the $this->nationality. I'm $this->age years old and I am an $this->occupation who takes care of Boo Boo and walks Casper and Missy.".PHP_EOL;
		

		
	}
	
	






}


$father = new Father("Solomon","Miami,Fl","America");
$father1 = new Father ("Cariazo","Palawan","Philippines");
$son = new Son("Al","34","Software Engineering",$father);
$daughter = new Daughter("Solomon,Dalia","34","OFW",$father1);


//$son->printFatherDetails();
$son->printSonDetails();
$daughter->printDaughterDetails();








 ?>