<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hperson2 extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->config('database');
	}

	public function up()
	{
		$database = $this->config->item('db_connection');

		if ($database == 'mssql') {
			/* $fields = array(
				'created_at' =>
				array(
					'type' => 'DATETIME',
					'null' => FALSE,
				),
			); */
			$fields = array(
				'created_at DATETIME NULL CONSTRAINT DF_hperson_created_at DEFAULT (GETDATE())',
			);
		}

		if ($database == 'mysql') {
			$fields = array(
				'created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP',
			);
		}

		/* $fields = array(
			'created_at' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
			//'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
		); */

		$this->dbforge->add_column('hperson', $fields);

		// set value to null
		$this->db->update('hperson', ['created_at' => null]);
	}

	public function down()
	{
		$this->dbforge->drop_column('hperson', 'create_at');
	}
}
