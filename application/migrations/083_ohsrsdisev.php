<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsdisev extends CI_Migration
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

            'emergencyvisits' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'emergencyvisitsadult' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'emergencyvisitspediatric' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'evfromfacilitytoanother' => array(
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

        $this->dbforge->create_table('ohsrsdisev');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsdisev');
    }
}
