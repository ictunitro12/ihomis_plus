<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hpostpartum extends CI_Migration
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
			'attenddr' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => null,
			),

			'attendsigndate' =>
			array(
				'type' => 'DATE',
				'null' => TRUE,
				'default' => null,
			),
		);

		$this->dbforge->add_column('hpostpartum', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpostpartum', 'attenddr');
		$this->dbforge->drop_column('hpostpartum', 'attendsigndate');
	}
}
