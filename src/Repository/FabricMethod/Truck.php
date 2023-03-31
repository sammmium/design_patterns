<?php

namespace App\Repository\FabricMethod;

class Truck implements TransportInterface
{
	public function startEngine(): string
	{
		return 'Заведен дизельный мотор';
	}

	public function move(): string
	{
		return 'Поехали по дороге';
	}
}