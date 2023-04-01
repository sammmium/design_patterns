<?php

namespace App\Controller;

use App\Repository\SimpleFactory\Factory;

class SimpleFactoryController extends MainController
{
	private $key = 'simple_factory';

	private $description = 'Простая фабрика';

	private $link = 'https://www.youtube.com/watch?v=sEh2YxAlvxo&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=10';

	public function index()
	{
		$factory = new Factory();
		$itemWater = $factory->build('board');
		$itemRoad = $factory->build();

		$item = array_merge($itemWater, $itemRoad);

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'link' => $this->link,
			'item' => $item
		]);
	}
}