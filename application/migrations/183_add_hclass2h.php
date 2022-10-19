<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hclass2h extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $hclass2h = array(
                'itemcode' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 25,
                    'NULL' => TRUE,
                    'default' => null
                ), 
                'hclass2sub' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '6',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'stockbal' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'default' => null
                ),
                'begbal' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'expiry' => array(
                    'type' => 'date',
                    'constraint' => '',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'entry_by' => array(
                    'type' => 'varchar',
                    'constraint' => '10',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'remarks' => array(
                    'type' => 'text',
                    'constraint' => '',
                    'NULL' => TRUE,
                    'default' => null
                )
            );

           
           
            $this->dbforge->add_column('hclass2h', $hclass2h);
            
    
    
    }

    public function down()
    {
        $hclass2 = array('itemcode,hclass2sub,stockbal,begbal,expiry,entry_by,remarks');
        $this->dbforge->drop_column('hclass2h',$hclass2);
    }
}
