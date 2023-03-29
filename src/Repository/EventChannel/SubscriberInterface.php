<?php

namespace App\Repository\EventChannel;

interface SubscriberInterface
{
	public function notify(string $data);
}
