<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Webpais_indorsementdtl2 extends CI_Migration
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
			'datemod' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
			),
			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => FALSE,
			),
		);

		//$this->dbforge->add_column('webpais_indorsementdtl', $fields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('webpais_indorsementdtl', 'datemod');
		//$this->dbforge->drop_column('webpais_indorsementdtl', 'entryby');
	}
}
