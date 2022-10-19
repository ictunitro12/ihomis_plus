<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_hdmhdrprice extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$addstkdelv = array(
			'lot_no' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE),
           'entry_by' =>
                array(
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => TRUE),

           'uprice' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '4,2',
                'null' => FALSE,
                'default' => 0.00,
				'null' => TRUE),
          'unitcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE) );

		$this->dbforge->add_column('hstkdelivery', $addstkdelv);

        $addhdmhdrprice = array(
			'entry_by' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE),
           'serve_no' =>
                array(
                'type' => 'VARCHAR',
                'constraint' => '5',
                'null' => TRUE),
           'serve_price' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '4,2',
                'null' => FALSE,
                'default' => 0.00,
				'null' => TRUE));
        $this->dbforge->add_column('hdmhdrprice',$addhdmhdrprice);  
	}

	public function down()
	{
		//$this->dbforge->drop_column('hperson', 'ipgroup');
        
	}

/* 

alter table hstkdelivery add column lot_no varchar(50) NULL;
alter table hstkdelivery add column entry_by varchar(10) NULL;
alter table hstkdelivery add column uprice decimal(4,2);
alter table hstkdelivery add column unitcode varchar(5)NULL;

alter table hdmhdrprice add column entry_by varchar(10) NULL;
alter table hdmhdrprice add column serve_no varchar(5) NULL;
alter table hdmhdrprice add column serve_price decimal(4,2); NULL; */


}
