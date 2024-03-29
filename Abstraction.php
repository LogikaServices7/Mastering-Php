<?php 

abstract class Shape{

	protected $color = '';
	abstract function calculateArea();
	public function getColor(){
		return $this->color;
	}
}


class Rectangle extends Shape{

	public $length;
	public $breath;
	function __construct($color,$length,$breath){
		$this->color = $color;
		$this->length = $length;
		$this->breath = $breath;

	}

	function calculateArea(){
		return $this->length * $this->breath;

	}

}

class Circle extends Shape{

	public $radius;

	function __construct($color,$radius){
		$this->color = $color;
		$this->radius = $radius;
		

	}

	function calculateArea(){
		return $this->radius * 3.14;

	}

	}
	
$rec = new Rectangle("Red",10,20);
echo $rec->calculateArea().PHP_EOL;
echo $rec->getColor().PHP_EOL;

$circ = new Circle("Blue",10);
echo $circ->calculateArea().PHP_EOL;
echo $circ->getColor().PHP_EOL;



 ?>