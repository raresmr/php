<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	private $calc =null;
/**
Setup the test environement
*/
	
public function setUp()
{

$this->calc = new JomWeb\Calculator;
}


/***
* Teardown the test environement
*/

public function tearDown()
{
 $this->calc = null;
}

/**
* Test instance of $this->calc

*/

public function testInstanceOf()

{

$this->assertInstanceOf('JomWeb\Calculator', $this->calc);
}

/***
* Test provide invalid argument throw an exception

** @expectedException InvalidArgumentException
*/

public function testInvalidArgumentIsProperlyThrown()
{
 $this->calc->add('A', 2);

}

/**
*Test calculation retunr a true sum

**/

public function testValidResult()
{
	$this->assertEquals(5, $this->calc->add(2, 3));
}




}


