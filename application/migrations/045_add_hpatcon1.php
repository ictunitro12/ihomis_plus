<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpatcon1 extends CI_Migration
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
			/* 'pRelCode' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			), */

			/* 'pRelDesc' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'pReasonCode' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			),

			'pReasonDesc' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'pThumbMarkedBy' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			),

			'plefteyeiolstickernumber' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'plefteyeiolexpirydate' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			),

			'prighteyeiolstickernumber' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'default' => null,
				'null' => TRUE,
			),

			'prighteyeiolexpirydate' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			),

			'padmissiondatetime' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			),

			'pdischargedatetime' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'default' => null,
				'null' => TRUE,
			),

			'pdisposition' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			), 

			'psessionnoimrt' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			),

			'psessiondateimrt' =>
			array(
				'type' => 'varchar',
				'constraint' => '255',
				'default' => null,
				'null' => TRUE,
			),

			'authsig' =>
			array(
				'type' => 'varchar',
				'constraint' => '2',
				'default' => null,
				'null' => TRUE,
			),

			'authposition' =>
			array(
				'type' => 'varchar',
				'constraint' => '2',
				'default' => null,
				'null' => TRUE,
			),

			'pNBHearingScreeningTestResult' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'default' => null,
				'null' => TRUE,
			),

			'pNewbornHearingRegistryNo' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'default' => null,
				'null' => TRUE,
			), */
		);

		$this->dbforge->add_column('hpatcon1', $fields);

		$modifyFields = array(
			'pmemberpatienthci' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'phmohci' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'pothershci' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'pmemberpatientpf' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'phmopf' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'potherspf' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'pabpothers' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'pabpspecify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),
		);

		$this->dbforge->modify_column('hpatcon1', $modifyFields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hpatcon1', 'pRelCode');
		//$this->dbforge->drop_column('hpatcon1', 'pRelDesc');
		//$this->dbforge->drop_column('hpatcon1', 'pReasonCode');
		//$this->dbforge->drop_column('hpatcon1', 'pReasonDesc');
		//$this->dbforge->drop_column('hpatcon1', 'pThumbMarkedBy');
		//$this->dbforge->drop_column('hpatcon1', 'plefteyeiolstickernumber');
		//$this->dbforge->drop_column('hpatcon1', 'plefteyeiolexpirydate');
		//$this->dbforge->drop_column('hpatcon1', 'prighteyeiolstickernumber');
		//$this->dbforge->drop_column('hpatcon1', 'prighteyeiolexpirydate');
		//$this->dbforge->drop_column('hpatcon1', 'padmissiondatetime');
		//$this->dbforge->drop_column('hpatcon1', 'pdischargedatetime');
		//$this->dbforge->drop_column('hpatcon1', 'pdisposition');
		//$this->dbforge->drop_column('hpatcon1', 'psessionnoimrt');
		//$this->dbforge->drop_column('hpatcon1', 'psessiondateimrt');
		//$this->dbforge->drop_column('hpatcon1', 'pNBHearingScreeningTestResult');
		//$this->dbforge->drop_column('hpatcon1', 'pNewbornHearingRegistryNo');
	}
}
