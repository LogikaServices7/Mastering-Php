<?php 

class Bank{

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

			echo "$this->name, you have Insufficient Funds.".PHP_EOL;
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

$bank1 = new Bank(101,"Willie,D");


$bank1->depositAmount(500)->checkBalance();

$bank1->deductAmount(100)->checkBalance();

$bank1->deductAmount(1000)->checkBalance();



$bank2 = new Bank(102,"Solomon,Al");

$bank2->depositAmount(500)->checkBalance();
$bank2->depositAmount(1000)->checkBalance();
$bank2->depositAmount(50000)->checkBalance();
echo $bank2->depositAmount(74500)->checkBalance()->getBalance().PHP_EOL;










 ?>