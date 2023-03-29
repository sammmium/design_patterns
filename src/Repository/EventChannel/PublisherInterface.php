<?php

namespace App\Repository\EventChannel;

interface PublisherInterface
{
	public function publish(string $data);
}
