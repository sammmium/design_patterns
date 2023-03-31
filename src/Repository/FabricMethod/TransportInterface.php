<?php

namespace App\Repository\FabricMethod;

interface TransportInterface
{
	public function startEngine(): string;

	public function move(): string;
}