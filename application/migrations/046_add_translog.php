<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Translog extends CI_Migration
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
			/* 'sys_desc' =>
			array(
				'type' => 'varchar',
				'constraint' => '255',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('trans_log', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('trans_log', 'sys_desc');
	}
}
