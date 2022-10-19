<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Rcountry extends CI_Migration
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
			'cstat' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 'A',
			),

			'clock' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 'N',
			),

			'updsw' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 'P',
			),

			'datemod' =>
			array(
				'type' => 'DATETIME',
				'constraint' => '',
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('rcountry', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('rcountry', 'cstat');
		$this->dbforge->drop_column('rcountry', 'clock');
		$this->dbforge->drop_column('rcountry', 'updsw');
		$this->dbforge->drop_column('rcountry', 'datemod');
	}
}
