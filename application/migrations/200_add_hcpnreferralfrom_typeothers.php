<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hcpnreferralfrom_typeothers extends CI_Migration
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
			'typeofreferralothers' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'null' => true,
				'default' => null
			),
		);

		$this->dbforge->add_column('hcpnreferralfrom', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hcpnreferralfrom', 'typeofreferralothers');
	}
}