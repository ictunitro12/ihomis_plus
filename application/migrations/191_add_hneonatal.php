<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hneonatal extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$this->dbforge->add_field(array(
			'enccode' =>
			array(
				'type' => 'varchar',
				'constraint' => '48',
				'NULL' => FALSE
			),
			'hpercode' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'NULL' => FALSE
			),
			'admitted' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE
			),
			'date_admitted' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'date_onset' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'babysuckcry2days' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'babysuckcry328days' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'convulsions' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'umbilical' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'totalpregnancies' => array(
				'type' => 'varchar',
				'constraint' => '2',
				'NULL' => TRUE,
			),
			'livebirths' => array(
				'type' => 'varchar',
				'constraint' => '2',
				'NULL' => TRUE,
			),
			'livingchildren' => array(
				'type' => 'varchar',
				'constraint' => '2',
				'NULL' => TRUE,
			),
			'prenatalcarevisit' => array(
				'type' => 'varchar',
				'constraint' => '2',
				'NULL' => TRUE,
			),
			'whenprenatalcarevisit' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'prenatalcarehistory' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'reasonnoprenatal' => array(
				'type' => 'varchar',
				'constraint' => '100',
				'NULL' => TRUE,
			),
			'dosesoftetanus' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'datelastdose' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'received2doses' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'immunizationreported' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'tetanusdate1' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'tetanusdate2' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'tetanusdate3' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'tetanusdate4' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'tetanusdate5' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'protectedatbirth' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'placedelivery' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'placedeliveryothers' => array(
				'type' => 'varchar',
				'constraint' => '150',
				'NULL' => TRUE,
			),
			'namehospitallyingin' => array(
				'type' => 'varchar',
				'constraint' => '150',
				'NULL' => TRUE,
			),
			'cordcut' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'cordcutothers' => array(
				'type' => 'varchar',
				'constraint' => '150',
				'NULL' => TRUE,
			),
			'attendedelivery' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'attendedeliveryothers' => array(
				'type' => 'varchar',
				'constraint' => '150',
				'NULL' => TRUE,
			),
			'stump' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'stumpothers' => array(
				'type' => 'varchar',
				'constraint' => '150',
				'NULL' => TRUE,
			),
			'caseclassification' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'outcome' => array(
				'type' => 'varchar',
				'constraint' => '50',
				'NULL' => TRUE,
			),
			'date_died' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'typeofdru' => array(
				'type' => 'varchar',
				'constraint' => '1',
				'NULL' => TRUE,
			),
			'entryby' => array(
				'type' => 'varchar',
				'constraint' => '15',
				'NULL' => TRUE,
			),
			'entry_date' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'modifiedby' => array(
				'type' => 'varchar',
				'constraint' => '15',
				'NULL' => TRUE,
			),
			'date_modified' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'date_report' => array(
				'type' => 'datetime',
				'NULL' => TRUE,
			),
			'date_investigation' => array(
				'type' => 'datetime',
				'NULL' => TRUE
			)
		));
		$this->dbforge->add_key('enccode', TRUE);
		$this->dbforge->create_table('hneonataltetanus');
	}

	public function down()
	{
		$this->dbforge->drop_table('hneonataltetanus');
	}
}
