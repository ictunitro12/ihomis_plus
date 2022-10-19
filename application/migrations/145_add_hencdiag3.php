<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hencdiag3 extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$addfileds = array(
			// primary icd 11 code
			'icd11_primary' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'null' => TRUE,
				'default' => null,
			),
		);

		$fields = array(
			// code title
			'icd11_title' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),
			// selected code text
			'icd11_selected_text' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			// code foundation uri
			'icd11_foundation_uri' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			// code linearization uri
			'icd11_linearization_uri' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),
		);

		$this->dbforge->add_column('hencdiag', $addfileds);

		$this->dbforge->modify_column('hencdiag', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hencdiag', 'icd11_primary');
	}
}
