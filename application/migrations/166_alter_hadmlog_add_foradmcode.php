<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hadmlog_Add_Foradmcode extends CI_Migration
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
			'foradmcode' =>
			array(
				'type' => 'varchar',
				'constraint' => '48',
				'default' => null,
				'null' => TRUE,
			)
		);

		$this->dbforge->add_column('hadmlog', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hadmlog', 'foradmcode');
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
