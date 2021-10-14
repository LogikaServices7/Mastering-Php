<?php 

class Posts{

	public $post;
	public $hasPosts = true;

	function __construct($post){

		$this->post = $post;
	}

	function hello(){
		echo "Hello";
	}

	
}

$post1 = new Posts("This is the First Posts");

foreach($post1 as $key => $value){

	echo $key . ' => ' .$value.PHP_EOL;

}


echo PHP_EOL;

var_dump($post1);