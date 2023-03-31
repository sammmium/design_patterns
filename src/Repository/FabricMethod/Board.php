<?php

namespace App\Repository\FabricMethod;

class Board implements TransportInterface
{
	public function startEngine(): string
	{
		return 'Заводим дизель-генератор';
	}

	public function move(): string
	{
		return 'Поплыли по морю';
	}
}