<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hstkdelivery extends CI_Migration
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
			'sinvoice' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'null' => FALSE,
			),

			'risno' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'null' => FALSE,
			),

			'iarno' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'null' => FALSE,
			),

			'prno' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'null' => FALSE,
			),

			'pono' =>
			array(
				'type' => 'varchar',
				'constraint' => '15',
				'null' => FALSE,
			),

			'lotno' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => FALSE,
			),
		);

		$this->dbforge->add_column('hstkdelivery', $fields);

		$modifyFields = array(
			'delno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),
		);

		$this->dbforge->modify_column('hstkdelivery', $modifyFields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hstkdelivery', 'sinvoice');
		$this->dbforge->drop_column('hstkdelivery', 'risno');
		$this->dbforge->drop_column('hstkdelivery', 'iarno');
		$this->dbforge->drop_column('hstkdelivery', 'prno');
		$this->dbforge->drop_column('hstkdelivery', 'pono');
		$this->dbforge->drop_column('hstkdelivery', 'lotno');
	}
}
