<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Stroke extends CI_Migration
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
			'more_equal_1_pack' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
			),
		);

		$this->dbforge->add_column('stroke', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('stroke', 'more_equal_1_pack');
	}
}
