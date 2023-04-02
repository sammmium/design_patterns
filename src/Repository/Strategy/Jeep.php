<?php

namespace App\Repository\Strategy;

class Jeep extends Transport
{
	protected $speed = 150; // км/ч

	protected $cargo = 1; // тонн

	protected $fuelConsumption = 7; // литров на 100 км

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