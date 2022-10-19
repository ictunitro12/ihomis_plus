<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Webpais_indorsement extends CI_Migration
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
			'fundcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('webpais_indorsement', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('webpais_indorsement', 'fundcode');
	}
}
