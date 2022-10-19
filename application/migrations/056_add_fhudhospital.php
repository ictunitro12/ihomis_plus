<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Fhudhospital extends CI_Migration
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
			/* 'accreno' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'default' => null,
				'null' => TRUE,
			), */

			'newfhudcode' =>
			array(
				'type' => 'varchar',
				'constraint' => '19',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('fhud_hospital', $fields);

		/* $modifyFields = array(
			'' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('fhud_hospital', $modifyFields); */
	}

	public function down()
	{
		//$this->dbforge->drop_column('fhud_hospital', 'accreno');
		$this->dbforge->drop_column('fhud_hospital', 'newfhudcode');
	}
}
