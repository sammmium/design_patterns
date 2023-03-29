<?php

namespace App\Controller;

use App\Repository\AbstractFactory\Report;

class AbstractFactoryController extends MainController
{
	private $key = 'abstract_factory';

	protected $description = 'Порождающие шаблоны проектирования - Абстрактная фабрика (Abstract factory). Изучаем шаблон (паттерн) проектирования из семейства фабрик. 
Абстрактная фабрика — это порождающий паттерн проектирования, который позволяет создавать семейства связанных объектов, не привязываясь к конкретным классам создаваемых объектов.';

	protected $link = 'https://www.youtube.com/watch?v=8QylIGRYU7k&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=7';

	public function index()
	{
//		$report = new Report('math', 2); // работает
//		$report = new Report('ruslang', 3); // выбрасывает исключение
		$report = new Report('bellang', 4); // работает
		$result = $report->getReport();

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->getDescription(),
			'link' => $this->link,
			'item' => $result
		]);
	}
}
