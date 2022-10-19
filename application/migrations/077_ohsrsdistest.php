<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsdistest extends CI_Migration
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

            'testinggroup' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'default' => null,
                'null' => true,
            ),

            'testing' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'default' => null,
                'null' => TRUE,
            ),

            'number' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->create_table('ohsrsdistest');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsdistest');
    }
}
