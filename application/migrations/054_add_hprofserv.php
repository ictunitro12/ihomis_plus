<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hprofserv extends CI_Migration
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
			/* 'pdoctoraccrecode' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			), */

			/* 'pdoctorsigndate' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hprofserv', $fields);

		/* $modifyFields = array(
			'' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('hprofserv', $modifyFields); */
	}

	public function down()
	{
		$this->dbforge->drop_column('hprofserv', 'pdoctoraccrecode');
		$this->dbforge->drop_column('hprofserv', 'pdoctorsigndate');
	}
}
