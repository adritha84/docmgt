<?php
class Api_Doc_UpdateDocument
{
	public static function exec($args)
	{
		$res = Utils_DbRequester::update("
			UPDATE documents
			SET d_status_id=?, d_category_id=?, 
				d_registration_date=?, d_message =?
			WHERE d_id = ?",
			['iissi', &$args['status'], &$args['category'], 
			&$args['date'], &$args['message'], &$args['id'] ]);
		
		return $res;
	}
}
?>