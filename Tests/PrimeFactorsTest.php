<?php require '../vendor/autoload.php';

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{

	public function testReturn2For2()
	{
		$this->assertEquals([2], PrimeFactors::generate(2));
	}

	public function testReturn3For3()
	{
		$this->assertEquals([3], PrimeFactors::generate(3));
	}

	public function testReturn5For5()
	{
		$this->assertEquals([5], PrimeFactors::generate(5));
	}

	public function testReturn2_5For10()
	{
		$this->assertEquals([2,5], PrimeFactors::generate(10));
	}

	public function testReturn3_3For9()
	{
		$this->assertEquals([3,3], PrimeFactors::generate(9));
	}
	public function testReturn2_2_5_5For100()
	{
		$this->assertEquals([2,2,5,5], PrimeFactors::generate(100));
	}
}