<?php

ini_set('display_errors', 1);
error_reporting(-1);

include_once('RenatZlobin/RenatZlobinException.php');
include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('RenatZlobin/Linear.php');
include_once('RenatZlobin/Square.php');
include_once('RenatZlobin/MyLog.php');


echo "������� 3 �����. \n";
$paramens = explode(" ", fgets(STDIN));

try {
	
	$file = fopen("version", "r");
	MyLog::log("Выполняется с верисии: ".fgets($file));
	echo "Version: ".fgets($file, 4096);
	fclose($file);

	if (count($paramens) != 3) {
		throw new Exception("�� ����� �� 3 �����. ���������� �����");
	}
	$a = (float)$paramens[0];
	$b = (float)$paramens[1];
	$c = (float)$paramens[2];
	if ($paramens[0] == 0) {
		MyLog::log("Linear equation: ".$b."x + ".$c." = 0");
		$linear = new Linear();
		MyLog::log("Answer: ".$linear->llinear($b, $c));	
	}
	else {
		MyLog::log("Square equation: ".$a."x^2 + ".$b."x + ".$c." = 0");
		$square = new Square();
		if (is_array($temp = $square->solve($a, $b, $c))) {
			MyLog::log("Answer: ". implode(" , ", $temp));
		}
		else {
			MyLog::log("Answer: ".$temp);
		}
		
	}	
}
catch (Exception $e){
	MyLog::log($e->GetMessage());
	MyLog::log($e);
}

MyLog::write()."\n";

?>