<?php
class AutoLoader 
{
	public static function exec()
	{
		spl_autoload_register(array('AutoLoader', 'load'));
	}

	public static function load($class) 
	{
		$class = str_replace("_", "/", $class);
		$filename = $_SERVER["DOCUMENT_ROOT"]. "/" . $class . '.php';

		if (file_exists($filename))
        	include($filename);
	}
}