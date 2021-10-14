<?php 

abstract class Phone{

     abstract function makeCall($number);
     abstract function sendMessage($number, $message);
}

class iOS extends Phone{

	public function makeCall($number){

		echo "Making Call to $number".PHP_EOL;

	}




     public function sendMessage($number, $message){

     	echo "Sending $message to $number.".PHP_EOL;

     }
	





}

$iPhone7 = new iOS();
$iPhone7->makeCall(94491585).PHP_EOL;
$iPhone7->sendMessage(94491585, "Hello Dalia!");





 ?>