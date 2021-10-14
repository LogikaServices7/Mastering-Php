<?php


class Dog
{
    private $color;
    private $breed;

    // Get's the Value
    function getColor(): string{
    	return $this->color;

    }

    // Sets the value
    function setColor($color){
    	$this->color = $color;

    }

    function getBreed(): string{
    	return $this->breed;


    }
    function setBreed($breed){
    	$this->breed = $breed;
    	
    }


    function dogBark(){
        echo "Woof! Woof!" . PHP_EOL;
        $this->dogSleep();
    }


    private function dogSleep(){
        echo "ZZZZzzzzzz...." . PHP_EOL;
    }
}
$dog1 = new Dog();

//Access the Properties Directly (cannot access like this when "private")
// $dog1->color = "Black";
// $dog1->breed = "German Shepard";

$dog1->setColor("Black");
$dog1->setBreed("German Shepard");

//Call Methods
$dog1->dogBark();
// $dog1->dogSleep(); The Function is Applied on line 34, you access "private method with $this"

