<?php


class Dog
{
    private $color;
    private $breed;

    function getColor(): string{
    	return $this->color;

    }
    function setColor($color){
    	$this->color =$color;

    }

    function getBreed(): string{
    	return $this->breed;


    }
    function setBreed($breed){
    	$this->breed = $breed;
    	
    }


    function dogBark(){
        echo "Woof! Woof!" . PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZzzzzzz...." . PHP_EOL;
    }
}
$dog1 = new Dog();

//Access the Properties Directly
$dog1->color = "Black";
$dog1->breed = "German Shepard";

//Call Methods
$dog1->dogBark();
$dog1->dogSleep();

