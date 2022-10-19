<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hadmlog_ins extends CI_Migration
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
            'dcspinst' => array(
                    'type' => 'TEXT',
                    'constraint' => 255,
                    'NULL' => TRUE,
                    'default' => null
            ),
        );
    $this->dbforge->modify_column('hadmlog', $fields);
    }

    public function down()
    {
        //$this->dbforge->drop_column('hopdlog', 'dcspinst');
		//$this->dbforge->drop_column('hopdlog', 'cbcode');
    }
}
