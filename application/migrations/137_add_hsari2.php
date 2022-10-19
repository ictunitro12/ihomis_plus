<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hsari2 extends CI_Migration
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
			'sari_specrec' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
				'default' => null,
            ),
			'Hematologic' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '1',
                'null' => TRUE,
				'default' => null,
            ),
		);

		$this->dbforge->add_column('hsari', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hsari', 'sari_specrec');
		$this->dbforge->drop_column('hsari', 'Hematologic');
	}
}
