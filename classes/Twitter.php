<?php

namespace JD\SEO\Classes;

class Twitter
{
	private $twitterProperties = [];

	public function __construct(array $properties)
	{
		$defaultProperties = [
			'card' => 'summary',
			'site' => null,
			'creator' => null,
			'url' => null,
			'title' => null,
			'description' => null,
			'image' => null
		];

		$this->twitterProperties = array_merge($defaultProperties, $properties);
	}

	public function getTitle()
	{
		return $this->twitterProperties['title'];
	}

	public function getDescription()
	{
		return $this->twitterProperties['description'];
	}

	public function getImage()
	{
		return $this->twitterProperties['image'];
	}	

	public function getUrl()
	{
		return $this->twitterProperties['url'];
	}

	public function getCreator()
	{
		return $this->twitterProperties['creator'];
	}

	public function getSite()
	{
		return $this->twitterProperties['site'];
	}	

	public function getCard()
	{
		return $this->twitterProperties['card'];
	}	
}