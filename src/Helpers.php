<?php

namespace App;

class Helpers
{
	public static function dd($item)
	{
		return die(var_dump($item));
	}
}