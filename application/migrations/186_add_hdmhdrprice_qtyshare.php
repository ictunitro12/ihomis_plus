<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hdmhdrprice_qtyshare extends CI_Migration
{
    private $tables;
  
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $hdmhhdrprice= array(
        'qtyshare' => array(
        'type' => 'INT',
        'constraint' =>'11',
        'NULL' => TRUE,
        'default' => null));
        $this->dbforge->add_column('hdmhdrprice', $hdmhhdrprice);
    }   

    public function down()
    {
        $this->dbforge->drop_column('hdmhdrprice','qtyshare');
    }
}
