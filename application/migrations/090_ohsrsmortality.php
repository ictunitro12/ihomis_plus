<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrsmortality extends CI_Migration
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
            'mortal_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ),

            'mortal_index' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

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

            'icd10desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => false,
            ),

            'munder1' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'funder1' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm1to4' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f1to4' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm5to9' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f5to9' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm10to14' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f10to14' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm15to19' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f15to19' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm20to24' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f20to24' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm25to29' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f25to29' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm30to34' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f30to34' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm35to39' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f35to39' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm40to44' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f40to44' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm45to49' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f45to49' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm50to54' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f50to54' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm55to59' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f55to59' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm60to64' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f60to64' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm65to69' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f65to69' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'm70over' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'f70over' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'msubtotal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'fsubtotal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'grandtotal' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'icd10code' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'icd10category' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->add_key('mortal_id', TRUE);

        $this->dbforge->create_table('ohsrsmortality');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrsmortality');
    }
}
