<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hopdlog_ins_code extends CI_Migration
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
                'type' => 'VARCHAR',
                'constraint' => 255,
                'NULL' => TRUE,
                'default' => null
            ), 
            'cbcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'NULL' => TRUE,
                'default' => null
            )
        );
    $this->dbforge->add_column('hopdlog', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hopdlog', 'dcspinst');
		$this->dbforge->drop_column('hopdlog', 'cbcode');
    }
}
