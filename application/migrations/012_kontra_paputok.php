<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Kontra_paputok extends CI_Migration
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
			'reffered_from' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => TRUE,
			),

			'birthdate' =>
			array(
				'type' => 'DATETIME',
				'constraint' => '',
				'null' => TRUE,
			),

			'referral' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'outcome' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'date_died' =>
			array(
				'type' => 'DATETIME',
				'constraint' => '',
				'null' => TRUE,
			),

			'aware' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'educ_material' =>
			array(
				'type' => 'INT',
				'constraint' => '',
				'null' => TRUE,
			),

			'treatment_others' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'plc_pat_regcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'tempreg_no' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
			),

			'hosref' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'hosref_oth' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),

			'kpaware' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'kpaware_oth' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),

		);
		$this->dbforge->add_column('kontra_paputok', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('kontra_paputok', 'reffered_from');
		$this->dbforge->drop_column('kontra_paputok', 'birthdate');
		$this->dbforge->drop_column('kontra_paputok', 'referral');
		$this->dbforge->drop_column('kontra_paputok', 'outcome');
		$this->dbforge->drop_column('kontra_paputok', 'date_died');
		$this->dbforge->drop_column('kontra_paputok', 'aware');
		$this->dbforge->drop_column('kontra_paputok', 'educ_material');
		$this->dbforge->drop_column('kontra_paputok', 'treatment_others');
		$this->dbforge->drop_column('kontra_paputok', 'plc_pat_regcode');
		$this->dbforge->drop_column('kontra_paputok', 'tempreg_no');
		$this->dbforge->drop_column('kontra_paputok', 'hosref');
		$this->dbforge->drop_column('kontra_paputok', 'hosref_oth');
		$this->dbforge->drop_column('kontra_paputok', 'kpaware');
		$this->dbforge->drop_column('kontra_paputok', 'kpaware_oth');
	}
}
