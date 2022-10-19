<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphicclaimvoucher extends CI_Migration
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
			'pTotalAmount' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '20,2',
				'default' => null,
			),

			'pNumberOfClaims' =>
			array(
				'type' => 'INT',
				'constraint' => '11',
				'default' => null,
			),
		);

		$this->dbforge->add_column('hphicclaimvoucher', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hphicclaimvoucher', 'pTotalAmount');
		$this->dbforge->drop_column('hphicclaimvoucher', 'pNumberOfClaims');
	}
}
