<?php

namespace App\Repository\Strategy;

class Board extends Transport
{
	protected $speed = 10; // км/ч

	protected $cargo = 100; // тонн

	protected $fuelConsumption = 10; // литров на 100 км

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