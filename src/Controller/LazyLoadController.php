<?php

namespace App\Controller;

use App\Repository\LazyLoad\LazyLoad;

class LazyLoadController extends MainController
{
    private $key = 'lazy_load';

	private $description = 'https://www.youtube.com/watch?v=6Np8erkjLqQ&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=15';

	private $link = 'Рассмотрим паттерн проектирования Lazy initialization он же Ленивая загрузка, Отложенная инициализация или Lazy load. Данный шаблон относится к порождающим шаблонам проектирования и направлен на грамотную работу с ресурсами системы. Суть приёма в том чтобы инициализировать объект (или какое-либо вычисление) непосредственно перед обращением к нему. Таким образом инициализация будет происходить по требованию, а не заранее.';

	public function index()
	{
		$item = [];

        $lazyLoad = new LazyLoad();
        $item[] = $lazyLoad->getUser()->name;
        $item[] = $lazyLoad->getUser()->address;
        $item[] = $lazyLoad->getUser()->age;
        $item[] = $lazyLoad->getUser();

		dd($item);


		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->getDescription(),
			'link' => $this->link,
			'item' => $item
		]);
    }
}
