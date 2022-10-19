<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hrxrequest extends CI_Migration
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
			'dteapproved' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
			'tmeapproved' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
			'rrno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'rino' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'reqby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'approvedby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'issuedby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'receivedby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'lotno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hrxrequest', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hrxrequest', 'dteapproved');
		$this->dbforge->drop_column('hrxrequest', 'tmeapproved');
		$this->dbforge->drop_column('hrxrequest', 'rrno');
		$this->dbforge->drop_column('hrxrequest', 'rino');
		$this->dbforge->drop_column('hrxrequest', 'reqby');
		$this->dbforge->drop_column('hrxrequest', 'approvedby');
		$this->dbforge->drop_column('hrxrequest', 'issuedby');
		$this->dbforge->drop_column('hrxrequest', 'receivedby');
		$this->dbforge->drop_column('hrxrequest', 'lotno');
	}
}
