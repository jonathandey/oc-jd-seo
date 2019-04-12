<?php

namespace JD\SEO\Classes;

class OpenGraph
{
	private $ogProperties = [];

	public function __construct(array $properties)
	{
		$defaultProperties = [
			'fb_app_id' => null,
			'url' => null,
			'type' => 'website',
			'title' => null,
			'image' => null,
			'description' => null,
			'site_name' => null,
			'locale' => 'en_GB',
			'article_author' => null,
		];

		$this->ogProperties = array_merge($defaultProperties, $properties);
	}

	public function getTitle()
	{
		return $this->ogProperties['title'];
	}

	public function getType()
	{
		return $this->ogProperties['type'];
	}	

	public function getUrl()
	{
		return $this->ogProperties['url'];
	}

	public function getImage()
	{
		return $this->ogProperties['image'];
	}

	public function getDescription()
	{
		return $this->ogProperties['description'];
	}

	public function getSiteName()
	{
		return $this->ogProperties['site_name'];
	}

	public function getFbAppId()
	{
		return $this->ogProperties['fb_app_id'];
	}

	public function getLocale()
	{
		return $this->ogProperties['locale'];
	}

	public function getArticleAuthor()
	{
		return $this->ogProperties['article_author'];
	}
}