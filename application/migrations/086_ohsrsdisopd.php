<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsdisopd extends CI_Migration
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
            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'newfhud' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ),

            'opd_index' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => FALSE,
            ),

            'opdconsultations' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'number' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'icd10code' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'icd10category' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->create_table('ohsrsdisopd');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsdisopd');
    }
}
