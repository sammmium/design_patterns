<?php

namespace App\Repository\AbstractFactory;

class Analyzer implements AnalyzerInterface
{
	private $type;

	private $group;

	public function __construct(string $type, int $group)
	{
		$this->type = $type;
		$this->group = $group;
	}
	public function getAnalyzer(): string
	{
		return 'Подключен анализатор ' . ucfirst($this->type) . '_' . $this->group . '_' . 'Analyzer для ' . $this->group . ' класса';
	}
}