<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Roles extends CI_Migration
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
            'roleID' =>
            array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => FALSE,
            ),
            'roleName' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => FALSE,
            ),
            'roleDesc' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 35,
                'null' => FALSE,
            ),
            'roleStat' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => FALSE,
            ),
            'dateadd' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
            'datemod' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('roleID', TRUE);

        $this->dbforge->create_table('roles');
    }

    public function down()
    {
        $this->dbforge->drop_table('roles');
    }
}
