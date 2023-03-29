<?php

namespace App\Controller;

use App\Repository\PropertyContainer\PropertyContainerSecond;
use App\Repository\PropertyContainer\ProreptyContainer;

class PropertyContainerController extends MainController
{
	private $key = 'property_container';

	private $description = 'Фундаментальный шаблон проектирования';

	private $link = '';

	public function index()
	{
		$item = new ProreptyContainer();
		$item->setTitle('Тест контейнера');
		$item->setType('Обычный тест');

		$item->addProperty('name', 'Расширение');
		$old = $item->getProperty('name');
		$new = $old . ' сферы влияния';
		$item->updateProperty('name', $new);

		$result = $item->getData();

		$itemSecond = new PropertyContainerSecond();
		$itemSecond->setStep('zwei');
		$itemSecond->setSphere('gesundheit');

		$itemSecond->addProperty('group', 'doppel');
		$itemSecond->addProperty('group_zwei', 'doppel herz');
		$itemSecond->deleteProperty('group_zwei');

		$itemSecond->updateProperty('group', 'Tumba Yumba');

		$result = array_merge($result, $itemSecond->getData());

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->getDescription(),
			'link' => $this->link,
			'item' => $result
		]);
	}
}
