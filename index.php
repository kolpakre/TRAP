<?php
class A {}

class B extends A {
	public $a;
	public function __construct ($a) {
		$this->a = $a;
	}
}

class C extends B {
	public $b;
	public function __construct ($a, $b, $c) {
		$this->b = $b;
		$this->c = $c;
		parent::__construct($a)
	}
}

$test1 = new A();
$test2 = new A();
$test3 = new A();
$test4 = new B($test2);
$test5 = new C($test1, $test4, $test3);

//var_dump($test5);
?>