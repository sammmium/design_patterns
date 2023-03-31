<?php

namespace App\Repository\FabricMethod;

abstract class Transport implements TransportFactoryInterface
{
	/**
	 * Логика управления транспортом именно здесь (механика).
	 *
	 * @return array
	 */
	public function getTransport(): array
	{
		$transport = $this->createTransport();
		$result[] = $transport->startEngine();
		$result[] = $transport->move();

		return $result;
	}

	abstract public function createTransport(): TransportInterface;
}