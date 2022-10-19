<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrs_Genqm extends CI_Migration
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

            'qmtype' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'accreno' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'descr' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'certbody' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'default' => null,
                'null' => TRUE,
            ),

            'phicaccre' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'validfrom' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'validto' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

        ));

        $this->dbforge->create_table('ohsrs_genqm');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrs_genqm');
    }
}
