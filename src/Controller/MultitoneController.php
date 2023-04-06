<?php

namespace App\Controller;

use App\Repository\Multitone\Multitone;

class MultitoneController extends MainController
{
    private $key = 'multitone';

    private $description = 'Пул одиночек, он же Мультитон (multiton) — порождающий шаблон проектирования, Одиночка (singleton) на максималках. Мультитон позволяет создавать несколько экземпляров, которые управляются через ассоциативный массив.';

    private $link = 'https://www.youtube.com/watch?v=KFYo4aUb8ec&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=13';

    public function index()
    {
        $item = [];

        $item[] = Multitone::getInstance('mysql')->setTest('test data');
        $item[] = Multitone::getInstance('mongo');

        $item[] = Multitone::getInstance('kvant');
        $item[] = Multitone::getInstance('redis')->setTest('test redis');
        $item[] = Multitone::getInstance('redis')->setTest('test redis 2');

        dd($item);exit;

        return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->getDescription(),
			'link' => $this->link,
			'item' => $item
		]);
    }
}
