<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hopdlog extends CI_Migration
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
			'opdpregstat' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hopdlog', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hopdlog', 'opdpregstat');
	}
}
