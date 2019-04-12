<?php

namespace JD\SEO\Classes;

class Meta
{
	protected $title;

	protected $appendTitle;

	protected $description;

	protected $keywords = [];

	protected $og;

	protected $schema;

	protected $twitter;

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

	public function og(array $ogProperties = null)
	{
		if(is_null($ogProperties)) {
			return $this->og;
		}		

		$this->og = new OpenGraph($ogProperties);

		return $this;
	}

	public function schema(array $schemaProperties = null)
	{
		if(is_null($schemaProperties)) {
			return $this->schema;
		}		

		$this->schema = new Schema($schemaProperties);

		return $this;
	}

	public function twitter(array $twitterProperties = null)
	{
		if(is_null($twitterProperties)) {
			return $this->twitter;
		}		

		$this->twitter = new Twitter($twitterProperties);

		return $this;
	}
}