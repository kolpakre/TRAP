<?php

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

class Square extends Linear {
	private $discr;

	protected function discriminant($a,$b,$c){
		return (($b*$b) - (4 * $a * $c));
	}

	public function solve($a,$b,$c)
	{
		if($a === 0)
        {
			return array($this->linear($b,$c));
		}
		else
		{
			$discr = $this->discriminant($a,$b,$c);
			if ($discr < 0)
			{
				$this->x = false;
				throw new Exception('Discriminant < 0');
			}
			elseif ($discr > 0)
			{
				MyLog::log("Это квадратное уравнение");
				$t1=((-$b + sqrt($discr)) / (2 * $a));
				$t2=((-$b - sqrt($discr)) / (2 * $a));
				return $this->x= array($t1,$t2);
			}
		
			else
			{
				return $this->x = array((-$b/2*$a));
			}
		}		
	}
}
?>