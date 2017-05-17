<?php
class Api_Doc_GetDocumentStatuses
{
	public static function exec()
	{
		$rows = Utils_DbRequester::get("SELECT * FROM statuses");
		
		if (!empty($rows)) 
			return $rows;
		else
			return Utils_ApiMessage::error();
	}
}
?>