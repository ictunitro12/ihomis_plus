<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hpdap extends CI_Migration
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
				'null' => FALSE,
			),
			'refdate' =>
			array(
				'type' => 'DATETIME',
				'null' => FAlSE,
			),
			'fundcode' =>
			array(
				'type' => 'CHAR',
				'constraint' => '5',
				'null' => FAlSE,
			),
			'amount' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '12,2',
				'null' => FAlSE,
			),
			'trandate' =>
			array(
				'type' => 'DATETIME',
				'null' => FAlSE,
			),
			'usedamount' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '12,2',
				'null' => FAlSE,
			),
			'datemod' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => FALSE,
			),
		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('enccode', TRUE);
		$this->dbforge->add_key('refdate', TRUE);
		$this->dbforge->add_key('fundcode', TRUE);

		$this->dbforge->create_table('hpdaf');
	}

	public function down()
	{
		$this->dbforge->drop_table('hpdaf');
	}
}
