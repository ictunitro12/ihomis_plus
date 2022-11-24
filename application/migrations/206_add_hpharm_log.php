<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hpharm_log extends CI_Migration
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
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
                'auto_increment' => TRUE,
            ),

            'trantype' => array(
                'type' => 'TEXT',
                'default' => null,
                'null' => TRUE,
            ),

            'description' => array(
                'type' => 'TEXT',
                'default' => null,
                'null' => TRUE,
            ),

            'dmdcomb' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'default' => null,
                'null' => TRUE,
            ),

            'dmhdrsub' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'qty' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'unitcost' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'stockbal' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'dmdctr' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'lot_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'baldteasof' => array(
                'type' => 'datetime',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'default' => null,
                'null' => TRUE,
            ),

            'ref_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('hpharm_log');
    }

    public function down()
    {
        $this->dbforge->drop_table('hpharm_log');
    }
}
