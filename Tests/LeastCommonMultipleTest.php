<?php 
require '../vendor/autoload.php';

use App\Euclides;
use PHPUnit\Framework\TestCase;

class LeastCommonMultipleTest extends TestCase
{
	public function testWith1And1Returns1()
	{
		$this->assertEquals(1, Euclides::lcm(1,1));
	}
	public function testWith2And2Returns1()
	{
		$this->assertEquals(2, Euclides::lcm(2,2));
	}
	public function testWith2And6Returns6()
	{
		$this->assertEquals(6, Euclides::lcm(2,6));
	}

	public function testWith128And540Returns17280()
	{
		$this->assertEquals(17280, Euclides::lcm(128,540));
	}

	public function testWith124And741Results91884()
	{
		$this->assertEquals(91884, Euclides::lcm(124,741));
	}

	public function testWith87And78Results2262()
	{
		$this->assertEquals(2262, Euclides::lcm(87,78));
	}
}