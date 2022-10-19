<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Role_Groups extends CI_Migration
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
            'rolegrpID' =>
            array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => FALSE,
            ),
            'groupID' =>
            array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),
            'roleID' =>
            array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('rolegrpID', TRUE);

        $this->dbforge->create_table('role_groups');
    }

    public function down()
    {
        $this->dbforge->drop_table('role_groups');
    }
}
