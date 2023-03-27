<?php

namespace App\Controller;

use App\Repository\Delegation\AppMessenger;
use App\Repository\LoggerTrait;
use Psr\Log\LoggerAwareTrait;

class DelegationController extends MainController
{
	private $key = 'delegation';

	protected $description = 'Делегирование (англ. Delegation) — основной шаблон проектирования, в котором объект внешне выражает некоторое поведение, но в реальности передаёт ответственность за выполнение этого поведения связанному объекту. Шаблон делегирования является фундаментальной абстракцией, на основе которой реализованы другие шаблоны - композиция (также называемая агрегацией), примеси (mixins) и аспекты (aspects).';

//	use LoggerTrait;
	use LoggerAwareTrait;

	public function index()
	{
		$result = ['log'];
		$this->logger->error('test message log');

		$item = new AppMessenger();
		$item->setSender('sender@mail.ru')
			->setRecipient('sam-tanik@mail.ru')
			->setMessage('hello tanik')
			->send();

//		$item->toSms()
//			->setSender('sammmium@gmail.com')
//			->setRecipient('sammmium.dev@gmail.com')
//			->setMessage('hurrah')
//			->send();

		dd($item);


		return $this->render('property_container/index.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'description' => $this->description,
			'item' => $result
		]);
	}
}
