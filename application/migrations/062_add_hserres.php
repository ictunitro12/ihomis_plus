<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hserres extends CI_Migration
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
			'labpdf' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),

			'accessno' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),

			'spehealtfacilty' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),

			'requisitioner' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),

			'specitype' =>
			array(
				'type' => 'varchar',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			),

			'speciswabno' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),

			'labtest' =>
			array(
				'type' => 'varchar',
				'constraint' => '250',
				'default' => null,
				'null' => TRUE,
			),

			'testres' =>
			array(
				'type' => 'varchar',
				'constraint' => '250',
				'default' => null,
				'null' => TRUE,
			),

			'interpret' =>
			array(
				'type' => 'varchar',
				'constraint' => '250',
				'default' => null,
				'null' => TRUE,
			),

			'molcomment' =>
			array(
				'type' => 'varchar',
				'constraint' => '150',
				'default' => null,
				'null' => TRUE,
			),

			'perby' =>
			array(
				'type' => 'varchar',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			),

			'datrec' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),

			'datres' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hserres', $fields);

		/* $modifyFields = array(
			'' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('hserres', $modifyFields); */
	}

	public function down()
	{
		$this->dbforge->drop_column('hserres', 'labpdf');
		$this->dbforge->drop_column('hserres', 'accessno');
		$this->dbforge->drop_column('hserres', 'spehealtfacilty');
		$this->dbforge->drop_column('hserres', 'requisitioner');
		$this->dbforge->drop_column('hserres', 'specitype');
		$this->dbforge->drop_column('hserres', 'speciswabno');
		$this->dbforge->drop_column('hserres', 'labtest');
		$this->dbforge->drop_column('hserres', 'testres');
		$this->dbforge->drop_column('hserres', 'interpret');
		$this->dbforge->drop_column('hserres', 'molcomment');
		$this->dbforge->drop_column('hserres', 'perby');
		$this->dbforge->drop_column('hserres', 'datrec');
		$this->dbforge->drop_column('hserres', 'datres');
	}
}
