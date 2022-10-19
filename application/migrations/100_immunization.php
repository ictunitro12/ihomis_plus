<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Immunization extends CI_Migration
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
            'immu_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ),

            'short_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'immu_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 500,
                'default' => null,
                'null' => FALSE,
            ),

            'status' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'updsw' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'confdl' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'datemod' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'cvx_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('immu_code', TRUE);
        $this->dbforge->create_table('immunization');
    }

    public function down()
    {
        $this->dbforge->drop_table('immunization');
    }
}
