<?php
class Api_Doc_GetDocumentFile
{
	public static function exec($args)
	{
		$row = Utils_DbRequester::first("
			SELECT d_file from documents WHERE d_id = ?",
			['i', &$args['id']]);

		if (!empty($row)) 
			return base64_encode($row['d_file']);
		else
			return Utils_ApiMessage::error();
	}
}
?>