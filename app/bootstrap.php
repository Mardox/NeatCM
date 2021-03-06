<?php
/**
* app/bootstrap.php
* helper functions and app initialisation
*/

/**
* __autoload()
* attempt to laod a class when called, if not already loaded
*/
function __autoload($class)
{ 

	$class = array_reverse(explode('\\', $class))[0];

	if (file_exists('app/' . $class . '.php'))
	{ 
		require_once 'app/' . $class . '.php' ; 
	}
}

/* Helpers */

/**
* asset_dir()
* return absolute path to the assets directoy
*/
function asset_dir()
{
	return App\Config::init()->get('neat.asset_dir');
}

/* inialiase globals */
$router = new App\Router();
$db = new App\DB();