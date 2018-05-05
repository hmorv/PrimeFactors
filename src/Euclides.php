<?php namespace App;

use App\PrimeFactors;
use App\Helpers as H;

class Euclides
{

	/**
	* It generates an array of multiples of the number given as input
	* @param $number The number from which we want to get the multiples
	* @param $max The maximum value we want for the multiples
	* @return integer
	*/
	private function generateMultiples($number, $max): array
	{

		for ($index = 1; ($number * $index) <= $max; $index++)
		{
			$multiples[] = $number * $index;
		}

		return $multiples;
	}

	/**
	* gcd is the greatest common divisor of both a and b
	* @param integer a The integer number
	* @param integer b The integer number
	* @return integer
	*/
	public static function gcd(int $a, int $b): int
	{

		return $b == 0 ? $a : (self::gcd($b, $a % $b)); 
	}

	/**
	* lcm is the least positive number that is divisible by both a and b
	* @param integer a The integer number
	* @param integer b The integer number
	* @return integer
	*/
	public static function lcm(int $a, int $b): int
	{
		
		return $a * $b / self::gcd($a,$b);
	}
}