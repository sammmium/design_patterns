<?php

namespace App\Repository\Delegation;

use App\Repository\LoggerTrait;

class SmsMessenger extends AbstractMessenger
{
	use LoggerTrait;

	public function send(): bool
	{
//		$this->logger->warning('Send by ' . __METHOD__);

		return parent::send();
	}
}
