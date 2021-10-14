<?php 

// This method is the sloppy way of getting the Parent to couple with it's children.

class Course{
	public $cid;
	public $lidObj;
	public $qidObj;

	function __construct($cid, $lid, $qid){
		$this->cid = $cid;
		$this->lidObj = new Lesson($lid)
		$this->qidObj = new Quiz($qid)
	}
}

class Lesson extends Course{

	public $lid;

	function __construct($lid){
		$this->lid = $lid;
	}
	function showLessons(){
		echo "Here are the lessons".PHP_EOL;
	}
}


class Quiz extends Course{

	public $qid;

	function __construct($qid){
		$this->qid = $qid;
	}
	function showLessons(){
		echo "Here are the Quizes".PHP_EOL;
	}

}
$course = new Course(1,100,200);
//$lesson = new Lesson(100); no need already created in Parent class
$course->lidObj->showLessons();




 ?>