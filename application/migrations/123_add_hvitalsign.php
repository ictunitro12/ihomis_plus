<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hvitalsign extends CI_Migration
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
			'o2sats' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 15,
				'default' => null,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hvitalsign', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hvitalsign', 'o2sats');
	}
}
