<?php
	class Utils_Router 
	{
		public function Utils_Router($api =null) 
		{
			$this->api = $api;
			$this->foundMatch = false;
			$this->requestRoutes = $this->getRoutes($_SERVER['REQUEST_URI']);
		}

		private function getRoutes($url) 
		{
			$routes = array();

			if (strpos($url, "?"))
				$url = substr($url, 0, strpos($url, "?"));

			$temp = explode('/', $url);
			foreach($temp as $route) 
			{
				if ($route != "" && $route != '*')
				{
					array_push($routes, $route);
				}
			}
			return $routes;
		}

		private function grantPermission($roles) 
		{
			$session = Api_Auth_GetSession::exec();
			if (!isset($session['Error']))
			{
				foreach($roles as $role) 
				{
					if ($role == $session['r_title'])
						return true;
				}
			}
			return false;
		}


		public function match($url, $page, $roles=null) 
		{


			if (!$this->foundMatch)
			{
				// Get routes from url
				$routes = $this->getRoutes($url);			

				// Check if the routes length match
				if (count($routes) == count($this->requestRoutes))
				{
					// Prepare an empty array for the callback params
					$params = array();

					// Compare routes if they match
					for ($x=0; $x<count($routes); $x++)
					{
						if ($routes[$x][0] == ":") 
						{
							// Add the parameter from the url
							$paramName = substr($routes[$x], 1, strlen($routes[$x])-1);
							$params[$paramName] = $this->requestRoutes[$x];
						}
						else if ($routes[$x] != $this->requestRoutes[$x])
						{
							// If we have no parameter and the route is not matching
							// Exit the entire function
							return;
						}
					}
				
					// We found a url that match, ignore other routes
					$this->foundMatch = true;


					// If we have parameters from $_REQUEST global variable
					// Add them to the url parameter list to inject them in object
					if (substr($url, -1) == '*')
					{
						foreach($_REQUEST as $key => $value)
							$params[$key] = $_REQUEST[$key];

						foreach($_FILES as $key => $value)
							$params[$key] = $_FILES[$key];
					}

					// Now check permission
					if (!empty($roles) && !$this->grantPermission($roles))
					{
						if ($this->api)
							echo json_encode(Utils_ApiMessage::error("Access Denied."));
						else
							App_Login::exec();

						return;
					}

					// Middleware
					if ($this->api)
						echo json_encode(forward_static_call_array(array($page, 'exec'), array(&$params)));
					else
						forward_static_call_array(array($page, 'exec'), array(&$params));
			
				}
			}		
		}

		public function end()
		{
			if (!$this->foundMatch)
			{
				if ($this->api)
					echo json_encode(Utils_ApiMessage::error("Invalid Api Request"));
				else
					App_PageNotFound::exec();
			}
		}
		
	}

?>