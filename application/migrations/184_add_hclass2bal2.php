<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hclass2bal2  extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
            $hclassbal= array(
                'reorder_level' => array(
                    'type' => 'DECIMAL',
                    'constraint' =>'12,0',
                    'NULL' => TRUE,
                    'default' => null
                ), 
                'begbal' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '12,0',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'stockbal' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'default' => null
                ),
                'hclass2sub' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '6',
                    'NULL' => TRUE,
                    'default' => null
                ) );
            $this->dbforge->add_column('hclass2bal', $hclassbal);
    
    }

    public function down()
    {
        $hclass2sub = array('reorder_level,begbal,stockbal,hclass2sub');
        $this->dbforge->drop_column('hclass2bal',$hclass2sub);
    }
}
