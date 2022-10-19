<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hcovidsymptoms extends CI_Migration
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
            'sympID' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'sympdesc' => array(
                'type' => 'VARCHAR',
                'constraint' => 500,
                'default' => null,
                'null' => TRUE,
            ),

            'sympstatus' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'entrydate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'datemodified' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('sympID', TRUE);
        $this->dbforge->create_table('hcovidsymptoms');
    }

    public function down()
    {
        $this->dbforge->drop_table('hcovidsymptoms');
    }
}
