<?php


class Posts
{
    public $content;

    function __construct($content){
        echo "This is Constructor!" . PHP_EOL;
        $this->content = $content;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){

    	echo $this->content.PHP_EOL;

    	return $this;

    }

}

$post1 = new Posts("I'm still learning...");
//Print and Get the $content property from the $post1 at the same time.

$content = $post1->printContent()->content;
echo $content;
