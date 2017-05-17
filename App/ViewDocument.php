<?php
include_once 'Smarty/Smarty.php';

class App_ViewDocument	
{
	public static function exec($id)
	{
		$smarty = new Smarty();
		$user = Api_Auth_GetSession::exec();
		$doc = Api_Doc_GetDocument::exec($id);

		if (isset($doc['Error']))
		{
			App_PageNotFound::exec();
		}
		else 
		{
			$smarty->assign('user', $user);
			$smarty->assign('doc', $doc);
			$smarty->display('view-document.tpl');
		}
	}
}
?>