<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphcont extends CI_Migration
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
			'disamtpf' =>
            array(
                'type' => 'DECIMAL',
                'constraint' => '12,2',
                'null' => TRUE,
            ),
		);

		$this->dbforge->add_column('hphcont', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hphcont', 'disamtpf');
	}
}
