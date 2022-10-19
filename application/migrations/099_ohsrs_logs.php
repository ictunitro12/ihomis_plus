<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Ohsrs_Logs extends CI_Migration
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
            'logid' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
            ),

            'function_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'default' => null,
                'null' => TRUE,
            ),

            'report_year' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'default' => null,
                'null' => TRUE,
            ),

            'code' => array(
                'type' => 'VARCHAR',
                'constraint' => 3,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('logid', TRUE);
        $this->dbforge->create_table('ohsrs_logs');
    }

    public function down()
    {
        $this->dbforge->drop_table('ohsrs_logs');
    }
}
