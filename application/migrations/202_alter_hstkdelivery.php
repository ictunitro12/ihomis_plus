<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hstkdelivery extends CI_Migration
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
            'ref_no' => array(
                'type' => 'varchar',
                'constraint' => 25,
                'NULL' => TRUE,
                'default' => null
            )
        );
    $this->dbforge->add_column('hstkdelivery', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hstkdelivery', 'ref_no');
    }
}
