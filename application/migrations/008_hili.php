<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hili extends CI_Migration
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

            'hipgroup' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'date_seen' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),
            'date_report' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),

            'travelhistory' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'historyoftravel_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'member_of_IP' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'admitted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
            'date_onset' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),
            'ili_ainfluenza' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'date_vaccination' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),
            'coldte' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),
            'labor_test' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'labor_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'case_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'outcome' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),
            'entry_date' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'null' => FALSE,
            ),
            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),
            'date_modified' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'default' => null,
                'null' => TRUE,
            ),
        ));
        
        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hili');
    }

    public function down()
    {
        $this->dbforge->drop_table('hili');
    }
}
