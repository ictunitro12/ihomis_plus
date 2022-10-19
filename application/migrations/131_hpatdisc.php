<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hpatdisc extends CI_Migration
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
			'dischrgorder' =>
            array(
                'type' => 'INT',
                'null' => TRUE,
            ),
			'discto' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),
			'discamount' =>
            array(
                'type' => 'DECIMAL',
                'constraint' => '12,2',
                'null' => TRUE,
            ),
			'discamountpf' =>
            array(
                'type' => 'DECIMAL',
                'constraint' => '12,2',
                'null' => TRUE,
            ),
		);

		$this->dbforge->add_column('hpatdisc', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpatdisc', 'dischrgorder');
		$this->dbforge->drop_column('hpatdisc', 'discto');
		$this->dbforge->drop_column('hpatdisc', 'discamount');
		$this->dbforge->drop_column('hpatdisc', 'discamountpf');
	}
}
