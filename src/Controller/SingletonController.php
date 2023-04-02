<?php

namespace App\Controller;

use App\Repository\Singleton\AdvancedSingleton;

class SingletonController extends MainController
{
	private $key = 'singleton';

	private $description = 'Порождающий паттерн (шаблон) проектирования - Одиночка (Singleton).
Рассмотрим три варианта реализации шаблона singleton.
.
Преимущества:
+ Гарантирует наличие единственного экземпляра класса.
+ Предоставляет к нему глобальную точку доступа.
+ Реализует отложенную инициализацию объекта-одиночки.
.
Недостатки:
 - Нарушает принцип единственной ответственности класса (см SOLID).
 - Проблемы мультипоточности.
 - Требует создания Mock-объектов во время тестировании.
 - Сложно отследить зависимости классов.';

	private $link = 'https://www.youtube.com/watch?v=dMkWWuynGwM&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=11';

	public function index()
	{
		$item = [];

		$as1 = AdvancedSingleton::getInstance();
		$item['as1'] = $as1::getClassName();
		$as1->setData('test data');
		$item['as1data'] = $as1->getData();

		$as2 = AdvancedSingleton::getInstance();
		$item['as2'] = $as2::getClassName();

		$item['compare'] = $as1 === $as2;

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'link' => $this->link,
			'item' => $item
		]);
	}
}