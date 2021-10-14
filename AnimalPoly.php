<?php 

interface Animal{
	 function makeSound();
}


class Dog implements Animal{

	function makeSound(){
		echo "Woof Woof!!!!".PHP_EOL;
	}

}

class Cat implements Animal{

	function makeSound(){
		echo "Meow!!!! Damnit!".PHP_EOL;
	}

}



 ?>