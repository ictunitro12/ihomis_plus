<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsstaffpatoth extends CI_Migration
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

            'parentprof' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'professiondesignation' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'specialtyboardcertified' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fulltime40permanent' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fulltime40contractual' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'parttimepermanent' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'parttimecontractual' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'activerotatingaffiliate' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'outsourced' => array(
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

        $this->dbforge->create_table('ohsrsstaffpatoth');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsstaffpatoth');
    }
}
