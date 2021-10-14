<?php 

class Calculator{

	static public $result;
	static function add($a,$b){
		self::$result = $a + $b;
		
	}
}

Calculator::add(1,2);
echo Calculator::$result.PHP_EOL;


 ?>