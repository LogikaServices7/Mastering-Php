p<?php 


class Car{

private $color;
private $name;
private $type;
private $speed = 0;



	function __construct($color,$name,$type){
		$this->color = $color;
		$this->name = $name;
		$this->type = $type;
	}	


	// Get's the Value
    function getColor(): string{
    	return $this->color;

    }

    // Sets the value
    function setColor($color){
    	$this->name = $name;

    }

    function getName(): string{
    	return $this->name;


    }
    function setName($name){
    	$this->name = $name;
    	
    }

    function getType(): string{
    	return $this->type;
    }

    function setType($type){
    	$this->name = $name;
    } 

    function getSpeed(): int{
    	return $this->speed;
    }

    function setSpeed($speed){
    	$this->speed = $speed;
    } 

    function increaseSpeed($gas){

    	$this->speed = $this->speed + $gas;
    	return $this;
    	

    }

    public function decreaseSpeed($brake){

    	$this->speed = $this->speed - $brake;
    	return $this;

    }

    function checkSpeed(){

    	if($this->speed==60){
    		echo "The $this->color $this->name's current speed is: $this->speed miles per hour... Please Slow Down. ".PHP_EOL;
		return $this;

		

		

		// if($this->speed==61){
  //   		echo "The $this->color $this->name's current speed is: $this->speed miles per hour... Please Slow Down. ".PHP_EOL;
		// return $this;}

		

		

    	}

    	if($this->speed<=40){
    		echo "The $this->color $this->name's current speed is: $this->speed miles per hour... You are driving too slow. Please Speed Up. ".PHP_EOL;
		return $this;}

		if($this->speed>=70){
    		echo "The $this->color $this->name's current speed is: $this->speed miles per hour... Please Slow Down. If you continue, you will be issued a ticket.".PHP_EOL;
		return $this;}




		





    	

    	 



    	




    	

    	

    	

    	
		echo "The $this->color $this->name's current speed is: $this->speed miles per hour.".PHP_EOL;
		return $this;


	}

	









}


$car1 = new Car("Silver","Bently", "Luxury");

 // $car1->checkSpeed();
 $car1->increaseSpeed(55)->checkSpeed();
 $car1->decreaseSpeed(5)->checkSpeed();
 $car1->increaseSpeed(10)->checkSpeed();
 $car1->increaseSpeed(10)->checkSpeed();
 $car1->decreaseSpeed(40)->checkSpeed();
 $car1->increaseSpeed(90)->checkSpeed();
 $car1->decreaseSpeed(55)->checkSpeed();









 ?>