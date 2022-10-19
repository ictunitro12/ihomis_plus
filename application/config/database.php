 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	$active_group = env('DB_CONNECTION', 'mysql');
	$query_builder = TRUE;

	$config['db_connection'] = $active_group;

	$db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'port'     => '3306',
		'username' => 'root',
		'password' => '',
		'database' => 'uhcis',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'development'),
		'db_debug' => TRUE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => TRUE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);

	$db['mysql'] = array(
		'dsn'	=> '',
		'hostname' => env('DB_HOST', 'localhost'),
		'port'     => env('DB_PORT', '3306'),
		'username' => env('DB_USERNAME', 'sa'),
		'password' => env('DB_PASSWORD', '1234'),
		'database' => env('DB_DATABASE', 'tot_db'),
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'development'),
		'db_debug' => TRUE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => TRUE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
	
	$db['mssql'] = array(
	'dsn'   => '(local)',
	'hostname' => env('DB_HOST', '(local)'),
	'username' => env('DB_USERNAME', 'sa'),
	'password' => env('DB_PASSWORD', '1234'),
	'database' => env('DB_DATABASE', 'ihomis'),
	'dbdriver' => 'sqlsrv', // or mssql or sqlsrv
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => true,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE);

	$db['engas'] = array(
		'dsn'   => '',
		'hostname' => 'Driver={SQL Server};Server=127.0.0.1;Database=engas;',
		'username' => 'sa',
		'password' => '1234',
		//'port' => '1433',
		'database' => 'engas',
		'dbdriver' => 'odbc', // or mssql or sqlsrv
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => TRUE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE);


		$db['otheremr'] = array(
			'dsn'   => '',
			'hostname' => 'Driver={SQL Server};Server=127.0.0.1;Database=engas;',
			'username' => 'sa',
			'password' => '1234',
			//'port' => '1433',
			'database' => 'engas',
			'dbdriver' => 'odbc', // or mssql or sqlsrv
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => TRUE,
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci',
			'swap_pre' => '',
			'autoinit' => TRUE,
			'encrypt' => FALSE,
			'compress' => FALSE,
			'stricton' => FALSE,
			'failover' => array(),
			'save_queries' => TRUE);

	

