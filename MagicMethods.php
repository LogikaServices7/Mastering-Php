<?php 

class Users{

	private $userName;

	public function __set($name, $value){
		$this->userName = $value;
		echo "Set method invoked".PHP_EOL;
	}

	public function __get($name){
		echo "Get method invoked".PHP_EOL;
		return $this->userName;
	}

	function __construct(){
		$this->userName = "";
		echo "Construct method is called".PHP_EOL;
	}

	function __toString(){
		echo "ToString method invoked".PHP_EOL;
		return $this->userName;
	}

	function __debugInfo(){
		echo "Taken control to print the variables ".PHP_EOL;
	}

	function __destruct(){
		echo "End of class Life!".PHP_EOL;
	}

	function __call($name,$arguments){
		echo $name.PHP_EOL;
		echo $arguments.PHP_EOL;
	}
}


$user1 = new Users();
$user1->userName = "Ralph, Tresvant".PHP_EOL;
echo $user1->userName;
echo $user1->hello();
echo $user1;
var_dump($user1);






 ?>