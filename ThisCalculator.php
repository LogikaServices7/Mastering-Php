<?php 

class Calculator{

	public $a;
	public $b;
	public $result;

	function __construct($a,$b){


		$this->a= $a;
		$this->b = $b;
		
		
	}

	function getA(): int{
		return $this->a;
	}

	function setA($a){
		$this->a = $a;
	}

	function getB(): int{
		return $this->b;
	}

	function setB($b){
		$this->b = $b;
	}

	function getResult(): int{
		

		return $this->result; 
	}

	function setResult($result){

		$this->result = $result;
	}

	function add(){

		return $this->result = $this->b + $this->a;
		return $this;

	}

	function subtract(){

		return $this->result = $this->b - $this->a;

	}

	function multiply(){

		return $this->result = $this->b * $this->a;

	}

	function divide(){

		return $this->result = $this->b /$this->a;

	}
	

	function getResults(){


		echo "$this->a + $this->b is equal to:". $this->add().PHP_EOL;
		echo "$this->a - $this->b is equal to:". $this->subtract().PHP_EOL;
		echo "$this->a * $this->b is equal to:". $this->multiply().PHP_EOL;
		echo "$this->a / $this->b is equal to:". $this->divide().PHP_EOL;
		return $this;
	}






}


$call = new Calculator(2,5);
//$call->setA(2);
//$call->setB(5);
$call->getResults();









 ?>