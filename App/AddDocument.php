<?php
include_once 'Smarty/Smarty.php';

class App_AddDocument	
{
	public static function exec()
	{
		$smarty = new Smarty();
		$user = Api_Auth_GetSession::exec();
		$statuses = Api_Doc_GetDocumentStatuses::exec();
		$categories = Api_Doc_GetDocumentTypes::exec();

		$smarty->assign('user', $user);
		$smarty->assign('statuses', $statuses);
		$smarty->assign('categories', $categories);
		$smarty->display('add-document.tpl');

	}
}
?>