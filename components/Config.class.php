<?php
class Config
{
	protected static $settings = array();
	
	public static function getStatus($key)
	{
		return isset(self::$settings[$key]) ? self::$settings[$key] : null;
	}
	
	public static function setStatus($key, $value)
	{
		self::$settings[$key] = $value;
	}
}