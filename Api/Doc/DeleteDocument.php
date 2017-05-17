<?php
class Api_Doc_DeleteDocument
{
	public static function exec($args)
	{
		$user = Api_Auth_GetSession::exec();
		$doc = Api_Doc_GetDocument::exec($args); 

		if ($user['u_role_id'] == 2 ||
			($user['u_role_id'] == 1 && $doc['d_user_id'] == $user['u_id']))
		{
			return Utils_DbRequester::delete("
				DELETE FROM documents WHERE d_id = ?",
				["i", &$args['id']]);
		}
		
	}
}
?>