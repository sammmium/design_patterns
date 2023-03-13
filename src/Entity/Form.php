<?php

namespace App\Entity;

class Form
{
	private $name;

	private $tax;

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): void
	{
		$this->name = $name;
	}

	public function getTax(): string
	{
		return $this->tax;
	}

	public function setTax(string $tax): void
	{
		$this->tax = $tax;
	}
}
