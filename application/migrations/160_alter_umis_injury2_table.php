<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Umis_Injury2_table extends CI_Migration
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
			'enccode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '48',
				'null' => FALSE,
			),
			'type1' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('umis_injury2', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('umis_injury2', 'enccode');
		$this->dbforge->drop_column('umis_injury2', 'type1');
	}
}
