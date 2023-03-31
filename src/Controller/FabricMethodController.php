<?php

namespace App\Controller;

use App\Repository\FabricMethod\RoadTransport;
use App\Repository\FabricMethod\SeaTransport;

class FabricMethodController extends MainController
{
	private $key = 'fabric_method';

	private $description = 'Паттерн проектирования Фабричный метод (Factory Method, Виртуальный конструктор) - это способ делегирования логики создания объектов (instantiation logic) дочерним классам.';

	private $link = 'https://www.youtube.com/watch?v=8SPTu2uhF9s&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=9';

	public function index()
	{
//		$transport = new RoadTransport();
		$transport = new SeaTransport();
		$item = $transport->getTransport();

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'link' => $this->link,
			'item' => $item
		]);
	}
}
