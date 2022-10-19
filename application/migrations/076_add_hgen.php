<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hgen extends CI_Migration
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
			/* 'atccode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'default' => null,
				'null' => TRUE,
			), */
			'interventag' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hgen', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hgen', 'atccode');
		$this->dbforge->drop_column('hgen', 'interventag');
	}
}
