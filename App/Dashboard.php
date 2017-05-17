<?php
include_once 'Smarty/Smarty.php';

class App_Dashboard
{
	public static function exec()
	{
		$smarty = new Smarty();
		$user = Api_Auth_GetSession::exec();
		$docs = Api_Doc_GetDocuments::exec();

		$smarty->assign('user', $user);
		$smarty->assign('docs', $docs);
		$smarty->display('dashboard.tpl');
	}
}
?>