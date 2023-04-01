<?php

namespace App\Repository\SimpleFactory;

class Factory
{
	public function build(string $type = 'truck')
	{
		switch ($type) {
			case 'truck':
				$transport = new Truck();
				break;
			case 'board':
				$transport = new Board();
				break;
			default:
				throw new \Exception("Такого транспорта не бывает {$type}");

		}

		$result[] = $transport->startEngine();
		$result[] = $transport->move();

		return $result;
	}
}