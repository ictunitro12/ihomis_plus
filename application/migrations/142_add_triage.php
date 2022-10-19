<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Triage extends CI_Migration
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

			'hpercode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '36',
				'null' => FALSE,
			),

			'status' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => FALSE,
			),

			'created_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
			),

			'updated_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
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
				'null' => TRUE,
				'default' => NULL
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('triage');

		// insert to groups
		$data = [
			'name' => 'Triage',
			'description' => 'Triage',
			'typegrp' => 'trans',
			'subID' => '0',
			'isSub' => 'N',
			'link' => 'triage',
			'icon' => 'cil-bus-alt',
			'isActive' => 'A',
		];

		$this->db->insert('groups', $data);
	}

	public function down()
	{
		$this->dbforge->drop_table('triage');

		// delete 
		$this->db->where('name', 'Triage');
		$this->db->delete('groups');
	}
}
