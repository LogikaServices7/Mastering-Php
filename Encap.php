<?php 
//Data Encapsulation Concept or design pattern is followed
class Post{

	//Properties are hidden/private
	private $post = "";


	public function setPost($post){
		$this->post = $post;

	}
	public function getPost(): string{
		return $this->post;

	}
}

$post1 = new Post();
$post1->setPost("A dollar a peice? Per Daffoldil?");
echo $post1->getPost().PHP_EOL;




 ?>