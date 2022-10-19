<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hurres extends CI_Migration
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
			'labpdf' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hurres', $fields);

		/* $modifyFields = array(
			'' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('hurres', $modifyFields); */
	}

	public function down()
	{
		$this->dbforge->drop_column('hurres', 'labpdf');
	}
}
