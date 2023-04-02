<?php

namespace App\Repository\Strategy;

class Transport implements TransportInterface
{
	protected $speed = 120; // км/ч

	protected $cargo = 2; // тонн

	protected $fuelConsumption = 8; // литров на 100 км

	protected $jobValue; // объем работы

	protected $tripDistance; // дистанция до объекта

	protected $fuelCost; // цена за литр топлива

	public function setJobValue(int $jobValue)
	{
		$this->jobValue = $jobValue;
	}

	public function countTrips(): int
	{
		return ceil($this->jobValue / $this->cargo);
	}

	public function countDistance(): int
	{
		return $this->countTrips() * $this->tripDistance * 2;
	}

	public function countTime(): int
	{
		return $this->countDistance() / $this->speed;
	}

	public function countFuel(): int
	{
		return $this->countDistance() / $this->tripDistance * $this->fuelConsumption;
	}

	public function countCost(): int
	{
		return $this->countFuel() * $this->fuelCost;
	}

	public function getSpeed(): int
	{
		return $this->speed;
	}

	public function getCargo(): int
	{
		return $this->cargo;
	}

	public function getFuelConsumption(): int
	{
		return $this->fuelConsumption;
	}

	public function getNameTransport(): string
	{
		return self::class;
	}
}