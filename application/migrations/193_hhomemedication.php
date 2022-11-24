<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hhomemedication extends CI_Migration
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
            'LogID' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => false,
            ),

            'dmdcomb' => array(
                'type' => 'VARCHAR',
                'constraint' => 12,
                'null' => false,
            ),

            'dmdctr' => array(
                'type' => 'DECIMAL',
                'constraint' => '2,0',
                'null' => false,
            ),

            'instructions' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ),

            'datemod' => array(
                'type' => 'DATETIME',
                'null' => false,
            ),

            'drugdesc' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'referraltransactioncode' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('dmdcomb', TRUE);
        $this->dbforge->add_key('dmdctr', TRUE);
        $this->dbforge->create_table('hhomemedication');
    }

    public function down()
    {
        $this->dbforge->drop_table('hhomemedication');
    }
}
