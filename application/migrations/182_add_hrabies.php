<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hrabies extends CI_Migration
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
			'entry_date' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
			'modifiedby' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'default' => null,
				'null' => TRUE,
			),
			'date_modified' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
			'date_uploaded' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			)
		);

		$this->dbforge->add_column('hrabies', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hrabies', 'entry_date');
		$this->dbforge->drop_column('hrabies', 'modifiedby');
		$this->dbforge->drop_column('hrabies', 'date_modified');
		$this->dbforge->drop_column('hrabies', 'date_uploaded');
	}
}
