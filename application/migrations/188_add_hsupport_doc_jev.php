<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hsupport_doc_jev extends CI_Migration
{
    private $tables;
  
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $hsupport_doc_jev= array(
        'acctno' => array(
        'type' => 'VARCHAR',
        'constraint' =>'14',
        'NULL' => TRUE,
        'default' => null),

        'refdocid' => array(
        'type' => 'INT',
        'constraint' =>'18',
        'NULL' => TRUE,
        'default' => null),
    
        'description' => array(
        'type' => 'TEXT',
        'constraint' =>'',
        'NULL' => TRUE,
        'default' => null),
        
        'refno' => array(
        'type' => 'VARCHAR',
        'constraint' =>'20',
        'NULL' => TRUE,
        'default' => null),

        'create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',

        'date' => array(
        'type' => 'VARCHAR',
        'constraint' =>'10',
        'NULL' => TRUE,
        'default' => null),
        
        'code' => array(
        'type' => 'VARCHAR',
        'constraint' =>'14',
        'NULL' => TRUE,
        'default' => null));
        $this->dbforge->add_field($hsupport_doc_jev);
        $this->dbforge->create_table('hsupport_doc_jev');
    }   

    public function down()
    {
        $this->dbforge->drop_table('hsupport_doc_jev');
    }
}
