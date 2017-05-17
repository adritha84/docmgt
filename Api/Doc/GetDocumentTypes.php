<?php
class Api_Doc_GetDocumentTypes
{
	public static function exec()
	{
		$rows = Utils_DbRequester::get("SELECT * FROM categories");
		
		if (!empty($rows)) 
			return $rows;
		else
			return Utils_ApiMessage::error();
	}
}
?>