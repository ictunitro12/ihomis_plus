<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hfamilycomp extends CI_Migration
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

            'familyfirst' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'familylast' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'familymiddle' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'famlysuffix' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'civil_stat' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'reltopat' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'educattain' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'famoccupation' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'datemod' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'typepatient' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'fam_sex' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'seqid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

            'AGE' => array(
                'type' => 'INT',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'montincome' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->add_key('seqid', TRUE);
        $this->dbforge->create_table('hfamilycomp');
    }

    public function down()
    {
        $this->dbforge->drop_table('hfamilycomp');
    }
}
