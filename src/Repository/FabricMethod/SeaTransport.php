<?php

namespace App\Repository\FabricMethod;

class SeaTransport extends Transport
{
	public function createTransport(): TransportInterface
	{
		return new Board();
	}
}