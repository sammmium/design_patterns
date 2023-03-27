<?php

namespace App\Repository\PropertyContainer;

class ProreptyContainer extends PropertyContainerParent
{
	private $title;

	private $type;

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle(string $title)
	{
		$this->title = $title;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType(string $type)
	{
		$this->type = $type;
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