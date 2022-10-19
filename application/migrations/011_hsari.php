<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hsari extends CI_Migration
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
				'type' => 'VARCHAR',
				'constraint' => '48',
				'null' => FALSE,
			),

			'hpercode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '20',
				'null' => FALSE,
			),

			'hfhudcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '19',
				'null' => FALSE,
			),

			'toecode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
				'default' => null,
			),

			'date_seen' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_report' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_onset' =>
			array(
				'type' => 'DATETIME',
				'null' => FALSE,
			),

			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => FALSE,
			),

			'sari_fever' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'duration' =>
			array(
				'type' => 'INT',
				'constraint' => '11',
				'null' => TRUE,
				'default' => null,
			),

			'sari_headache' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_cough' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_sore' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_breathing' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_hospadm1' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_others1' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'imci_pneumonia1' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_pneumonia2' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_pneumonia3' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_pneumonia4' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_hospadm2' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia1' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia2' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia3' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia4' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia5' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'imci_spneumonia6' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_hospadm3' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_pathogen' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'sari_household' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_school' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_dcontact' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_histtravel' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_travel' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_arrival' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_pentry' =>
			array(
				'type' => 'CHAR',
				'constraint' => '5',
				'null' => TRUE,
				'default' => null,
			),

			'sari_country' =>
			array(
				'type' => 'CHAR',
				'constraint' => '5',
				'null' => TRUE,
				'default' => null,
			),

			'sari_flight' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => null,
			),

			'sari_pexit' =>
			array(
				'type' => 'CHAR',
				'constraint' => '5',
				'null' => TRUE,
				'default' => null,
			),

			'sari_bats' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_camels' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_horses' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_poultry' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_pigs' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_others2' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_ainfluenza' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_vaccination' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_others3' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_testinfluenza' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_virusisolation' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_others4' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage1' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineagetext1' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage_ndeter1' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_released1' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage2' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineagetext2' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage_ndeter2' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_released2' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage3' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineagetext3' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage_ndeter3' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_released3' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released5' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released6' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released7' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage4' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineagetext4' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'sari_lineage_ndeter4' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'date_released4' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released8' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released9' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_released10' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sari_others5' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
				'default' => null,
			),

			'date_released11' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'specimen_code' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '3',
				'null' => TRUE,
				'default' => null,
			),

			'member_of_IP' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
				'default' => null,
			),

			'influenza_A_H7N9' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'influenza_A_H5N1' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'influenza_A_subtype' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'influenza_A_and_B' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'MERS_detected' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'inconclusive_test' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'entry_date' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'date_modified' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'modified_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
				'default' => null,
			),

			'coldte' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'nottested_due' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '500',
				'null' => TRUE,
				'default' => null,
			),

			'nottested_recollect' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '500',
				'null' => TRUE,
				'default' => null,
			),

			'date_released12' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
				'default' => null,
			),

			'sequelae_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '500',
				'null' => TRUE,
				'default' => null,
			),

			'sequelae' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
				'default' => null,
			),

			'caseclasscode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => null,
			),

			'chestxray' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'chestxray_result' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'ranitidine' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'amantidine' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'zanamivir' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'oseltamivir' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'medication_prior_oth' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'med_other_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'asthma' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'chronic_cardiacdis' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'chronic_liverdis' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'chronic_neuro' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'chronic_renaldis' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'diabetes' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'Hamatologic' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'immunodis' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'immunodis' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'pregnant' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'antibiotics' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'antibiotics_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'antivirals' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'antivirals_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'fluidtheraphy' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'fluidtheraphy_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'oxygen' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'oxygen_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'intubation' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'intubation_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'bacterialtesting' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'bacterialtesting_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),

			'othertherapeuticprocedures' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'othertherapeuticprocedures_specify' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
			),
		));

		$this->dbforge->add_key('enccode', TRUE);
		$this->dbforge->create_table('hsari');
	}

	public function down()
	{
		$this->dbforge->drop_table('hsari');
	}
}
