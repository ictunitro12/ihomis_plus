<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_ci_sessions_table extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => 45,
            ),
            'timestamp' => array(
                'type' => 'INT',
                'constraint' => 10,
                'default' => 0,
                'unsigned' => TRUE,
                'null' => FALSE,
            ),
            'data' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('timestamp', TRUE);
        $this->dbforge->create_table('ci_sessions');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}
