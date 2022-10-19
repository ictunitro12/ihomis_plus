<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hprovider extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$modifyFields = array(
			'provpassw' =>
			array(
				'type' => 'varchar',
				'constraint' => '10',
				'default' => null,
				'null' => TRUE,
			),

			'puserid' =>
			array(
				'type' => 'varchar',
				'constraint' => '10',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->modify_column('hprovider', $modifyFields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hprovider', '');
	}
}
