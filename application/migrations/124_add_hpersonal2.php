<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpersonal2 extends CI_Migration
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
			 'extensionname' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hpersonal', $fields);

		/* $modifyFields = array(
			'' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('hpersonal', $modifyFields); */
	}

	public function down()
	{
		$this->dbforge->drop_column('hpersonal', 'extensionname');
	}
}
