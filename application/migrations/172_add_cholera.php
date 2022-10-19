<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Cholera extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $this->dbforge->add_field(
            array(
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
                'toecode' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 5,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'consulted' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 1,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_consultation' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'place_consultation' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 150,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'admitted' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 1,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_admitted' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_onset' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'mainsourcewater' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 150,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'mainsourcewater_others' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 150,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'caseclassification' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 50,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'outcome' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 50,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_died' => array(
                    'type' => 'DATETIME',
                    'null' => null,
                    'default' => null
                ),
                'typeofdru' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 1,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'entryby' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 15,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'entry_date' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'modifiedby' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 15,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_modified' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_specimen' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'member_of_IP' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 5,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'ip_tribe' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 50,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'stool_result' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 50,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'date_uploaded' => array(
                    'type' => 'DATETIME',
                    'NULL' => TRUE,
                    'default' => null
                ),
            )
        );
        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('cholera');
    }

    public function down()
    {
        $this->dbforge->drop_table('cholera');
    }
}
