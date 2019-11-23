<?php
namespace renat_zlobin;

class Linear {
	private $x;
	public function llinear($a,$b){
		if ($a == 0){
			throw new Exception('Не делитьсяна 0');
		} else {
			MyLog::log("Это линейное уравнение");
			$this->x = (-$b/$a);
			return $this->x;
		}
	}
}

?>