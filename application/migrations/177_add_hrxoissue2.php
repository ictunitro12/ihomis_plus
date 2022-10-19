<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hrxoissue2 extends CI_Migration
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
                'lotno' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 25,
                    'NULL' => TRUE,
                    'default' => null
                ), 
                'pcchrgamt' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '12,2',
                    'NULL' => TRUE,
                    'default' => null
                ),
                'pchrgup' => array(
                    'type' => 'DECIMAL',
                    'constraint' => '12,2',
                    'NULL' => TRUE,
                    'default' => null
                ),
                
            );
        $this->dbforge->add_column('hrxoissue', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hrxoissue', 'lotno');
		$this->dbforge->drop_column('hrxoissue', 'pacchrgamt');
        $this->dbforge->drop_column('hrxoissue', 'pchrgup');
    }
}
