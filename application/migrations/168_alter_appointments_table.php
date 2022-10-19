<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Appointments_Table extends CI_Migration
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
			'enccode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '48',
				'null' => TRUE
			),
		);

		$this->dbforge->add_column('appointments', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('appointments', 'enccode');
	}
}
