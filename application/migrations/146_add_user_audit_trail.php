<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_User_Audit_Trail extends CI_Migration
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

			'user_id' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => TRUE,
			),

			'event' =>
			array(
				'type' => 'ENUM("insert","update","delete")',
				'null' => FALSE,
			),

			'table_name' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => FALSE,
			),

			'old_values' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'new_values' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'url' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => FALSE,
			),

			'name' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE,
			),

			'ip_address' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '45',
				'null' => FALSE,
			),

			'user_agent' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => FALSE,
			),

			//'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
			'created_at' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		//$this->dbforge->create_table('user_audit_trails');
	}

	public function down()
	{
		//$this->dbforge->drop_table('user_audit_trails');
	}
}
