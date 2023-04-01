<?php

namespace App\Controller;

use App\Repository\StaticFactory\Factory;

class StaticFactoryController extends MainController
{
	private $key = 'static_factory';

	private $description = 'Статическая фабрика чем-то напоминает абстрактную фабрику. Однако, абстрактная фабрика в отличии от статической фабрики работает с семействами объектов. Статическая фабрика использует один метод для создания необходимых объектов.';

	private $link = 'https://www.youtube.com/watch?v=sEh2YxAlvxo&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=10';

	public function index()
	{
		$item = [];

		$itemWater = Factory::build('board');
		$itemRoad = Factory::build();

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