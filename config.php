<?php
/**
* config.php
* store general config items
*/
return array(

	'neat' => array(
		'uri' => $_SERVER['REQUEST_URI'],
		'asset_dir' => 'app/assets/',
		'pdo' => array(
			'driver'   => 'mysql',
			'host'     => 'localhost',
			'database' => 'neat',
			'user'     => 'root',
			'password' => '',
		),
	),
	
);