<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_appointments extends CI_Migration
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

			'appointment_id' =>
			array(
				'type' => 'CHAR',
				'constraint' => '36',
				'null' => FALSE,
			),

			'appointment_date' =>
			array(
				'type' => 'DATE',
				'null' => FALSE,
			),

			'facility' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'patient' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'patient_name' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
				'default' => null,
			),

			'service_type' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
				'default' => null,
			),

			'complaint' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'type' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => FALSE,
			),

			'slot' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => NULL,
			),

			'doctor_id' =>
			array(
				'type' => 'CHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => NULL,
			),

			'complaint' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'license_number' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => NULL,
			),

			'consultation_mode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
				'default' => NULL,
			),

			'terms' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'remarks' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'is_paid' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'status' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => FALSE,
			),

			'appointment_type' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => TRUE,
			),

			'previous_appointment_id' =>
			array(
				'type' => 'CHAR',
				'constraint' => '36',
				'null' => TRUE,
			),

			'created_at' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			//'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',

			//'updated_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',

			'updated_at' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => NULL
			),

			'deleted_at' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => NULL
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('appointments');
	}

	public function down()
	{
		$this->dbforge->drop_table('appointments');
	}
}
