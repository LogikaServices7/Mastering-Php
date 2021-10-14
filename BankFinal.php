<?php 


final class Bank{

	private $password = 1234;
	private $security = 45454;
	private $vaultinfo =74849576;

	function passWord(){

		echo "$this->password".PHP_EOL;

	}

	function security(){

		echo "$this->security".PHP_EOL;

	}

	function vaultInfo(){

		echo "$this->vaultinfo".PHP_EOL;

	}



}


class User Extends Bank{

	private $accno;
	private $name;
	private $balance = 0;


	function __construct($accno,$name){
		$this->accno = $accno;
		$this->name = $name;

	}

	function depositAmount($amt){

		$this->balance = $this->balance + $amt;
		return $this;
	}

	function deductAmount($amt){

		if($this->balance <=0){
			echo "No Balance in the account.".PHP_EOL;
			return $this;
		}

		if($this->balance < $amt){

			echo "$this->name You Negro, you have Insufficient Funds.".PHP_EOL;
			return $this;
		}

		$this->balance = $this->balance - $amt;
		return $this;
	}

	function checkBalance(){

		echo "Your Balance: $this->balance".PHP_EOL;
		return $this;
	}

	function getBalance(){
		return $this->balance;
	}





}





 ?>