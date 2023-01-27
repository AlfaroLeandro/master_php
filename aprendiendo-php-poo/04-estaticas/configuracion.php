<?php

class configuracion
{
	public static $color;
	public static $newsletter;
	public static $entorno;
	
	public static function get_color()
	{
		return self::$color;
	}

	
	public static function get_newsletter()
	{
		return self::$newsletter;
	}

	public static function get_entorno()
	{
		return self::$entorno;
	}

	public static function set_color($color)
	{
		self::$color = $color;
	}

	public static function set_newsletter($newsletter)
	{
		self::$newsletter= $newsletter;
	}

	public static function set_entorno($entorno)
	{
		self::$entorno= $entorno;
	}
}
