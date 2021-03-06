<?php

namespace App;

class RomanNumeralsConverter
{
	protected static $lookup = [
		1000	=> 'M',
		900		=> 'CM',
		500		=> 'D',
		400		=> 'CD',
		100 	=> 'C',
		90 		=> 'XC',
		50 		=> 'L',
		40 		=> 'XL',
		10 		=> 'X',
		9 		=> 'IX',
		5 		=> 'V',
		4 		=> 'IV',
		1 		=> 'I'

	];

	public static function convert(int $number)
	{
		static::guardAgainstInvalidNumber($number);

		$solution = '';

		foreach(static::$lookup as $limit => $glyph)
		{
			while ($number >= $limit)
			{
				$solution .= $glyph;
				$number -= $limit;
			}
		}

		return $solution;
	}

	private function guardAgainstInvalidNumber(int $number)
	{
		if ($number <= 0)
		{
			throw new \InvalidArgumentException;
		}
	}
}