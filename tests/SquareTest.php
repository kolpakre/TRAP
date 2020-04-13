<?php
use PHPUnit\Framework\TestCase;
use renat_zlobin\Square;
use renat_zlobin\Exception;

class SquareTest extends TestCase 
{

	public function testDiscriminant()
	{
	      $my = new Square();
	      $this->assertEquals(-184, $my->discriminant(5, 6, 11));
	      $this->assertEquals(16, $my->discriminant(2, 8, 6));
	      $this->assertEquals(13, $my->discriminant(3, 5, 1));
	}
	
	public function testSolve()
	{
	      $my = new Square();
	      $this->assertSame(array(6.0,2.0), $my->solve(1, -8, 12));
	      $this->assertSame(array(3), $my->solve(1, -6, 9));
	      $this->assertSame(array(-6), $my->solve(1, 12, 36));
	}
	
	public function testFailingSolve()
        {
        	$this->expectException(Exception::class);
		$my = new Square();
	        $my->solve(5, 1, 1);
        }
}
