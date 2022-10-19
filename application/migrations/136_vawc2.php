<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Vawc2 extends CI_Migration
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
			'cont_relationship' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '2',
                'null' => TRUE,
            ),
		);

		$this->dbforge->add_column('vawc', $fields);

		$modifyFields = array(
			'noi_burn_r' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
		);

		$this->dbforge->modify_column('vawc', $modifyFields);
	}

	public function down()
	{
		$this->dbforge->drop_column('vawc', 'cont_relationship');
	}
}
