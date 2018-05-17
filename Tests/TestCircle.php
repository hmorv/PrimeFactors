<?php

require '../vendor/autoload.php';

use App\Circle;
use PHPUnit\Framework\TestCase;

class TestCircle extends TestCase
{
	public function testCircleInstantiation()
	{
		$c = new Circle('red', 1.0);
		$this->assertEquals('red', $c->getColor());
		$this->assertEquals(1.0, $c->getRadius());
	}
	public function testCalculateArea()
	{
		$c = new Circle('red', 1.0);

		$this->assertEquals(M_PI * 1, $c->getArea());
	}
}