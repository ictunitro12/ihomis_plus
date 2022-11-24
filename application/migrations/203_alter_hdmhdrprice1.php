<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hdmhdrprice1 extends CI_Migration
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
            'isActive' => array(
                'type' => 'char',
                'constraint' => 1,
                'NULL' => TRUE,
                'default' => null
            )
        );
    $this->dbforge->add_column('hdmhdrprice', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hdmhdrprice', 'isActive');
    }
}
