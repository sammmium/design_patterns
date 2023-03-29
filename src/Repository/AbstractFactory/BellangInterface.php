<?php

namespace App\Repository\AbstractFactory;

interface BellangInterface
{
	public function getReport(): array;

	public function getBellangForm(): string;

	public function getBellangAnalyzer(): string;

	public function getBellangTemplator(): string;
}
