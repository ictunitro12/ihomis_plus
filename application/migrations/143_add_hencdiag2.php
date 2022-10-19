<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hencdiag2 extends CI_Migration
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
			'icd11_title' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			'icd11_selected_text' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			'icd11_foundation_uri' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			'icd11_linearization_uri' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),
		);

		$this->dbforge->add_column('hencdiag', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hencdiag', 'icd11_title');
		$this->dbforge->drop_column('hencdiag', 'icd11_foundation_uri');
		$this->dbforge->drop_column('hencdiag', 'icd11_linearization_uri');
		$this->dbforge->drop_column('hencdiag', 'icd11_selected_text');
	}
}
