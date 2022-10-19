<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hpatacct_jevno extends CI_Migration
{
    private $tables;
  
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $jevno= array(
        'jev_no' => array(
        'type' => 'VARCHAR',
        'constraint' =>'20',
        'NULL' => TRUE,
        'default' => null));
        $this->dbforge->add_column('hpatacct', $jevno);
    }   

    public function down()
    {
        $this->dbforge->drop_column('hpatacct','jev_no');
    }
}
