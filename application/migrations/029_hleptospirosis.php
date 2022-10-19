<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hleptospirosis extends CI_Migration
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
            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
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

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'date_seen' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_report' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'pconsult' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),

            'date_consult' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'place_consult' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'admitted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),

            'date_onset' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'region_exp' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => FALSE,
            ),

            'prov_exp' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => FALSE,
            ),

            'city_exp' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => FALSE,
            ),

            'brgy_exp' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => FALSE,
            ),

            'patstr_exp' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ),

            'coldte' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'labor_test' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
                'null' => TRUE,
            ),

            'labor_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'case_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'outcome' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'pidsr_occup' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ),

            'entry_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_modified' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hleptospirosis');
    }

    public function down()
    {
        $this->dbforge->drop_table('hleptospirosis');
    }
}
