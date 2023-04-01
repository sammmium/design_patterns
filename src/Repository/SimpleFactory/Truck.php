<?php

namespace App\Repository\SimpleFactory;

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