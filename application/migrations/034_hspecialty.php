<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hspecialty extends CI_Migration
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
            'hspecialcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'hspecial_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'hspecial_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'default' => null,
                'null' => FALSE,
            ),

            'hspecialstat' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'hspecial_lock' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'date_mod' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'updsw' => array(
                'type' => 'VARCHAR',
                'default' => null,
                'constraint' => 1,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->add_key('hspecialcode', TRUE);
        $this->dbforge->create_table('hspecialty');

        $data = [
            [
                'hspecialcode' => 'SP001',
                'hspecial_name' => 'Disease',
                'hspecial_desc' => 'Tuberculosis',
                'hspecialstat' => 'A',
                'hspecial_lock' => 'N',
                'date_mod' => NULL,
                'updsw' => 'P'
            ],
            [
                'hspecialcode' => 'SP002',
                'hspecial_name' => 'Organ',
                'hspecial_desc' => 'Eye',
                'hspecialstat' => 'A',
                'hspecial_lock' => 'N',
                'date_mod' => NULL,
                'updsw' => 'P'
            ],
            [
                'hspecialcode' => 'SP003',
                'hspecial_name' => 'Patient Class',
                'hspecial_desc' => 'First Class',
                'hspecialstat' => 'A',
                'hspecial_lock' => 'N',
                'date_mod' => NULL,
                'updsw' => 'P'
            ],
            [
                'hspecialcode' => 'SP004',
                'hspecial_name' => 'Others',
                'hspecial_desc' => 'others',
                'hspecialstat' => 'A',
                'hspecial_lock' => 'N',
                'date_mod' => NULL,
                'updsw' => 'P'
            ],
        ];

        $this->db->insert_batch('hspecialty', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('hspecialty');
    }
}
