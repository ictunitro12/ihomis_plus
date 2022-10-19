<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Haddr2 extends CI_Migration
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
            'hpercode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),
            'patstr' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),
            'brg' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'default' => null,
                'null' => TRUE,
            ),
            'ctycode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'default' => null,
                'null' => TRUE,
            ),
            'provcode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'default' => null,
                'null' => TRUE,
            ),
            'patzip' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),
            'cntrycode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),
            'addstat' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'addlock' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'datemod' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
            'updsw' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'confdl' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => FALSE,
            ),
            'haddr2dte' =>
            array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),
            'entryby' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),
            'distzip' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->add_key('haddrdte', TRUE);

        $this->dbforge->create_table('haddr2');
    }

    public function down()
    {
        $this->dbforge->drop_table('haddr2');
    }
}
