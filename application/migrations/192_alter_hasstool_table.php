<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hasstool_Table extends CI_Migration
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
			'datntrview' =>
			array(
				'type' => 'DATETIME',
			),
			'osotherspec' =>
			array(
				'type' => 'VARCHAR',
				'constraint' =>'200',
			),
			'spec' =>
			array(
				'type' => 'VARCHAR',
				'constraint' =>'100',
			),
			'ioper' =>
			array(
				'type' => 'VARCHAR',
				'constraint' =>'5',
			),
		);

		$this->dbforge->add_column('hasstool', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hasstool', 'datntrview');
		$this->dbforge->drop_column('hasstool', 'osotherspec');
		$this->dbforge->drop_column('hasstool', 'spec');
		$this->dbforge->drop_column('hasstool', 'ioper');
	}
}
