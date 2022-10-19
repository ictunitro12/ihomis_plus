<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Henctr extends CI_Migration
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
			'consentphie' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
			'cf4attendprov' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('henctr', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('henctr', 'consentphie');
		$this->dbforge->drop_column('henctr', 'cf4attendprov');
	}
}
