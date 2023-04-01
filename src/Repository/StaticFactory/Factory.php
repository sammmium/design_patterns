<?php

namespace App\Repository\StaticFactory;

use PHPUnit\Util\Exception;

class Factory
{
	public static function build(string $type = 'truck')
	{
		$result = [];

		$app = new App();

		switch ($type) {
			case 'truck':
				$app->getTruck();
				break;
			case 'board':
				$app->getBoard();
				break;
			default:
				throw new Exception("Такого транспорта не бывает) {$type}");
		}

		/*
		 * Логика приложения (механика) прячется здесь.
		 */
		$result[] = $app->transport->startEngine();
		$result[] = $app->transport->move();

		return $result;
	}
}