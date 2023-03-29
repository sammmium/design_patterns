<?php

namespace App\Repository\EventChannel;

use Psr\Log\LoggerInterface;

class EventChannel implements EventChannelInterface
{
	private $topics = [];

	private $logger;

	public function setLogger(LoggerInterface $logger)
	{
		$this->logger = $logger;
	}

	public function publish(string $topic, string $data)
	{
		if (empty($this->topics[$topic])) {
			return;
		}

		foreach ($this->topics[$topic] as $subscriber) {
			$subscriber->notify($data);
		}
	}

	public function subscribe(string $topic, SubscriberInterface $subscriber)
	{
		$this->topics[$topic][] = $subscriber;

		$message = "{$subscriber->getName()} подписан на {$topic}";
		$this->logger->warning($message);
	}


}