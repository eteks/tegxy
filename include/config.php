<?php
/*!
 * Medoo database framework
 * http://medoo.in
 * Version 0.9.1.1
 * 
 * Copyright 2013, Angel Lai
 * Released under the MIT license
 */

class medoo
{   
	protected $database_type = 'mysql';
	
	// For MySQL, MSSQL, Sybase
	protected $server = 'localhost';

	protected $username = 'root';

	protected $password = 'root';

	// For SQLite
	protected $database_file = '';

	// Optional
	protected $port = 3306;

	protected $charset = 'utf8';

	protected $database_name = 'xyget.com';

	protected $option = array();

	// Variable 
	protected $queryString;

	public function __construct($options)
	{
		try {
			$commands = array();

			if (is_string($options))
			{
				if (strtolower($this->database_type) == 'sqlite')
				{
					$this->database_file = $options;
				}
				else
				{
					$this->database_name = $options;
				}
			}
			else
			{
				foreach ($options as $option => $value)
				{
					$this->$option = $value;
				}
			}

			$type = strtolower($this->database_type);

			if (
				isset($this->port) &&
				is_int($this->port * 1)
			)
			{
				$port = $this->port;
			}

			$set_charset = "SET NAMES '" . $this->charset . "'";

			switch ($type)
			{
				case 'mariadb':
					$type = 'mysql';

				case 'mysql':
					// Make MySQL using standard quoted identifier
					$commands[] = 'SET SQL_MODE=ANSI_QUOTES';

				case 'pgsql':
					$dsn = $type . ':host=' . $this->server . (isset($port) ? ';port=' . $port : '') . ';dbname=' . $this->database_name;
					$commands[] = $set_charset;

					break;

				case 'sybase':
					$dsn = $type . ':host=' . $this->server . (isset($port) ? ',' . $port : '') . ';dbname=' . $this->database_name;
					$commands[] = $set_charset;

					break;

				case 'mssql':
					$dsn = strpos(PHP_OS, 'WIN') !== false ?
						'sqlsrv:server=' . $this->server . (isset($port) ? ',' . $port : '') . ';database=' . $this->database_name :
						'dblib:host=' . $this->server . (isset($port) ? ':' . $port : '') . ';dbname=' . $this->database_name;

					// Keep MSSQL QUOTED_IDENTIFIER is ON for standard quoting
					$commands[] = 'SET QUOTED_IDENTIFIER ON';
					$commands[] = $set_charset;

					break;

				case 'sqlite':
					$dsn = $type . ':' . $this->database_file;
					$this->username = null;
					$this->password = null;

					break;
			}
$uname=$this->username;
$upass=$this->password;

			$this->pdo = new PDO(
				$dsn, 
				$uname,
				$upass,
				$this->option
			);

			foreach ($commands as $value)
			{
				$this->pdo->exec($value);	
			}
		}
		catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->queryString = $query;
		
		return $this->pdo->query($query);
	}

	
}
$db_name='xyget.com';
$database = new medoo($db_name);
define('HTTP_URL','localhost/xygetv3.com');
define('HTTP_SERVER', 'http://'.HTTP_URL.'/');
$Title = "XYGET.COM";


?>
