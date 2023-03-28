<?php

namespace App\Controller;

class EventChannelController extends MainController
{
	private $key = 'event_channel';

	protected $description = 'Канал событий (англ. event channel) — фундаментальный шаблон проектирования, благодаря которому мы можем создать гибкую систему уведомлений с подписками';

	public function index()
	{
		$item = '';

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'item' => $item
		]);
	}
}
