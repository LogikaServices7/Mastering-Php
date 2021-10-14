<?php 


abstract class Company{

	protected $name ="";

	public function setName($name){
		$this->name = $name;

	}
	public function getName(): string{
		return $this->name;

	}

	abstract function setExpert($subject);
}

class Employee extends Company{

	protected $subject;

	public function setExpert($subject){
		 return $this->subject = $subject;
	}




}


$emp = new Employee();
$emp->setName("Randy");
echo $emp->getName().PHP_EOL;
echo $emp->setExpert("PHP").PHP_EOL;

echo $emp->getName()." is a software developer and he is an expert in the field of ".$emp->setExpert("PHP").".".PHP_EOL








 ?>