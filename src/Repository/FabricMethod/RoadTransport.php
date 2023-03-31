<?php

namespace App\Repository\FabricMethod;

class RoadTransport extends Transport
{
	public function createTransport(): TransportInterface
	{
		return new Truck();
	}
}