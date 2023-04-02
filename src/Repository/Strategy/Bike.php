<?php

namespace App\Repository\Strategy;

class Bike extends Transport
{
	protected $speed = 30; // км/ч

	protected $cargo = 1; // тонн

	protected $fuelConsumption = 3; // литров на 100 км

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