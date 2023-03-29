<?php

namespace App\Repository\EventChannel;

use Psr\Log\LoggerInterface;

class Subscriber implements SubscriberInterface
{
	private $name;

	private $logger;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function setLogger(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	public function notify(string $data)
	{
		$message = "{$this->getName()} оповещен данными {$data}";
		$this->logger->warning($message);
	}

	public function getName()
	{
		return $this->name;
	}
}