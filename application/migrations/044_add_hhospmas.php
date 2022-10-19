<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hhospmas extends CI_Migration
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
			'htraucap' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),

			'htraurec' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),

			'hservcap' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'phic_accretype' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'iso_accreno' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'iso_validfr' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'iso_validto' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'inter_accreno' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'inter_validfr' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'inter_validto' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'pcaho_accreno' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'pcaho_validfr' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'pcaho_validto' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'faxno' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			),

			'ohrsrs_username' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'ohrsrs_password' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'ohsrs_username' =>
			array(
				'type' => 'varchar',
				'constraint' => '10',
				'null' => TRUE,
			),

			'ohsrs_password' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'trauma' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'accdteto' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'nehehrsv_username' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'nehehrsv_password' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hhospmas', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hhospmas', 'htraucap');
		$this->dbforge->drop_column('hhospmas', 'htraurec');
		$this->dbforge->drop_column('hhospmas', 'hservcap');
		$this->dbforge->drop_column('hhospmas', 'phic_accretype');
		$this->dbforge->drop_column('hhospmas', 'iso_accreno');
		$this->dbforge->drop_column('hhospmas', 'iso_validfr');
		$this->dbforge->drop_column('hhospmas', 'iso_validto');
		$this->dbforge->drop_column('hhospmas', 'inter_accreno');
		$this->dbforge->drop_column('hhospmas', 'inter_validfr');
		$this->dbforge->drop_column('hhospmas', 'inter_validto');
		$this->dbforge->drop_column('hhospmas', 'pcaho_accreno');
		$this->dbforge->drop_column('hhospmas', 'pcaho_validfr');
		$this->dbforge->drop_column('hhospmas', 'pcaho_validto');
		$this->dbforge->drop_column('hhospmas', 'faxno');
		$this->dbforge->drop_column('hhospmas', 'ohrsrs_username');
		$this->dbforge->drop_column('hhospmas', 'ohrsrs_password');
		$this->dbforge->drop_column('hhospmas', 'ohsrs_username');
		$this->dbforge->drop_column('hhospmas', 'ohsrs_password');
		$this->dbforge->drop_column('hhospmas', 'trauma');
		$this->dbforge->drop_column('hhospmas', 'accdteto');
		$this->dbforge->drop_column('hhospmas', 'nehehrsv_username');
		$this->dbforge->drop_column('hhospmas', 'nehehrsv_password');
	}
}
