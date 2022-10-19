<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Update_appointments extends CI_Migration
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
			'doctor' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			'is_pregnant' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'disposition' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
				'default' => null,
			),

			'completed_at' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'hpercode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
				'default' => null,
			),
		);

		$this->dbforge->add_column('appointments', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('appointments', 'doctor');
		$this->dbforge->drop_column('appointments', 'is_pregnant');
		$this->dbforge->drop_column('appointments', 'disposition');
		$this->dbforge->drop_column('appointments', 'completed_at');
		$this->dbforge->drop_column('appointments', 'hpercode');
	}
}
