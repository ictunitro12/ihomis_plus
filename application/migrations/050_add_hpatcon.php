<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpatcon extends CI_Migration
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
			/* 'typeofclaim' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			), */

			/* 'ppatientpin' =>
			array(
				'type' => 'varchar',
				'constraint' => '12',
				'default' => null,
				'null' => TRUE,
			), */

			/* 'accreno' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'default' => null,
				'null' => TRUE,
			), */
			
		);

		$this->dbforge->add_column('hpatcon', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hpatcon', 'typeofclaim');
		//$this->dbforge->drop_column('hpatcon', 'ppatientpin');
		//$this->dbforge->drop_column('hpatcon', 'accreno');
	}
}
