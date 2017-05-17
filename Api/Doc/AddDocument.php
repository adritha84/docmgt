<?php
class Api_Doc_AddDocument
{
	public static function exec($args)
	{
		$file = file_get_contents($args['file']['tmp_name']);
		$date = (new DateTime)->format('Y-m-d');

		$user = Api_Auth_GetSession::exec();

		$res = Utils_DbRequester::insert("
			INSERT INTO documents (	d_id, d_title, d_file, d_category_id, d_status_id, 
			d_user_id, d_registration_date, d_message)
			VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)",

			['ssiiiss', &$args['title'],  &$file, &$args['category'], &$args['status'],
			&$user['u_id'], &$date, &$args['message'] ]);
		
		return $res;
	}
}
?>