<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdmhdrprice extends CI_Migration
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
			/* 'expiry' =>
			array(
				'type' => 'date',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hdmhdrprice', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hdmhdrprice', 'expiry');
	}
}
