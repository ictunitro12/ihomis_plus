<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hhomemedication extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = array(
            'enccode' => array(
                'type' => 'varchar',
                'constraint' => 48,
                'NULL' => TRUE,
                'default' => null
            )
        );

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_column('hhomemedication', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hhomemedication', 'enccode');
    }
}
