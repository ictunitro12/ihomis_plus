<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hphicclaimreturnreq extends CI_Migration
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
			/* '' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			), */
		);

		//$this->dbforge->add_column('hphicclaimreturnreq', $fields);

		$modifyFields = array(
			'pdeficiency' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => FALSE,
			),

			/* 'prequirement' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			), */
		);

		$this->dbforge->modify_column('hphicclaimreturnreq', $modifyFields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hphicclaimreturnreq', '');
	}
}
