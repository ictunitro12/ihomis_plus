<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hcpnreferral extends CI_Migration
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
                'null' => false,
            ),

            'typeofreferral' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ),

            'referdatetime' => array(
                'type' => 'DATETIME',
                'null' => false,
            ),

            'refertofhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ),

            'referralreason' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ),

            'otherreasons' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'referringprovider' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ),

            'referralprovider' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'othertypeofreferral' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'receivingcontactperson' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'receivingpersondesignation' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'default' => null,
                'null' => TRUE,
            ),

            'remarks' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'referralcategory' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => false,
            ),

            'srfcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ),

            'datetimecalled' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'response' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'receiveddatetime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'datemod' => array(
                'type' => 'DATETIME',
                'null' => false,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ),

            'uploadby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'uploaddatetime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'referraltransactioncode' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'default' => null,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('typeofreferral', TRUE);
        $this->dbforge->add_key('referdatetime', TRUE);
        $this->dbforge->create_table('hcpnreferral');
    }

    public function down()
    {
        $this->dbforge->drop_table('hcpnreferral');
    }
}
