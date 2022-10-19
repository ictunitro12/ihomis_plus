<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Vawc_perpet extends CI_Migration
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
			'mobile' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
			),

			'per_zipcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '4',
				'null' => TRUE,
			),

			'child_perp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => TRUE,
			),

			'child_perplast' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => TRUE,
			),

			'child_perpmiddle' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => TRUE,
			),

			'rel_of_guardian' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'child_perpaddress' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '300',
				'null' => TRUE,
			),

			'landline' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '15',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('vawc_perpet', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('vawc_perpet', 'mobile');
		$this->dbforge->drop_column('vawc_perpet', 'per_zipcode');
		$this->dbforge->drop_column('vawc_perpet', 'child_perp');
		$this->dbforge->drop_column('vawc_perpet', 'child_perplast');
		$this->dbforge->drop_column('vawc_perpet', 'child_perpmiddle');
		$this->dbforge->drop_column('vawc_perpet', 'rel_of_guardian');
		$this->dbforge->drop_column('vawc_perpet', 'child_perpaddress');
		$this->dbforge->drop_column('vawc_perpet', 'landline');
	}
}
