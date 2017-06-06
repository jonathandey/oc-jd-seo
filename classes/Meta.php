<?php

namespace JD\SEO\Classes;

class Meta
{
	protected $title;

	protected $appendTitle;

	protected $description;

	protected $keywords = [];

	protected $canonicalUrl;

	public function __construct($title = null, $description = null)
	{
		$this->title = $title;

		$this->description = $description;
	}

	public function title($title = null)
	{
		if(is_null($title)) {
			return $this->title;
		}

		$this->title = $title . $this->appendTitle;

		return $this;
	}

	public function appendTitle($appendix = null)
	{
		$this->appendTitle = $appendix;

		return $this;
	}

	public function description($description = null)
	{
		if(is_null($description)) {
			return $this->description;
		}

		$this->description = $description;

		return $this;
	}

	public function keywords(array $keywords = [])
	{
		if(empty($keywords)) {
			return implode(', ', $this->keywords);
		}

		$this->keywords = $keywords;

		return $this;
	}

	public function canonicalUrl($canonicalUrl = null)
	{
		if(is_null($canonicalUrl)) {
			return $this->canonicalUrl;
		}

		$this->canonicalUrl = $canonicalUrl;

		return $this;
	}
}