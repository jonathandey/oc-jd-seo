<?php

namespace JD\SEO\Classes;

class Schema
{
	private $schemaProperties = [];

	public function __construct(array $properties)
	{
		$defaultProperties = [
			'name' => null,
			'description' => null,
			'image' => null
		];

		$this->schemaProperties = array_merge($defaultProperties, $properties);
	}

	public function getName()
	{
		return $this->schemaProperties['name'];
	}

	public function getDescription()
	{
		return $this->schemaProperties['description'];
	}

	public function getImage()
	{
		return $this->schemaProperties['image'];
	}	
}