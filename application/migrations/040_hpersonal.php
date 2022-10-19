<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hpersonal extends CI_Migration
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
			/* 'dateemployed' =>
			array(
				'type' => 'DATETIME',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			),

			'dateresigned' =>
			array(
				'type' => 'DATETIME',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			), */
			'extensionname' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'mobilenumber' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'default' => null,
				'null' => TRUE,
			),

			'emailadd' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hpersonal', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hpersonal', 'dateemployed');
		//$this->dbforge->drop_column('hpersonal', 'dateresigned');
		$this->dbforge->drop_column('hpersonal', 'extensionname');
		$this->dbforge->drop_column('hpersonal', 'mobilenumber');
		$this->dbforge->drop_column('hpersonal', 'emailadd');
	}
}
