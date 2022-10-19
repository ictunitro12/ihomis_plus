<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Livebirth_table extends CI_Migration
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
			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
			),
			
			'typbirth_oth' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hlivebirth', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hlivebirth', 'entryby');
	}
}
