<?php
use PHPUnit\Framework\TestCase;
use renat_zlobin\Linear;
use renat_zlobin\Exception;

class LinearTest extends TestCase 
{

	public function testLlinear()
	{
	      $my = new Linear();
	      $this->assertEquals(-3, $my->llinear(2, 6));
	      $this->assertEquals(-2, $my->llinear(4, 8));
	      $this->assertEquals(-2, $my->llinear(8, 16));
	}

	public function testFailingLlinear()
        {
        	$this->expectException(Exception::class);
		$my = new Linear();
	        $my->llinear(0, 16);
        }
	
}
