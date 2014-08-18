<?php
namespace App;
/**
* App\Router
* a simple routing class
*/
class Router
{
	private $routes = array();
	
	public function route($pattern, $callback)
	{
		$pattern = '/^\/' . str_replace('/', '\/', $pattern) . '\/?$/';
		$this->routes[$pattern] = $callback;
	}
	
	public function execute($uri)
	{
		$uri = $uri === null ? Config::init()->get('neat.uri.test') : $uri;

		$base = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));

		if (strpos($uri, $base) === 0) {
			$uri = substr($uri, strlen($base));
		}

		foreach ($this->routes as $pattern => $callback)
		{
			if (preg_match($pattern, $uri, $params) === 1)
			{
				array_shift($params);
				return call_user_func_array($callback, array_values($params));
			}
		}

		// if no routes are matched, return a 404 error
		header("HTTP/1.0 404 Not Found");
		include '404.php';
		die();
	}
}