<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hexpense_Enc extends CI_Migration
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
            'ReportingYear' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => false,
            ),

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'exp_wage' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_benefits' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_allowances' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_med' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_medsup' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_util' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_nonmed' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_infra' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_equipment' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_tot_wba_ly' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_tot_mooe' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_co' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

            'exp_gtotal' => array(
                'type' => 'DOUBLE',
                'default' => null,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->create_table('hexpense_enc');
    }

    public function down()
    {
        $this->dbforge->drop_table('hexpense_enc');
    }
}
