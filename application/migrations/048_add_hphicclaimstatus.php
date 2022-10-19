<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hphicclaimstatus extends CI_Migration
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
			/* 'isrefiled' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hphicclaimstatus', $fields);

		$modifyFields = array(
			'pstatus' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),
		);

		$this->dbforge->modify_column('hphicclaimstatus', $modifyFields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hphicclaimstatus', 'isrefiled');
	}
}
