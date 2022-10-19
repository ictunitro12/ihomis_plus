<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Tmpclaim extends CI_Migration
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
			/* 'claimnumber' =>
			array(
				'type' => 'varchar',
				'constraint' => '45',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('tmpclaim', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('tmpclaim', 'claimnumber');
	}
}
