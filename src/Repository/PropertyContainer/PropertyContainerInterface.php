<?php

namespace App\Repository\PropertyContainer;

interface PropertyContainerInterface
{
	public function addProperty(string $key, string $value);

	public function deleteProperty(string $key);

	public function getProperty(string $key);

	public function updateProperty(string $key, string $value);

	public function hasProperty(string $key);
}
