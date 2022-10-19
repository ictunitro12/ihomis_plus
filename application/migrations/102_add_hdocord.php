<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdocord extends CI_Migration
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
			'remarks' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => null,
				'null' => TRUE,
			),

			'calreq' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => null,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hdocord', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hdocord', 'remarks');
		$this->dbforge->drop_column('hdocord', 'calreq');
	}
}
