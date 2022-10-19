<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Webpais_indorsementdtl extends CI_Migration
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
			'deduct' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '8',
				'null' => TRUE,
			),

			'chrgcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			),

			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
			),

			'datemod' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_key('hpercode', TRUE);
		$this->dbforge->add_key('unique_code', TRUE);
		$this->dbforge->add_key('enccode', TRUE);
		$this->dbforge->add_key('deduct', TRUE);
		$this->dbforge->add_key('chrgcode', TRUE);
		$this->dbforge->add_column('webpais_indorsementdtl', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('webpais_indorsementdtl', 'deduct');
		$this->dbforge->drop_column('webpais_indorsementdtl', 'chrgcode');
		$this->dbforge->drop_column('webpais_indorsementdtl', 'entryby');
		$this->dbforge->drop_column('webpais_indorsementdtl', 'datemod');
	}
}
