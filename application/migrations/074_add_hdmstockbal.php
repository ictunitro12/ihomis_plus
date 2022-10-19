<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdmstockbal extends CI_Migration
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
			'lotno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
			'expiredte' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
			'begbal' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '12,2',
				'default' => null,
				'null' => TRUE,
			),
			'barcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hdmstockbal', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hdmstockbal', 'lotno');
		$this->dbforge->drop_column('hdmstockbal', 'expiredte');
		$this->dbforge->drop_column('hdmstockbal', 'begbal');
		$this->dbforge->drop_column('hdmstockbal', 'barcode');
	}
}
