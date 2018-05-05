<?php

require '../vendor/autoload.php';

use App\RomanNumeralsConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralsConverterTest extends TestCase
{
	public function testItCalculatesTheRomanNumeralOf1()
	{
		$this->assertEquals('I', RomanNumeralsConverter::convert(1));
	}
	public function testItCalculatesTheRomanNumeralOf4()
	{
		$this->assertEquals('IV', RomanNumeralsConverter::convert(4));
	}
	public function testItCalculatesTheRomanNumeralOf5()
	{
		$this->assertEquals('V', RomanNumeralsConverter::convert(5));
	}
	public function testItCalculatesTheRomanNumeralOf9()
	{
		$this->assertEquals('IX', RomanNumeralsConverter::convert(9));
	}
	public function testItCalculatesTheRomanNumeralOf10()
	{
		$this->assertEquals('X', RomanNumeralsConverter::convert(10));
	}
	public function testItCalculatesTheRomanNumeralOf100()
	{
		$this->assertEquals('C', RomanNumeralsConverter::convert(100));
	}
	public function testItCalculatesTheRomanNumeralOf500()
	{
		$this->assertEquals('D', RomanNumeralsConverter::convert(500));
	}
	public function testItCalculatesTheRomanNumeralOf1000()
	{
		$this->assertEquals('M', RomanNumeralsConverter::convert(1000));
	}
	public function testItCalculatesTheRomanNumeralOf3764()
	{
		$this->assertEquals('MMMDCCLXIV', RomanNumeralsConverter::convert(3764));
	}

}