<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hworkplace extends CI_Migration
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
            'workplaceid' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'workplacedesc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'wpstat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'entrydate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'datemodified' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('workplaceid', TRUE);
        $this->dbforge->create_table('hworkplace');
    }

    public function down()
    {
        $this->dbforge->drop_table('hworkplace');
    }
}
