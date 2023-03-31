<?php

namespace App\Repository\FabricMethod;

interface TransportFactoryInterface
{
	public function getTransport(): array;
}