<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Icd11_Manual_Postcoordinations extends CI_Migration
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
			'id' =>
			array(
				'type' => 'BIGINT',
				'constraint' => '20',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
				'null' => FALSE,
			),

			'code' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => FALSE,
			),

			'title' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'foundation_uri' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'linearization_uri' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'selected_text' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'enccode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '48',
				'null' => FALSE,
			),

			'encounter_date' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			'is_cluster' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '4',
				'null' => TRUE,
				'default' => 1,
			),

			'type' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
				'default' => NULL,
			),

			'created_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => FALSE,
			),

			'updated_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => TRUE,
				'default' => NULL,
			),

			//'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
			'created_at' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			'updated_at' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('icd11_manual_postcoordinations');
	}

	public function down()
	{
		$this->dbforge->drop_table('icd11_manual_postcoordinations');
	}
}
