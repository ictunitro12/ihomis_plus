<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hrxoreturn extends CI_Migration
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
            'pcchrgcod' => array(
                'type' => 'varchar',
                'constraint' => 10,
                'NULL' => TRUE,
                'default' => null
            )
        );
    $this->dbforge->add_column('hrxoreturn', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hrxoreturn', 'pcchrgcod');
    }
}
