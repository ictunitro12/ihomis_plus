<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Triage_Vital_Signs extends CI_Migration
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

			'triage_id' =>
			array(
				'type' => 'BIGINT',
				'constraint' => '20',
				'unsigned'       => TRUE,
				'null' => FALSE,
			),

			'hpercode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '36',
				'null' => TRUE,
			),

			'chief_complaint' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'has_tuberculosis' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'is_pregnant' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'is_newborn' =>
			array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'null' => TRUE,
				'default' => 0,
			),

			'vital_sign_log_date' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			'blood_pressure' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => NULL,
			),

			'temperature' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => NULL,
			),

			'pulse_rate' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => NULL,
			),

			'respiratory_rate' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => NULL,
			),

			'oxygen_saturation' =>
			array(
				'type' => 'CHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => NULL,
			),

			'bmi_log_date' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			'height' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => NULL,
			),

			'weight' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => NULL,
			),

			'bmi' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => NULL,
			),

			'bmi_category' =>
			array(
				'type' => 'CHAR',
				'constraint' => '20',
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

			'deleted_at' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => NULL
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('triage_temporary_vitals');
	}

	public function down()
	{
		$this->dbforge->drop_table('triage_temporary_vitals');
	}
}
