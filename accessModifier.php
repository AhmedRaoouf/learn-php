<?php

/* 
Access Modifier
	1 - public 
	2 - protected
	3 - private

	access in
	1 - the same class
	2 - derived class
	3 - outside class
*/

##################################################
## public 
/* class myParent{
	// the same class
	public $name = "Ahmed";
}

class Child extends myParent{
	// the derived class
	public function test()
	{		
		echo $this->name;
	}
}

$test1 = new Child;
// outside class
$test1 -> name = "mohamed";
$test1 -> test(); */

##################################################
## protected 

class myParent{
	// the same class
	protected $name = "Ahmed";
}

class Child extends myParent{
	// the derived class
	public function test()
	{		
		echo $this->name;
	}
}

$test2 = new Child;
// outside class
// protected can not be modified
// $test2 -> name = "mohamed";
$test2 -> test();

##################################################
## private

/* class myParent{
	// the same class
	// private can't be inherit
	private $name = "Ahmed";
}

class Child extends myParent{
	// the derived class
	public function test()
	{		
		echo $this->name;
	}
}

$test2 = new Child;
// outside class
$test2 -> name = "mohamed";
$test2 -> test(); */