<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Vawc_table extends CI_Migration
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
			'hosp_pat_no' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('vawc', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('vawc', 'hosp_pat_no');
	}
}
