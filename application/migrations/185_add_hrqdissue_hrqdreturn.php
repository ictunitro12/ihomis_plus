<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hrqdissue_hrqdreturn extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $hqrdissue= array(
            'hclass2sub' => array(
            'type' => 'VARCHAR',
            'constraint' =>'6',
            'NULL' => TRUE,
            'default' => null),

            'cl2dteas' => array(
            'type' => 'DATETIME',
            //'constraint' =>'',
            'NULL' => TRUE,
            'default' => null),

            'itemcode' => array(
            'type' => 'VARCHAR',
            'constraint' =>'25',
            'NULL' => TRUE,
            'default' => null),

            'chrgcode' => array(
            'type' => 'VARCHAR',
            'constraint' =>'5',
            'NULL' => TRUE,
            'default' => null),
                
            'pcchrgamt' => array(
            'type' => 'DECIMAL',
            'constraint' =>'12,0',
            'NULL' => TRUE,
            'default' => null),

            'pchrgup' => array(
            'type' => 'DECIMAL',
            'constraint' =>'12,0',
            'NULL' => TRUE,
            'default' => null));


            $hqrdreturn= array(
                'hclass2sub' => array(
                'type' => 'VARCHAR',
                'constraint' =>'6',
                'NULL' => TRUE,
                'default' => null),
    
                'cl2dteas' => array(
                'type' => 'DATETIME',
                //'constraint' =>'6',
                'NULL' => TRUE,
                'default' => null),
    
                'itemcode' => array(
                'type' => 'VARCHAR',
                'constraint' =>'25',
                'NULL' => TRUE,
                'default' => null),
    
                'chrgcode' => array(
                'type' => 'VARCHAR',
                'constraint' =>'5',
                'NULL' => TRUE,
                'default' => null),
                    
                'pcchrgamt' => array(
                'type' => 'DECIMAL',
                'constraint' =>'12,0',
                'NULL' => TRUE,
                'default' => null),
    
                'pchrgup' => array(
                'type' => 'DECIMAL',
                'constraint' =>'12,0',
                'NULL' => TRUE,
                'default' => null));
            $this->dbforge->add_column('hrqdissue', $hqrdissue);
            $this->dbforge->add_column('hrqdreturn', $hqrdreturn);
    }

    public function down()
    {
        $hqrdissue = array('hclass2sub,cl2dteas,itemcode,chrgcode,pcchrgamt,pcchrgamt,pchrgup');
        $hqrdreturn = array('type,begbal,stockbal,hclass2sub');
        $this->dbforge->drop_column('hqrdissue',$hqrdissue);
        $this->dbforge->drop_column('hrqdreturn', $hqrdreturn);
    }
}
