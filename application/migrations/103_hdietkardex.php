<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hdietkardex extends CI_Migration
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

            'DentCond' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'FIntolerance' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'Fallergy' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'DNinteract' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'Flikes' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'FDlikes' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'BevPrefBF' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'BevPrefL' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'BevPrevSup' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'SpecNourish' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'SpecNourishBFCutoff' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'SpecNourishLCutoff' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'SpecNourishSupCutoff' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'date_report' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'datemodified' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->create_table('hdietkardex');
    }

    public function down()
    {
        $this->dbforge->drop_table('hdietkardex');
    }
}
