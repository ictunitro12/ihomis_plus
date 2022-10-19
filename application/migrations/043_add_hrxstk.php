<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hrxstk extends CI_Migration
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
				'type' => 'varchar',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hrxstk', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hrxstk', 'lotno');
	}
}
