<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Haddr extends CI_Migration
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
			'permpatstr' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'permbrg' =>
			array(
				'type' => 'varchar',
				'constraint' => '9',
				'null' => TRUE,
			),

			'permctycode' =>
			array(
				'type' => 'varchar',
				'constraint' => '6',
				'null' => TRUE,
			),

			'permprovcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '4',
				'null' => TRUE,
			),

			'permpatzip' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
			),

			'permcntrycode' =>
			array(
				'type' => 'varchar',
				'constraint' => '5',
				'null' => TRUE,
			),

			'permdistzip' =>
			array(
				'type' => 'varchar',
				'constraint' => '4',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('haddr', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('haddr', 'permpatstr');
		$this->dbforge->drop_column('haddr', 'permbrg');
		$this->dbforge->drop_column('haddr', 'permctycode');
		$this->dbforge->drop_column('haddr', 'permprovcode');
		$this->dbforge->drop_column('haddr', 'permpatzip');
		$this->dbforge->drop_column('haddr', 'permcntrycode');
		$this->dbforge->drop_column('haddr', 'permdistzip');
	}
}
