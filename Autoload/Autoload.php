<?php 



spl_autoload_register(function($classname){
	echo "loading the class : $classname".PHP_EOL;
	require_once("$classname.php"); //The php filename MUST MATCH NAME OF CLASS
});


$file1 = new Library\AutoFile();
$file1->hello();

$db = new Library\AutoData();
$db->hello();



 ?>