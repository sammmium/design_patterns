<?php

namespace App\Repository;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{
	/** @var LoggerInterface */
	private $logger;

	/**
	 * @required
	 */
	public function setLogger(LoggerInterface $logger): void
	{
		$this->logger = $logger;
	}

	private function getLogger(): LoggerInterface
	{
		return $this->logger;
	}
}