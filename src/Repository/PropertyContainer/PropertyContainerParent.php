<?php

namespace App\Repository\PropertyContainer;

class PropertyContainerParent implements PropertyContainerInterface
{
	public function addProperty(string $key, string $value)
	{
		$this->{$key} = $value;
	}

	public function deleteProperty(string $key)
	{
		if ($this->hasProperty($key)) {
			unset($this->{$key});
		}
	}

	public function getProperty(string $key)
	{
		return $this->{$key};
	}

	public function updateProperty(string $key, string $value)
	{
		if ($this->hasProperty($key)) {
			$this->{$key} = $value;
		}
	}

	public function hasProperty(string $key)
	{
		return !empty($this->{$key});
	}
}