<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Umis_Injury2 extends CI_Migration
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
			'risk_none' =>
			array(
				'type' => 'varchar',
				'constraint' => 1,
				'default' => null,
				'null' => TRUE,
			),
			'rstatuscode' =>
			array(
				'type' => 'varchar',
				'constraint' => 1,
				'default' => null,
				'null' => TRUE,
			),
			'tempreg_no' =>
			array(
				'type' => 'varchar',
				'constraint' => 15,
				'default' => null,
				'null' => TRUE,
			),
			/* 'civil_stat' =>
			array(
				'type' => 'varchar',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			), */
			/* 'occupation' =>
			array(
				'type' => 'varchar',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('umis_injury2', $fields);

		$modifyFields = array(
			'pre_date' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
			),
		);

		$this->dbforge->modify_column('umis_injury2', $modifyFields);
	}

	public function down()
	{
		$this->dbforge->drop_column('umis_injury2', 'risk_none');
		$this->dbforge->drop_column('umis_injury2', 'rstatuscode');
		$this->dbforge->drop_column('umis_injury2', 'tempreg_no');
		//$this->dbforge->drop_column('umis_injury2', 'civil_stat');
		//$this->dbforge->drop_column('umis_injury2', 'occupation');
	}
}
