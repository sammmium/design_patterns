<?php

namespace App\Repository\EventChannel;

use App\Repository\LoggerTrait;

class Publisher implements PublisherInterface
{
	private $topic;

	private $eventChannel;

	use LoggerTrait;

	public function __construct($topic, EventChannelInterface $eventChannel)
	{
		$this->topic = $topic;
		$this->eventChannel = $eventChannel;
	}

	public function publish(string $data)
	{
		$this->eventChannel->publish($this->topic, $data);

		$message = "{$this->topic} был опубликован с данными {$data}";
		$this->logger->warning($message);
	}
}