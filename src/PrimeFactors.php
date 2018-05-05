<?php namespace App;

class PrimeFactors
{

	public static function generate(int $number): array
	{
		
		$primes = [];
		$candidate = 2;

		for (; $number > 1; $candidate++)
		{

			for (; $number % $candidate == 0; $number /= $candidate)
			{
				$primes[] = $candidate;
			}
			
		}

		return $primes;
	}
}