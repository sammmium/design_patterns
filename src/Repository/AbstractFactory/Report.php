<?php

namespace App\Repository\AbstractFactory;

class Report implements ReportInterface
{
	private $report;

	public function __construct(string $type, int $group)
	{
		switch ($type) {
			case 'math':
				$this->report = new MathReport($group);
				break;
			case 'bellang':
				$this->report = new BellangReport($group);
				break;
			default:
				throw new \Exception('Неизвестный предмет');
		}
	}

	public function getReport(): array
	{
		return $this->report->getReport();
	}
}
