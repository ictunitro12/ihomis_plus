<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hpatgrpchrg extends CI_Migration
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
			'entryby' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => TRUE,
            ),
		);

		$this->dbforge->add_column('hpatgrpchrg', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hpatgrpchrg', 'entryby');
	}
}
