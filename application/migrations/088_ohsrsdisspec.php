<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsdisspec extends CI_Migration
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

            'typeofservice' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'nopatients' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'totallengthstay' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'nppay' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'nphservicecharity' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'nphtotal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'phpay' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'phservice' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'phtotal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'hmo' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'owwa' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'recoveredimproved' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'transferred' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'hama' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'absconded' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'unimproved' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'deathsbelow48' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'deathsover48' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'totaldeaths' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'totaldischarges' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'remarks' => array(
                'type' => 'TEXT',
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->create_table('ohsrsdisspec');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsdisspec');
    }
}
