<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hwalkin extends CI_Migration
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
			'chrgtype' =>
			array(
				'type' => 'varchar',
				'constraint' => '3',
				'null' => TRUE,
			),

			'estatus' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'paystat' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'csamt' =>
			array(
				'type' => 'NUMERIC',
				'constraint' => '12,2',
				'null' => TRUE,
			),

			'ncamt' =>
			array(
				'type' => 'NUMERIC',
				'constraint' => '12,2',
				'null' => TRUE,
			),

			'paytype' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'apprv' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'apprvby' =>
			array(
				'type' => 'varchar',
				'constraint' => '10',
				'null' => TRUE,
			),

			'apprvdte' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
			),

			'apprvrmrks' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'hpercode' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			),

			'ispay' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hwalkin', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hwalkin', 'chrgtype');
		$this->dbforge->drop_column('hwalkin', 'estatus');
		$this->dbforge->drop_column('hwalkin', 'paystat');
		$this->dbforge->drop_column('hwalkin', 'csamt');
		$this->dbforge->drop_column('hwalkin', 'ncamt');
		$this->dbforge->drop_column('hwalkin', 'paytype');
		$this->dbforge->drop_column('hwalkin', 'apprv');
		$this->dbforge->drop_column('hwalkin', 'apprvby');
		$this->dbforge->drop_column('hwalkin', 'apprvdte');
		$this->dbforge->drop_column('hwalkin', 'apprvrmrks');
		$this->dbforge->drop_column('hwalkin', 'payhpercode');
		$this->dbforge->drop_column('hwalkin', 'ispay');
	}
}
