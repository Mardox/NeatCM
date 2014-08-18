<?php
namespace App;
/**
* App\Config
* get config item(s) from config.php
*/
class Config
{
	private $config;
	private static $instance;

	public function __construct()
	{
		$this->config = include(dirname(__FILE__) . '/../config.php');
		return $this;
	}

	public static function init()
	{
		if (is_null(self::$instance))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function get($value)
	{
		$config          = $this->config;

		$value           = array_reverse(explode('.', $value));
		$requested_count = count($value);
		$fetched_count   = 0;

		$item            = array_pop($value);

		while (isset($config[$item]) && is_array($config))
		{
			$config = $config[$item];
			$item   = array_pop($value);
			$fetched_count++;
		}

		return $fetched_count == $requested_count ? $config : null;
	}

	public function all()
	{
		return $this->config;
	}

}