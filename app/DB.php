<?php
namespace App;

class DB extends \PDO
{

	function __construct()
	{
		$config = Config::init()->get('neat.pdo');
		try
		{
			parent::__construct($config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'] . ';', $config['user'], $config['password']);
		}
		catch (\PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public static function simpleQueryString($columns, $table, $conditions = array())
	{
		$columns = rtrim(implode(', ', $columns), ', ');

		$terms = count($conditions);
		$where = '';
		if ($terms > 0)
		{
			foreach ($conditions as $field => $value)
			{
				$where .= $field . ' = ' . $value;
				if (--$terms)
				{
					$where .= ' AND ';
				}
			}
			$where = ' WHERE ' . $where;
		}

		return 'SELECT ' . $columns . ' FROM ' . $table . $where;
	}
}