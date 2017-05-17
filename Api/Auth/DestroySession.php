<?php
session_start();

class Api_Auth_DestroySession
{
	public static function exec()
	{
		unset($_SESSION['auth']);

		if (isset($_SESSION['auth']))
			return Utils_ApiMessage::error();
		else
			return Utils_ApiMessage::success();
	}
}
?>