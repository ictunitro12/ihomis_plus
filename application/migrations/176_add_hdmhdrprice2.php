<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hdmhdrprice2 extends CI_Migration
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
                'delintkey' => array(
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'NULL' => TRUE,
                    'default' => null
                ), 
                'isshared' => array(
                    'type' => 'CHAR',
                    'constraint' => 1,
                    'NULL' => TRUE,
                    'default' => null
                ),
                'qtyshare' => array(
                    'type' => 'INT',
                    'constraint' => 11,
                    'NULL' => TRUE,
                    'default' => null
                ),
                
            );
        $this->dbforge->add_column('hdmhdrprice', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hdmhdrprice', 'delintkey');
		$this->dbforge->drop_column('hdmhdrprice', 'isshared');
        $this->dbforge->drop_column('hdmhdrprice', 'qtyshare');
    }
}
