<?php

namespace App\Repository\StaticFactory;

class App
{
	public $transport;

	public function getTruck()
	{
		$this->transport = new Truck();

		return $this;
	}

	public function getBoard()
	{
		$this->transport = new Board();

		return $this;
	}
}