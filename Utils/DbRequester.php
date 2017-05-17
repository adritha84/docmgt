<?php
class Utils_DbRequester
{
	public static $server = "localhost";
	public static $user = "root";
	public static $pass = "";
	public static $db = "app";

	#private
	private function _get($query, $args = null)
	{
		$conn = new mysqli(self::$server, self::$user, self::$pass, self::$db);
		$rows = array();

		if (!isset($args)) {
			$res = $conn->query($query);
			while ($row = $res->fetch_assoc()) 
  				$rows[] = $row;
		}
		else if ($stmt = $conn->prepare($query)) {
			call_user_func_array(array($stmt,'bind_param'), $args);
			$stmt->execute();
			$res = $stmt->get_result();
			while ($row = $res->fetch_assoc()) 
  				$rows[] = $row;
			$stmt->close();
		}
		
		return $rows;
	}
	private function _deleteUpdateInsert($query, $args = null)
	{
		$conn = new mysqli(self::$server, self::$user, self::$pass, self::$db);

		if (!isset($args) && $conn->query($query)) 
		{
			return Utils_ApiMessage::success();
		}
		else if($stmt = $conn->prepare($query)) 
		{
			call_user_func_array(array($stmt,'bind_param'), $args);
			$stmt->execute();
			if ($stmt->affected_rows > 0)
				return Utils_ApiMessage::success();
		}
		return Utils_ApiMessage::error($conn->error);
	}

	#public

	public function get($query, $args = null) 
	{
		return self::_get($query, $args);
	}

	public function first($query, $args = null) 
	{
		$rows = self::_get($query, $args); 
		if (count($rows)>0)
			return $rows[0];
	}
	public function delete($query, $args = null) 
	{ 
		return self::_deleteUpdateInsert($query, $args);
	}
	public function update($query, $args = null) 
	{
		return self::_deleteUpdateInsert($query, $args);
	}
	public function insert($query, $args = null) 
	{
		return self::_deleteUpdateInsert($query, $args);
	}

}

?>
