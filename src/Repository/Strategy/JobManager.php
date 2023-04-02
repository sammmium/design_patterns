<?php

namespace App\Repository\Strategy;

class JobManager implements StrategyInterface
{
	/**
	 * @var StrategyInterface
	 */
	private $jobStrategy;

	private $transports;

	private $jobValue;

	public function __construct(array $transports, $jobValue)
	{
		$this->transports = $transports;
		$this->jobValue = $jobValue;
	}

	public function handle()
	{
		$calculatedJob = $this->calculateJob();
		$this->logCalculatedJob($calculatedJob);
		return $calculatedJob;
	}

	private function calculateJob(): array
	{
		$jobResult = [];

		foreach ($this->transports as $transport) {
			$transport->setJobValue($this->jobValue);
			$jobResult[] = 'Транспорт: ' . $transport->getNameTransport();
			$jobResult[] = 'Скорость: ' . $transport->getSpeed();
			$jobResult[] = 'Объем кузова: ' . $transport->getCargo();
			$jobResult[] = 'Расход топлива: ' . $transport->getFuelConsumption();
			$jobResult[] = 'Количество поездок: ' . $transport->countTrips();
			$jobResult[] = 'Пройденная дистанция: ' . $transport->countDistance();
			$jobResult[] = 'Затраченное время: ' . $transport->countTime();
			$jobResult[] = 'Использованно топлива: ' . $transport->countFuel();
			$jobResult[] = 'Стоимость использованного топлива: ' . $transport->countCost();
			$jobResult[] = ' ';
		}

		return $jobResult;
	}

	private function logCalculatedJob(array $calculatedJob): void
	{
		// можно залогировать данные
	}
}