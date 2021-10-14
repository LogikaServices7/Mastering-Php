<?php 

class Database{

public $db = "Oracle";
public $dbname = "Students";
public $tablename = "tbl_users";


function hello(){
	return "hello".PHP_EOL;
}

function __debugInfo(){
	echo "Take the control to print the variables".PHP_EOL;
}


function __toString(){
	return "Print Properties".PHP_EOL;
}

}

$db = new Database();
//echo $db;// toString function takes control
var_dump($db);//debug function takes control





 ?>