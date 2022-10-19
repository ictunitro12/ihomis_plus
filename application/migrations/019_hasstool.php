<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hasstool extends CI_Migration
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

            'owned' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'rent' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'institution' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'homeless' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'educ_attain_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'employer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'income' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'percapincome' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'osmsenior' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'osmbarangay' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'osmmbh' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'osmpwd' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'osindigen' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'osminformantname' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'osrelativetopatient' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'osaddress_informant' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'lselectric' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'lskeros' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'lscandle' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'wsartesian' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'wspublic' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'wsowned' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'wswaterdist' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'fs_gas' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'fs_firewood' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'fs_charcoal' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_food' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_educ' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_clothing' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_transpo' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_househelp' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_medexped' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_insurpremium' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_traspo' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_other' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'sep' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'totalmon_expendi' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'klashared' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'hasaddress' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),

            'sourcereff' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),

            'reftelno' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'fcapable' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'phicdirect' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'phicindirect' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'inoper' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ioper' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'opatient' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'npatient' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'caseforward' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'closedcase' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'DPS' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'PTD' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'PTP' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'HAP' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'fc_houselot' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'occup_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'osother' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'household' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'othsourceincome' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'reltopatient' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'compupad' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'tempaddress' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),

            'datntrview' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'osotherspec' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'default' => null,
                'null' => TRUE,
            ),

            'spec' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);

        $this->dbforge->create_table('hasstool');
    }

    public function down()
    {
        $this->dbforge->drop_table('hasstool');
    }
}
