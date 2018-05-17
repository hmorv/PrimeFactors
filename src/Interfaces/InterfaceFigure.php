<?php

namespace App\Interfaces;
interface InterfaceFigure
{
	//private $color;
	public function getColor(): string;
	public function setColor(string $color): void;
}