<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Htyphoid extends CI_Migration
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

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => TRUE,
            ),

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'pat_address_street_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'pat_address_brgy' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => TRUE,
            ),

            'pat_address_city' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => TRUE,
            ),

            'pat_address_prov' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => TRUE,
            ),

            'pat_address_reg' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'pat_perm_address_street_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'pat_perm_address_brgy' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => TRUE,
            ),

            'pat_perm_address_city' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => TRUE,
            ),

            'pat_perm_address_prov' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => TRUE,
            ),

            'pat_perm_address_reg' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'member_of_IP' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'ip_tribe' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'consulted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dateoffirstconsult' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'placeofconsultation' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'admitted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dateseenconsult' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'dateonset' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'caseclass' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'outcome' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'typeofdru' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'specimen_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'date_colllected' => array(
                'type' => 'DATE',
                'null' => TRUE,
            ),

            'test_performed' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'test_performed_others' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'user_id' => array(
                'type' => 'INT',
                'null' => FALSE,
            ),

            'Timestamp' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'last_modified_by' => array(
                'type' => 'INT',
                'null' => FALSE,
            ),

            'verification_level' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE,
            ),

            'date_specimen_collected' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'widal' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'Typhidot' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'tubex' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'stblcult' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'last_modified_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('htyphoid');
    }

    public function down()
    {
        $this->dbforge->drop_table('htyphoid');
    }
}
