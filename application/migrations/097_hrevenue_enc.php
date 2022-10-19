<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hrevenue_Enc extends CI_Migration
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
            'ReportingYear' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => false,
            ),

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'rev_doh' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_lgu' => array(
                'type' => 'DOUBLE',                
                'default' => null,
                'null' => TRUE,
            ),

            'rev_donor' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_priv' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_phic' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_direct' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_reim' => array(
                'type' => 'DOUBLE',              
                'default' => null,
                'null' => TRUE,
            ),

            'rev_oth' => array(
                'type' => 'DOUBLE',               
                'default' => null,
                'null' => TRUE,
            ),

            'rev_gtotal' => array(
                'type' => 'DOUBLE',                
                'default' => null,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->create_table('hrevenue_enc');
    }

    public function down()
    {
        $this->dbforge->drop_table('hrevenue_enc');
    }
}
