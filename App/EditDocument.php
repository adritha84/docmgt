<?php
include_once 'Smarty/Smarty.php';

class App_EditDocument	
{
	public static function exec($id)
	{
		$smarty = new Smarty();
		$user = Api_Auth_GetSession::exec();
		$doc = Api_Doc_GetDocument::exec($id);
		$statuses = Api_Doc_GetDocumentStatuses::exec();
		$categories = Api_Doc_GetDocumentTypes::exec();

		if (isset($doc['Error']))
		{
			App_PageNotFound::exec();
		}
		else 
		{
			$smarty->assign('user', $user);
			$smarty->assign('doc', $doc);
			$smarty->assign('statuses', $statuses);
			$smarty->assign('categories', $categories);
			$smarty->display('edit-document.tpl');
		}
	}
}
?>