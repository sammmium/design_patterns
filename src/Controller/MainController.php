<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
	const PAGE_TITLE = 'Шаблоны проектирования';

	protected static $patterns = [
		'property_container' => 'Контейнер свойств',
		'delegation' => 'Делегирование',
		'event_channel' => 'Канал событий',
		'abstract_factory' => 'Абстрактная фабрика',
		'fabric_method' => 'Фабричный метод',
		'static_factory' => 'Статическая фабрика',
		'simple_factory' => 'Простая фабрика',
		'singleton' => 'Одиночка',
		'strategy' => 'Стратегия',
		'multitone' => 'Пул одиночек',
		'builder' => 'Строитель',
		'lazy_load' => 'Ленивая загрузка',
	];

	protected static function getMenuPatterns(): array
	{
		$result = [];

		foreach (self::$patterns as $key => $name) {
			$result[] = [
				'view' => $key . '.index.html.twig',
				'class' => self::getClassName($key),
				'path' => '/' . $key . '/index',
				'name' => $name
			];
		}

		return $result;
	}

	protected static function getClassName(string $data): string
	{
		if (!strpos($data, '_')) {
			return $data;
		}

		$result = '';
		$parts = explode('_', $data);
		foreach ($parts as $part) {
			$result .= ucfirst($part);
		}

		return $result;
	}

	protected static function getPatternName(string $key): string
	{
		return self::$patterns[$key];
	}

	protected function getDescription(): string
	{
		return $this->description;
	}
}