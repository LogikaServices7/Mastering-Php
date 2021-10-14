<?php 

class Files{

	static public $fileHandler;
	static public $fileName;
	static public $fileSize;
	static public $content;
	static public $fileFound;



	 function __construct($fileName){
		$fileHandler = null;
		$fileFound = false;

		// Check if file exists
		if(file_exists($fileName) ){
			// Is this a file?
			if(is_file($fileName) ){
				$fileFound = true;
			}

		}

		if($fileFound){
			$fileHandler = fopen($fileName, "r");
			$fileSize = filesize($fileName);
		}

	}


	static function getContent(){

		if($fileFound){

			self::$content = fread($fileHandler, $fileSize);
			return $content.PHP_EOL;
		}else{
			return "No Files Found!";
		}

	}


	 function __destruct(){

		if($fileFound){

			fclose($fileHandler);
			echo "File is closed from the Destuctor".PHP_EOL;
		}

	}










}



echo Files::getContent("Test.txt");
echo Files::$content.PHP_EOL;







 ?>