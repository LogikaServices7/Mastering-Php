<?php 


trait FileOperations{

	function getFileSize($filename){
		return filesize($filename);
	}
}

class Posts{
	use FileOperations;

	function checkSize($filename){
		return $this->getFileSize($filename);
	}
}

$post1 = new Posts();
echo $post1->checkSize("Compare.php");





 ?>