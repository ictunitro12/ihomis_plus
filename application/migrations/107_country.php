<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Country extends CI_Migration
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
			'ID' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
				'default' => null,
			),

			'CountryCode2' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => null,
			),

			'CountryCode3' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '3',
				'null' => TRUE,
				'default' => 'P',
			),
		);
		$this->dbforge->add_column('rcountry', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('country', 'ID');
		$this->dbforge->drop_column('country', 'CountryCode2');
		$this->dbforge->drop_column('country', 'CountryCode3');
	}
}
