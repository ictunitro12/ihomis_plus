<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Diph extends CI_Migration
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
                'constraint' => 48,
                'NULL' => FALSE
            ),
            'hpercode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'NULL' => FALSE
            ),
            'typeofdru' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'NULL' => TRUE,
            ),
            'occupation' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'NULL' => TRUE,
                
            ),
            'phone_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'NULL' => TRUE,
                
            ),
            'admitted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'NULL' => TRUE,
            ),
            'date_admitted' => array(
                'type' => 'DATETIME',
                'NULL' => FALSE,
            ),
            'caregiver' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'NULL' => TRUE,
                
            ),
            'caregiver_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 20, 
                'NULL' => TRUE,
                
            ),
            'date_report' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE,
            ),
            'reporter' => array(
                'type' => 'VARCHAR',
                'constraint' => 150, 
                'NULL' => TRUE,
                
            ),
            'reporter_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 20, 
                'NULL' => TRUE,
                
            ),
            'date_investigation' => array(
                'type' => 'DATETIME',
                'NULL' => TRUE,
            ),
            'investigator' => array(
                'type' => 'VARCHAR',
                'constraint' => 150, 
                'NULL' => TRUE,
                
            ),
            'investigator_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 20, 
                'NULL' => TRUE,
                
            ),
            'diphtheria_dose' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'total_dose' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'date_last_vaccination' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE,
            ),
            'known_exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 20, 
                'NULL' => TRUE,
                
            ),
            'exposure_other' => array(
                'type' => 'VARCHAR',
                'constraint' => 150, 
                'NULL' => TRUE,
                
            ),
            'name_school' => array(
                'type' => 'VARCHAR',
                'constraint' => 150, 
                'NULL' => TRUE,
                
            ),
            'travel14days' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'travel_detail' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'NULL' => TRUE,
                
            ),
            'date_onset' => array(
                'type' => 'DATETIME',
                'NULL' => FALSE,
            ),
            'fever' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'cough' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'sorethroat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'pseudomembrane' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'swallowing' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE
            ),
            'breathing' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE
            ),
            'other_symptoms' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE
            ),
            'other_symptoms_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 150, 
                'NULL' => TRUE,
                
            ),
            'outcome' => array(
                'type' => 'VARCHAR',
                'constraint' => 50, 
                'NULL' => TRUE,
                
            ),
            'date_died' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE
            ),
            'antibiotic' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE,
            ),
            'antibiotic_date' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE
            ),
            'diphtheriatoxin' => array(
                'type' => 'VARCHAR',
                'constraint' => 1, 
                'NULL' => TRUE
            ),
            'final_classi' => array(
                'type' => 'VARCHAR',
                'constraint' => 50, 'NULL' => TRUE,
                
            ),
            'sourceinformation' => array(
                'type' => 'VARCHAR',
                'constraint' => 50, 
                'NULL' => TRUE,
                
            ),
            'diphtheriatoxin_date' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE,
            ),
            'datecollection' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE,
            ),
            'datesample' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE,
            ),
            'daterslt' => array(
                'type' => 'DATETIME', 
                'NULL' => TRUE
            ),
            'checkapplies' => array(
                'type' => 'VARCHAR',
                'constraint' => 2, 
                'NULL' => TRUE
            ),
            'ifpositiv' => array(
                'type' => 'VARCHAR',
                'constraint' => 3, 
                'NULL' => TRUE,
            ),
            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'NULL' => FALSE,
                
            ),
            'entry_date' => array(
                'type' => 'DATETIME',
                'NULL' => FALSE,
            ),
            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15, 
                'NULL' => TRUE,
                
            ),
            'date_modified' => array(
                'type' => 'DATETIME',
                'NULL' => TRUE,
            ),
            'date_uploaded' => array(
                'type' => 'DATETIME',
                'NULL' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('diph');
    }

    public function down()
    {
        $this->dbforge->drop_table('diph');
    }
}
