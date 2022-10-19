<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsopthai extends CI_Migration
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

            'numhai' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'numdischarges' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'infectionrate' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'patientnumvap' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'totalventilatordays' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'resultvap' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'patientnumbsi' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'totalnumcentralline' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'resultbsi' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'patientnumuti' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'totalcatheterdays' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'resultuti' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'numssi' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'totalproceduresdone' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'resultssi' => array(
                'type' => 'FLOAT',
                'constraint' => "11,2",
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->create_table('ohsrsopthai');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsopthai');
    }
}
