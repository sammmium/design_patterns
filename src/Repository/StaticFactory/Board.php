<?php

namespace App\Repository\StaticFactory;

class Board
{
	public function startEngine(): string
	{
		return 'Дизель-генератор заведен';
	}

	public function move(): string
	{
		return 'Плывем по морю';
	}
}