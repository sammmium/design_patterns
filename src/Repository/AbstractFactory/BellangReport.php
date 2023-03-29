<?php

namespace App\Repository\AbstractFactory;

class BellangReport implements BellangInterface
{
	private $type = 'bellang';

	private $group;

	public function __construct(int $group)
	{
		$this->group = $group;
	}

	public function getReport(): array
	{
		return [
			'form' => $this->getBellangForm(),
			'analyzer' => $this->getBellangAnalyzer(),
			'templator' => $this->getBellangTemplator()
		];
	}

	public function getBellangForm(): string
	{
		$form = new Form($this->type, $this->group);
		return $form->getForm();
	}

	public function getBellangAnalyzer(): string
	{
		$analyzer = new Analyzer($this->type, $this->group);
		return $analyzer->getAnalyzer();
	}

	public function getBellangTemplator(): string
	{
		$templator = new Templator($this->type, $this->group);
		return $templator->getTemplator();
	}
}