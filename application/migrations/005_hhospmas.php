<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hhospmas extends CI_Migration
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
			'howner' =>
			array(
				'type' => 'varchar',
				'constraint' => '25',
				'null' => TRUE,
			),

			'hspecialcode' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hhospmas', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hhospmas', 'howner');
		$this->dbforge->drop_column('hhospmas', 'hspecialcode');
	}
}
