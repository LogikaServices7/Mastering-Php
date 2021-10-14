<?php 

// This method is the correct way of getting the Parent to couple with it's children.

class Course{
	public $cid;
	

	function __construct($cid){
		$this->cid = $cid;
		
	}
}

class Lesson extends Course{

	public $lid;

	function __construct($lid, Course $c){
		$this->lid = $lid;
		$this->cid = $c->cid;
	}
	function showLessons(){
		echo "Here are the lessons".PHP_EOL;
	}
}


class Quiz extends Course{

	public $qid;

	function __construct($qid, Course $c){
		$this->qid = $qid;
		$this->cid = $c->cid;
	}
	function showLessons(){
		echo "Here are the Quizes".PHP_EOL;
	}

}
$course = new Course(1);
$lesson = new Lesson(100, $course);
$quiz = new Quiz(200, $course);




 ?>