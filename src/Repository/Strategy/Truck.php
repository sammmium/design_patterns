<?php

namespace App\Repository\Strategy;

class Truck extends Transport
{
	protected $speed = 90; // км/ч

	protected $cargo = 10; // тонн

	protected $fuelConsumption = 8; // литров на 100 км

	public function __construct(int $tripDistance, int $fuelCost)
	{
		$this->tripDistance = $tripDistance;
		$this->fuelCost = $fuelCost;
	}

	public function getNameTransport(): string
	{
		return self::class;
	}
}