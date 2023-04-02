<?php

namespace App\Repository\Strategy;

interface TransportInterface
{
	public function countTrips(): int;

	public function countDistance(): int;

	public function countTime(): int;

	public function countFuel(): int;

	public function countCost(): int;

	public function getNameTransport(): string;

	public function getSpeed(): int;

	public function getCargo(): int;

	public function getFuelConsumption(): int;
}