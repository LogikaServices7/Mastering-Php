<?php 

declare(strict_types=1);

//Type Hinting promotes Good Practice
//You can control the type hinting with strict_type
//Make sure your team follows a standard input and outputs.

class Posts{


	private $post = "";

	public function getPost() : string{
		return $this->post;
	}

	public function setPost(string $post): void{
		$this->post = $post;
	}

	public function savePost() : bool{
		$flag = false;
		echo "Saving Posts in Database".PHP_EOL;
		$flag = true;
		return $flag;
	}

	public function fetchPost(int $id): array{
		$posts =[];
		echo "Retrieve all the posts".PHP_EOL;
		$posts = [1, "this is a Post",
				  2, "Type Hinting is good practice"];
		return $posts;		  
	}
}







 ?>