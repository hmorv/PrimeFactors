<?php

namespace App;

use App\Figure;

class Circle extends Figure
{
	private $color;
	private $radius;

	public function __construct(string $color, int $radius)
	{
		$this->color = $color;
		$this->radius = $radius;
	}

	public function getRadius(): float
	{
		return $this->radius;
	}

	public function getArea(): float
	{
		return $this->radius * $this->radius * M_PI;
	}

	public function getColor(): string
	{
		return $this->color;
	}

	public function setRadius(float $radius): void
	{
		$this->radius = $radius;
	}

	public function setArea(float $area): void
	{
		$this->area = $area;
	}

	public function setColor(string $color): void
	{
		$this->color = $color;
	}

	public function toString($value): string
	{
		return (string)$value;
	}

}