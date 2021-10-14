<?php 

class Posts{

	public $post;

	function __construct($post){

		$this->post = $post;
	}

	
}

//Identity Operator === Checks Identity *Strict (&$obj1 is a REFERENCE of an object)
	function compare1(&$obj1, &$obj2){

		if($obj1 === $obj2){
			return true;
		}else{
			return false;
		}


	}
	//Comparison Operator == Checks VALUE
	function compare2(&$obj1, &$obj2){

		if($obj1 == $obj2){
			return true;
		}else{
			return false;
		}


	}

$post1 = new Posts("This is the First Post");
$post2 = new Posts("This is the First Post");

echo compare1($post1, $post2) ? "SAME" : "DIFFERENT".PHP_EOL;

$post3 = $post1;//This is a perfect clone so they share the same identity
echo compare1($post1, $post3) ? "SAME" : "DIFFERENT";
echo PHP_EOL;
$post4 = clone $post1; //Even though it cloned $post1, post4 has a different identity ($post4) than $post1
echo compare1($post1, $post4) ? "SAME" : "DIFFERENT";
echo "-----------------".PHP_EOL;

echo compare2($post1, $post2) ? "SAME" : "DIFFERENT";
echo PHP_EOL;











 ?>