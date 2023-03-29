<?php

namespace App\Repository\AbstractFactory;

class Form implements FormInterface
{
	private $type;

	private $group;

	public function __construct(string $type, int $group)
	{
		$this->type = $type;
		$this->group = $group;
	}

	public function getForm(): string
	{
		return 'Подключена форма ' . ucfirst($this->type) . '_' . $this->group . '_' . 'Form для ' . $this->group . ' класса';
	}
}