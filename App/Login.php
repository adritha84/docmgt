<?php
include_once 'Smarty/Smarty.php';

class App_Login 
{
	public static function exec()
	{
		$smarty = new Smarty();
		$smarty->display('login.tpl');
	}
}
?>