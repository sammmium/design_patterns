<?php

namespace App\Repository\AbstractFactory;

class MathReport implements MathInterface
{
	private $group;

	private $type = 'math';

	public function __construct(int $group)
	{
		$this->group = $group;
	}

	public function getReport(): array
	{
		return [
			'form' => $this->getMathForm(),
			'analyzer' => $this->getMathAnalyzer(),
			'templator' => $this->getMathTemplator()
		];
	}

	public function getMathForm(): string
	{
		$form = new Form($this->type, $this->group);
		return $form->getForm();
	}

	public function getMathAnalyzer(): string
	{
		$analyzer = new Analyzer($this->type, $this->group);
		return $analyzer->getAnalyzer();
	}

	public function getMathTemplator(): string
	{
		$templator = new Templator($this->type, $this->group);
		return $templator->getTemplator();
	}
}