<?php

namespace App\Repository\StaticFactory;

class Truck
{
	public function startEngine(): string
	{
		return 'Дизель заведен';
	}

	public function move(): string
	{
		return 'Едем по лесной дороге';
	}
}