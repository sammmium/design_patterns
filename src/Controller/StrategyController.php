<?php

namespace App\Controller;

use App\Repository\Strategy\Bike;
use App\Repository\Strategy\Board;
use App\Repository\Strategy\Jeep;
use App\Repository\Strategy\Job;
use App\Repository\Strategy\JobManager;
use App\Repository\Strategy\Truck;

class StrategyController extends MainController
{
	private $key = 'strategy';

	private $description = 'Стратегия - это поведенческий шаблон проектирования, который выносит набор алгоритмов в собственные классы и делает их взаимозаменяемыми.';

	private $link = 'https://www.youtube.com/watch?v=Jmz8361Qccc&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=12';

	public function index()
	{
		$transports = [
			new Truck(80, 3),
			new Jeep(80, 4),
			new Bike(80, 1),
			new Board(15, 3),
		];

		$job = new Job(1000);

		$item = (new JobManager($transports, $job->getValue()))->handle();

		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->description,
			'link' => $this->link,
			'item' => $item
		]);
	}
}