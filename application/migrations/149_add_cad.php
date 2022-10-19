<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Cad extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$modifyFields = array(
			'date_uploaded' =>
			array(
				'type' => 'DATETIME',
				'default' => null,
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('cad', $modifyFields);
	}

	public function down()
	{
		$this->dbforge->drop_column('cad', 'date_uploaded');
	}
}
