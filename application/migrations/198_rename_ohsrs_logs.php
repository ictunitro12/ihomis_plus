<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_rename_ohsrs_logs extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$this->dbforge->rename_table('ohsrs_logs', 'ohsrs_log');
	}

	public function down()
	{
	}
}
