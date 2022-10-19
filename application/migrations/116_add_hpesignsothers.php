<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpesignsothers extends CI_Migration
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
			'pectr' =>
			array(
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hpesignsothers', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpesignsothers', 'pectr');
	}
}
