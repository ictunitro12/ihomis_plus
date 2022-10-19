<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Labnormal_Value extends CI_Migration
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
            'normalvalue_id' =>
            array(
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'NULL' => FALSE,
                'auto_increment' => TRUE
            ),
            'testresultid' =>
            array(
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'NULL' => FALSE,
            ),
            'description' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'NULL' => FALSE,
             ),
             'normalvalue' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'NULL' => FALSE,
             ),
             'maxnormalvalue' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'NULL' => FALSE,
             ),
            'minnormalvalue' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'NULL' => FALSE,
             ),
             'unit' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'NULL' => TRUE,
             ),
             'sex' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'NULL' => FALSE,
             ),
             'stat' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'NULL' => FALSE,
             ),
            'date_created' => 
            array(
                'type' => 'DATETIME',
                'NULL' => FALSE,
            ),
            'date_modified' => 
            array(
                'type' => 'DATETIME',
                'NULL' => FALSE,
            ),
        ));
        $this->dbforge->add_key('normalvalue_id', TRUE);
        $this->dbforge->add_key('testresultid', TRUE);
        $this->dbforge->create_table('labnormal_value');
    }

    public function down()
    {
        $this->dbforge->drop_table('labnormal_value');
    }
}
