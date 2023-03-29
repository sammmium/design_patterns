<?php

namespace App\Repository\AbstractFactory;

interface MathInterface
{
	public function getReport(): array;

	public function getMathForm(): string;

	public function getMathAnalyzer(): string;

	public function getMathTemplator(): string;
}
