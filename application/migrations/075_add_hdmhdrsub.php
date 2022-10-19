<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdmhdrsub extends CI_Migration
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
			'unitcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hdmhdrsub', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hdmhdrsub', 'unitcode');
	}
}
