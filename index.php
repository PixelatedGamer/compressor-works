<?php 
class bob
{
	private $validFiles = null;
	
	private function something($files, $archiveName, $archiveIndivudallly=false) {
		
	}	
	private function validateFiles(&$files) {
		foreach($files as $files) {
			if (file_exists($file) === false) {
				print("You done gave me no files\n");
				exit;
			}
			elseif(file_exists($file) === true) {
			$this->valideFiles[] = $file;
			 }
		}
		return true;
	}
	private function validateArgCount(&$argv) {
	if (count($argv) < 4) {
		print("Not Enough Arguments\n");
		exit;
	}
	return true;		
}
	private function validateArg(&$argv) {
		if($this->validateArgCount($argv) === false || $this->validateFiles($argv[1]) === false) {
			return false;
			}
			else{;
			return true;
			}
		}		
	public function main(&$argv) {
		if($this->validateArg($argv)) {
			$this->something($argv[1], $argv[2], $argv[3]);
		}
	}
	function TFarchive($archiveIndividually === false) {
		return false;
	}
	else{
	return true;
	}

$obj = new bob();
$obj->main($argv);
?>