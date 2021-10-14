<?php 


interface Database{
	function openConnection();
}

class OracleDatabase implements Database{
	function openConnection(){
		echo "Using Oracle to connect to Database".PHP_EOL;

	}
}

class MySQLDatabase implements Database{
	function openConnection(){
		echo "Using MySQL to connect to Database".PHP_EOL;

	}
}



 ?>