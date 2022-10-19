<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hpdaf_Table extends CI_Migration
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
			'datemod' =>
			array(
				'type' => 'DATETIME',
			),
			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
			),
		);

		$this->dbforge->add_column('hpdaf', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpdaf', 'datemod');
		$this->dbforge->drop_column('hpdaf', 'entryby');
	}
}
