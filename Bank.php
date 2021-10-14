<?php 

class Bank{

	public $accno;
	public $name;
	public $balance = 0;

	function depositAmount($amt){

		$this->balance = $this->balance + $amt;
	}

	function deductAmount($amt){

		if($this->balance <=0){
			echo "No Balance in the account.".PHP_EOL;
			return;
		}

		if($this->balance < $amt){

			echo "$this->name You Negro, you have Insufficient Funds.".PHP_EOL;
			return;
		}

		$this->balance = $this->balance - $amt;
	}

	function checkBalance(){

		echo "Your Balance: $this->balance".PHP_EOL;
	}




}

$bank1 = new Bank();
$bank1->accno = 101;
$bank1->name = "Willie, D";
$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkBalance();
$bank1->deductAmount(100);
$bank1->checkBalance();
$bank1->deductAmount(1000);
$bank1->checkBalance();

$bank2 = new Bank();
$bank2->accno = 102;
$bank2->name = "Solomon,Dalia C";
$bank2->checkBalance();
echo " Dalia After learning to code...";
$bank2->depositAmount(500);
$bank2->checkBalance();
$bank2->depositAmount(1000);
$bank2->checkBalance();
$bank2->depositAmount(2000);
$bank2->checkBalance();
$bank2->depositAmount(20000);
$bank2->checkBalance();
echo "And counting.... Muah!!!!!".PHP_EOL;






 ?>