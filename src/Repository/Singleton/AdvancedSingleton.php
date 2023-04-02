<?php

namespace App\Repository\Singleton;

class AdvancedSingleton
{
	use SingletonTrait;

	private $data;

	public function setData(string $data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}
}