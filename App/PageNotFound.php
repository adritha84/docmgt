<?php
include_once 'Smarty/Smarty.php';

class App_PageNotFound
{
	public static function exec()
	{
		$smarty = new Smarty();
		$smarty->display('page-not-found.tpl');
	}
}
?>