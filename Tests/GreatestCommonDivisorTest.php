<?php 

require '../vendor/autoload.php';

use App\Euclides;
use PHPUnit\Framework\TestCase;

class GreatestCommonDivisorTest extends TestCase
{
	public function testWith1And2Returns1()
	{
		$this->assertEquals(1, Euclides::gcd(1,2));
	}
	public function testWith2And2Returns2()
	{
		$this->assertEquals(2, Euclides::gcd(2,2));
	}

	public function testWith2And4Returns2()
	{
		$this->assertEquals(2, Euclides::gcd(2,4));
	}

	public function testWith14And56Returns14()
	{
		$this->assertEquals(14, Euclides::gcd(14,56));
	}

}