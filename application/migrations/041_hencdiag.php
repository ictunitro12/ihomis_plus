<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hencdiag extends CI_Migration
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
			'icd11' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hencdiag', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hencdiag', 'icd11');
	}
}
