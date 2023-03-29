<?php

namespace App\Controller;

use App\Repository\EventChannel\EventChannel;
use App\Repository\EventChannel\Publisher;
use App\Repository\EventChannel\Subscriber;
use App\Repository\LoggerTrait;

class EventChannelController extends MainController
{
	private $key = 'event_channel';

	private $description = 'Канал событий (англ. event channel) — фундаментальный шаблон проектирования, благодаря которому мы можем создать гибкую систему уведомлений с подписками.';

	private $link = 'https://www.youtube.com/watch?v=xKB2OqxF_t0&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=4';

	use LoggerTrait;

	public function index()
	{
		$newsChannel = new EventChannel();
		$newsChannel->setLogger($this->logger);

		$green = new Publisher('green-food', $newsChannel);
		$green->setLogger($this->logger);
		$red = new Publisher('red-water', $newsChannel);
		$red->setLogger($this->logger);
		$blue = new Publisher('red-water', $newsChannel);
		$blue->setLogger($this->logger);

		$chui = new Subscriber('Chubacka');
		$chui->setLogger($this->logger);
		$leya = new Subscriber('Leya Skywalker');
		$leya->setLogger($this->logger);
		$luke = new Subscriber('Luke Skywalker');
		$luke->setLogger($this->logger);
		$dart = new Subscriber('Dart Wader');
		$dart->setLogger($this->logger);

		$newsChannel->subscribe('green-food', $leya);
		$newsChannel->subscribe('red-water', $leya);
		$newsChannel->subscribe('red-water', $dart);
		$newsChannel->subscribe('green-food', $luke);
		$newsChannel->subscribe('red-water', $chui);

		$green->publish('new green food from Hidden Planet');
		$red->publish('healthy red water from Star of Death');
		$blue->publish('fresh red water from Tatuine');

		$item = [];

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'link' => $this->link,
			'item' => $item
		]);
	}
}
