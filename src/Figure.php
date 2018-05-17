<?php

namespace App;

use App\Interfaces\InterfaceFigure;

abstract class Figure implements InterfaceFigure
{
	private $color;

	abstract public function getColor(): string;
	abstract public function setColor(string $color): void;
}