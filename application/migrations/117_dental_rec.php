<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Dental_Rec extends CI_Migration
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

            'dodate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'dotime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'dencounter' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'dtoe' => array(
                'type' => 'CHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our1' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our2' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our3' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our4' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our5' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our6' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our7' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_our8' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur1' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul1' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul2' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul3' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul4' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul5' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul6' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul7' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_oul8' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr5' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr6' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr7' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_olr8' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll5' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll6' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll7' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_oll8' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'serv_rend' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'tooth_no' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'rem' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oura' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_ourb' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_ourc' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_ourd' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oure' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_oule' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_ould' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_oulc' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_oulb' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_oula' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oula' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oulb' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oulc' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_ould' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klab_oule' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_olre' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_olrd' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_olrc' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_olrb' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_olra' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'diag' => array(
                'type' => 'varCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'exam_by' => array(
                'type' => 'CHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_all' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_cd' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_kd' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_diab' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_rf' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_ast' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_bd' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_cc' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_dis' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pmh_bp' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_ext' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_ds' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_pt' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_ft' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_perthep' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'pdh_oth' => array(
                'type' => 'CHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'c_cog' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_oh' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_gc' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_ln' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_bt' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_ct' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'c_st' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'occ_fmr' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'occ_cr' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'occ_clas' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ot_guard' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ot_lvd' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ot_chicom' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ot_ref' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ot_tel' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->create_table('dental_rec');
    }

    public function down()
    {
        $this->dbforge->drop_table('dental_rec');
    }
}
