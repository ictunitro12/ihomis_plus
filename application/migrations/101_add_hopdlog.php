<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hopdlog extends CI_Migration
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
			'uploadte' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hopdlog', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hopdlog', 'uploadte');
	}
}
