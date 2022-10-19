<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hfamrecord extends CI_Migration
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
            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'dteassess' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'dtereport' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'typeclient' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),

            'cmethod' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => FALSE,
            ),

            'cmethod_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'administer' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => TRUE,
            ),

            'schedvisit' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'source' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'givendeworm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dtedeworm' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'dewormdose' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'remark' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hfamrecord');
    }

    public function down()
    {
        $this->dbforge->drop_table('hfamrecord');
    }
}
