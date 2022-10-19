<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpatcon1_Consentsign extends CI_Migration
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
			'consentsign' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			)
		);

		$this->dbforge->add_column('hpatcon1', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpatcon1', 'consentsign');
	}
}
