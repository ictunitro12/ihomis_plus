<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hdmhdrprice extends CI_Migration
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
			'entryby' =>
			array(
				'type' => 'varchar',
				'constraint' => '10',
				'null' => TRUE,
			),

			'datemod' =>
			array(
				'type' => 'datetime',
				'default' => null,
				'null' => TRUE,
			),

			'expiredte' =>
			array(
				'type' => 'datetime',
				'default' => null,
				'null' => TRUE,
			),

			'lotno' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'stockbal' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'begbal' =>
			array(
				'type' => 'MEDIUMTEXT',
				'null' => TRUE,
			),

			'barcode' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'expiry' =>
			array(
				'type' => 'date',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hdmhdrprice', $fields);

		$this->dbforge->add_key('lotno', TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_column('hdmhdrprice', 'entryby');
		$this->dbforge->drop_column('hdmhdrprice', 'datemod');
		$this->dbforge->drop_column('hdmhdrprice', 'expiredte');
		$this->dbforge->drop_column('hdmhdrprice', 'lotno');
		$this->dbforge->drop_column('hdmhdrprice', 'stockbal');
		$this->dbforge->drop_column('hdmhdrprice', 'begbal');
		$this->dbforge->drop_column('hdmhdrprice', 'barcode');
		$this->dbforge->drop_column('hdmhdrprice', 'expiry');
	}
}
