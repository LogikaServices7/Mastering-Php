<?php 

class ChainMethods{

	public $name;

	function method1(){

		// Call this method first to change the value
		echo "Hello from Method1, Chaining like a mug!" .PHP_EOL;
		$this->name = "Chain Methods";
		return $this;

	}

	// Call this method to display the property value
	function method2(){

		echo "Hello from Method2 ($this->name)" .PHP_EOL;



	}










}


$cm = new ChainMethods();
$cm->method1()->method2(); //This is a chain and must be called in sequence.





 ?>