<?php 

class Animal{


	protected $name;
	protected $hunt = false;

	function doesHunting(){
		if($this->hunt){
			echo "Yes, it does hunt, and it will kill you!".PHP_EOL;
		}else{
			echo "No, it does not hunt.".PHP_EOL;
		}
	}
}

class Dog extends Animal{
	function __construct($name, $hunt){
		$this->name = $name;
		$this->hunt = $hunt;
	}

	function makesound(){
		echo "Woof!!! Woof!!!".PHP_EOL;
	}
}

class Tiger extends Animal{
	function __construct($name, $hunt){
		$this->name = $name;
		$this->hunt = $hunt;
	}

	function makesound(){
		echo "Grrrrrrr!!!".PHP_EOL;
	}
}

$dog1 = new Dog("Pitbull",true);
$dog1->makeSound();
$dog1->doesHunting();


$tiger1 = new Tiger("Indian Tiger",false);
$tiger1->makeSound();
$tiger1->doesHunting();







 ?>