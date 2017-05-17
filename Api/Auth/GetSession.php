<?php
session_start();

class Api_Auth_GetSession
{
	public static function exec() 
	{
		if (isset($_SESSION['auth']))
			return $_SESSION['auth'];
		else
			return Utils_ApiMessage::error();
	}
}
?>