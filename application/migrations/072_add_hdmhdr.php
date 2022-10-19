<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdmhdr extends CI_Migration
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
			/* 'saltcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			), */
			'packvolno' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '12,2',
				'default' => null,
				'null' => TRUE,
			),
			'packvolunitcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			),
			/* 'packcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hdmhdr', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hdmhdr', 'saltcode');
		$this->dbforge->drop_column('hdmhdr', 'packvolno');
		$this->dbforge->drop_column('hdmhdr', 'packvolunitcode');
		//$this->dbforge->drop_column('hdmhdr', 'packcode');
	}
}
