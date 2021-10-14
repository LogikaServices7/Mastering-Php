<?php 

class Car{

	public $name = "";

	// How to Access Properties via Methods

	// Getter Methods
	function getName(): string{
		return $this->name;
	}



	// Setter Methods
	function getName(): string{
		return $this->name;
	}






}

$car1 = new Car();

// Example 1 Getter and Setter Methods
$car1->setName("BMW");
echo $car1->getName().PHP_EOL;

// Example 2 Change Properties from Outside
$car1->name = "Ferrai";
echo $car1->getName().PHP_EOL;

// Example 3 Independent Objects
$car2 = new Car();
$car2->name = "Bently";
echo $car1->getName().PHP_EOL;
echo $car2->getName().PHP_EOL;






 ?>