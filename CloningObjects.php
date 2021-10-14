<?php 

class Posts{

	public $post;

	function __construct($post){

		$this->post = $post;
	}
}

$post1 = new Posts("This is the 1st Post");
$post2 = $post1; //Copy by Reference
$post1->post = "This is Modified";
echo $post2->post. PHP_EOL;

$post2->post = "This is Modified Too!";
echo $post1->post. PHP_EOL;

$post1 = new Posts("This is the 1st Post");
$post2 = clone $post1; //Cloning takes the initial Instance
$post1->post = "This is Modified";
echo $post2->post. PHP_EOL;

$post2->post = "This is Modified Too!";
echo $post1->post. PHP_EOL;









 ?>