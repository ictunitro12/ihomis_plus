<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hperson extends CI_Migration
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
			'dohid' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hperson', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hperson', 'dohid');
	}
}
