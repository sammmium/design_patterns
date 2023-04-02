<?php

namespace App\Repository\Strategy;

interface TransportFactoryInterface
{
	public function getTransport(): array;
}