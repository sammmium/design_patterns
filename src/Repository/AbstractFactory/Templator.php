<?php

namespace App\Repository\AbstractFactory;

class Templator implements TemplatorInterface
{
	private $type;

	private $group;

	public function __construct(string $type, int $group)
	{
		$this->type = $type;
		$this->group = $group;
	}
	public function getTemplator(): string
	{
		return 'Использован шаблон ' . ucfirst($this->type) . '_' . $this->group . '_' . 'Templator для ' . $this->group . ' класса';
	}
}