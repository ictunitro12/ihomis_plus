<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Stroke_table extends CI_Migration
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
			'family_type_stroke' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('stroke', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('stroke', 'family_type_stroke');
	}
}
