<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hcpnreferralfrom_Columns extends CI_Migration
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
			'patientDistCode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				'null' => true,
				'default' => null
			),
			'ret_disp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				'null' => true,
				'default' => null
			),

			'ret_disp_others' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
				'default' => null
			),

			'ret_trans_fhudto' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'null' => true,
				'default' => null
			),

			'ret_entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 15,
				'null' => true,
				'default' => null
			),

			'ret_datemod' =>
			array(
				'type' => 'DATETIME',
				'null' => true,
				'default' => null
			),

			'patientpan' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 20,
				'null' => true,
				'default' => null
			),

			'patientcivilstatus' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 1,
				'null' => true,
				'default' => null
			),
		);

		$this->dbforge->add_column('hcpnreferralfrom', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hcpnreferralfrom', 'patientDistCode');
		$this->dbforge->drop_column('hcpnreferralfrom', 'ret_disp');
		$this->dbforge->drop_column('hcpnreferralfrom', 'ret_disp_others');
		$this->dbforge->drop_column('hcpnreferralfrom', 'ret_trans_fhudto');
		$this->dbforge->drop_column('hcpnreferralfrom', 'ret_entryby');
		$this->dbforge->drop_column('hcpnreferralfrom', 'ret_datemod');
		$this->dbforge->drop_column('hcpnreferralfrom', 'patientpan');
		$this->dbforge->drop_column('hcpnreferralfrom', 'patientcivilstatus');
	}
	
}