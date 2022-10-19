<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hcharge extends CI_Migration
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
			'uacscode' =>
			array(
				'type' => 'varchar',
				'constraint' => 5,
				'default' => null,
				'null' => TRUE,
            ),
			'acctdesc' =>
			array(
				'type' => 'TEXT',
				'default' => null,
				'null' => TRUE,
            ),
            
		);

		$this->dbforge->add_column('hcharge', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hcharge', 'uacscode');
		$this->dbforge->drop_column('hcharge', 'acctdesc');
	}
}