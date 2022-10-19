<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_hperson_ipgroup extends CI_Migration
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
			'ipgroup' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			));

		$this->dbforge->add_column('hperson', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hperson', 'ipgroup');
	}
}
