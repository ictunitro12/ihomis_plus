<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hclass2bal extends CI_Migration
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
                'reorder_level' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '12,0',
                    'NULL' => TRUE,
                    'default' => null
                ), 
                'begbal' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '12,0',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'hclass2sub' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 6,
                    'null' => FALSE,
                ),
                
            );
        $this->dbforge->add_column('hclass2bal', $fields);
    }

    public function down()
    {
        /* $this->dbforge->drop_table('hclass2bal'); */
    }
}
