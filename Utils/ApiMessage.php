<?php
class Utils_ApiMessage
{
	public function success($msg = null) 
	{
		$json = array();
		if (empty($msg))
			$json['Success'] = "The requested operation completed successfully.";
		else 
			$json['Success'] = $msg;
		return $json;
	}

	public function error($msg = null)
	{
		$json = array();
		if (empty($msg))
			$json['Error'] = "The requested operation failed.";
		else 
			$json['Error'] = $msg;
		return $json;
	}
}

?>