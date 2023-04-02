<?php

namespace App\Repository\Strategy;

class Job
{
	private $value;

	public function __construct(int $value)
	{
		$this->value = $value;
	}

	public function get(): Job
	{
		return $this;
	}

	public function getValue(): int
	{
		return $this->value;
	}
}