<?php
class Api_Doc_GetDocuments
{
	public static function exec()
	{
		$rows = Utils_DbRequester::get("
			SELECT t1.*, t2.*, t3.*, t4.*, t5.* FROM documents t1
			JOIN categories t2 on t1.d_category_id = t2.c_id
			JOIN users t3 on t1.d_user_id = t3.u_id
			JOIN roles t4 on t3.u_id = t4.r_id
			JOIN statuses t5 on t5.s_id = t1.d_status_id");
		
		if (!empty($rows)) 
			return $rows;
		else
			return Utils_ApiMessage::error();
	}
}
?>