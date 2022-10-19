<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hhospaccreditation extends CI_Migration
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
			/* 'pcscode' =>
			array(
				'type' => 'int',
				'constraint' => '11',
				'null' => TRUE,
			), */

			/* 'pcsausername' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '45',
				'null' => TRUE,
			), */

			/* 'pcsapassword' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hhospaccreditation', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hhospaccreditation', 'pcscode');
		//$this->dbforge->drop_column('hhospaccreditation', 'pcsausername');
		//$this->dbforge->drop_column('hhospaccreditation', 'pcsapassword');
	}
}
