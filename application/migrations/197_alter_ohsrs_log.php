<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_alter_ohsrs_log extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$fields = array(
			'logid' =>
			array(
				'type' => 'INT',
				'constraint' => 11,
				'null' => FALSE,
				'auto_increment' => TRUE,
			),
		);

		$this->dbforge->modify_column('ohsrs_log', $fields);
	}

	public function down()
	{
	}
}
