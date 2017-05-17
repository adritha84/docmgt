<?php
include_once 'Smarty/Smarty.php';

class App_DocumentFile	
{
	public static function exec($id)
	{
		$file = Api_Doc_GetDocumentFile::exec($id);
		echo "<object data='data:application/pdf;base64, $file' type='application/pdf' style='height:100%;width:100%; background: #fff'></object>";
	}
}


