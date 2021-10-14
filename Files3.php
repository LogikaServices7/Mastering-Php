<?php 

class Files{

	public $fileHandler;
	public $fileName;
	public $fileSize;
	public $content;
	public $fileFound;



	function __construct($fileName){
		$this->$fileHandler = null;
		$this->$fileFound = false;

		// Check if file exists
		if(file_exists($fileName) ){
			// Is this a file?
			if(is_file($fileName) ){
				$this->fileFound = true;
			}

		}

		if($this->fileFound){
			$this->fileHandler = fopen($fileName, "r");
			$this->fileSize = filesize($fileName);
		}

	}


	function getContent(){

		if($this->fileFound){

			$content = fread($this->fileHandler, $this->fileSize);
			return $content.PHP_EOL;
		}else{
			return "No Files Found!";
		}

	}


	function __destruct(){

		if($this->fileFound){

			fclose($this->fileHandler);
			echo "File is closed from the Destuctor".PHP_EOL;
		}

	}










}


$file1 = new Files("Test.txt");
echo $file1->getContent();







 ?>