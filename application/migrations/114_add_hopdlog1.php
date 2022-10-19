<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hopdlog1 extends CI_Migration
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
			'telemed' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
			'telemedstat' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hopdlog', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hopdlog', 'telemed');
		$this->dbforge->drop_column('hopdlog', 'telemedstat');
	}
}
