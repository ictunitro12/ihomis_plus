<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hafp_labdata extends CI_Migration
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

            'hafpctr' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ),

            'date_collected' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'date_sent_RITM' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'date_received_RITM' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ),

            'specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'amount_stool' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'no_ice_packs' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'quality_ice_packs' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ),

            'type_container' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'name_courier' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'recieved_by' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'entry_date' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'date_modified' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),
        ));
        
        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hafp_labdata');
    }

    public function down()
    {
        $this->dbforge->drop_table('hafp_labdata');
    }
}
