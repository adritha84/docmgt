<?php
session_start();

class Api_Auth_CreateSession 
{
	public static function exec($args)
	{

		if (isset($args['username']) && isset($args['password']))
		{
			$row = Utils_DbRequester::first("
				SELECT t1.*, t2.* FROM users t1
				JOIN roles t2 on t1.u_role_id = t2.r_id
				WHERE t1.u_username = ? and t1.u_password = ?",
				['ss', &$args['username'], &$args['password']]);

			if (!empty($row))
			{
				$_SESSION['auth'] = $row;
				return Utils_ApiMessage::success();
			} 
			else 
			{
				return Utils_ApiMessage::error();
			}
		}
	}
}
?>