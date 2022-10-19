<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hassecobasic extends CI_Migration
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

            'fan_lackreg_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_lackreg_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_nutrion_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_nutrion_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_documented_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_documented_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_other_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'fan_other_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_absence_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_absence_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_substandard_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_substandard_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_other_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'shelter_other_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_unemp_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_unemp_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_under_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_under_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_inappro_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'employment_inappro_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ecores_insufficentcom_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ecores_insufficentcom_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ecores_insufficentres_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ecores_insufficentres_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp2_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp2_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'transpo_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'transpo_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp3_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp3_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'basicneedsys_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'basicneedsys_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectab_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectab_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectsu_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectsu_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectex_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'affectex_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp4_si' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'othersp4_di' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'assessment' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),

            'recomended' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);

        $this->dbforge->create_table('hassecobasic');
    }

    public function down()
    {
        $this->dbforge->drop_table('hassecobasic');
    }
}
