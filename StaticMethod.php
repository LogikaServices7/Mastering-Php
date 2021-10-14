<?php 

class Calculator{

	static public $result;
	static function add($a,$b): int{
		$result = $a + $b;
		return $result;
	}
}

Calculator::$result = Calculator::add(1,2);
echo Calculator::$result.PHP_EOL;
echo Calculator::add(2,4).PHP_EOL;

 ?>