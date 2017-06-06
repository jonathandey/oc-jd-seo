<?php

namespace JD\SEO;

use JD\SEO\Classes\Meta;

class SEO
{
	protected static $meta = null;

	public static function meta($defaultTitle = null, $defaultDescription = null)
	{
		if(is_null(self::$meta)) {
			self::$meta = new Meta($defaultTitle, $defaultDescription);
		}

		return self::$meta;
	}
}