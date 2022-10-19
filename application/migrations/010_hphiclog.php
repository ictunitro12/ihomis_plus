<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphiclog extends CI_Migration
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
			'spsuffix' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			),

			'memcontactno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'empdistzip' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '4',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hphiclog', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hphiclog', 'spsuffix');
		$this->dbforge->drop_column('hphiclog', 'memcontactno');
		$this->dbforge->drop_column('hphiclog', 'empdistzip');
	}
}
