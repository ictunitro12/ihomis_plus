<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hdengue extends CI_Migration
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
            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'member_of_IP' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'pconsult' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'date_consult' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'place_consult' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => TRUE,
            ),

            'date_onset' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'no_dose_received' => array(
                'type' => 'INT',
                'null' => TRUE,
            ),

            'date_vaccine_1st' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_vaccine_last' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'clinical_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'NS1RDT_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'NS1RDT_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'IgG_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'IgG_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'IgM_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'IgM_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'PCR_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'PCR_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'case_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'entry_date' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ),

            'date_modified' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'PCR_positive_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hdengue');
    }

    public function down()
    {
        $this->dbforge->drop_table('hdengue');
    }
}
