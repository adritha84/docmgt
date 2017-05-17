<?php
class Api_Doc_GetDocument
{
	public static function exec($args)
	{
		$row = Utils_DbRequester::first("
			SELECT t1.*, t2.*, t3.*, t4.*, t5.* FROM documents t1
			JOIN categories t2 on t1.d_category_id = t2.c_id
			JOIN users t3 on t1.d_user_id = t3.u_id
			JOIN roles t4 on t3.u_id = t4.r_id
			JOIN statuses t5 on t5.s_id = t1.d_status_id
			WHERE t1.d_id = ?",
			['i', &$args['id']]);

		if (!empty($row)) 
			return $row;
		else
			return Utils_ApiMessage::error();
	}
}
?>