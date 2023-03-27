<?php

namespace App\Repository\PropertyContainer;

class PropertyContainerSecond extends PropertyContainerParent
{
	private $step;

	private $sphere;

	public function getStep()
	{
		return $this->step;
	}

	public function setStep(string $step)
	{
		$this->step = $step;
	}

	public function getSphere()
	{
		return $this->sphere;
	}

	public function setSphere(string $sphere)
	{
		$this->sphere = $sphere;
	}

	public function getData()
	{
		$result = [];
		$result[] = 'Class name: ' . $this->getClassName();

		foreach ($this as $key => $value) {
			$result[] = $key . ': ' . $value;
		}

		return $result;
	}

	public function getClassName()
	{
		return self::class;
	}
}
