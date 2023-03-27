<?php

namespace App\Controller;

use App\Repository\LoggerTrait;
use Psr\Log\LoggerInterface;

class DefaultController extends MainController
{
	use LoggerTrait;

	public function index()
	{
		$this->logger->debug('test info message');

		return $this->render('index.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'patterns' => self::getMenuPatterns()
		]);
	}
}
