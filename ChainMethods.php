<?php 

class ChainMethods{

	function method1(){

		echo "Hello from Method1, Chaining like a mug!" .PHP_EOL;
		return $this;

	}

	function method2(){

		echo "Hello from Method2" .PHP_EOL;



	}










}


$cm = new ChainMethods();
$cm->method1()->method2();





 ?>