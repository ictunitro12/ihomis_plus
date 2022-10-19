<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hhospmas_Table extends CI_Migration
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
			'udrs_username' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE
			),
			'udrs_password' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE
			),
		);

		$this->dbforge->add_column('hhospmas', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hhospmas', 'udrs_username');
		$this->dbforge->drop_column('hhospmas', 'udrs_password');
	}
}
