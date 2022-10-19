<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Labresult_Value extends CI_Migration
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
            'resultid' =>
            array(
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'NULL' => FALSE,
                'auto_increment' => TRUE
            ),
            'resulttype' =>
             array(
                'type' => 'VARCHAR',
                'constraint' => 100,
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

        $this->dbforge->add_key('resultid', TRUE);

        $this->dbforge->create_table('labresult_value');
    }

    public function down()
    {
        $this->dbforge->drop_table('labresult_value');
    }
}
