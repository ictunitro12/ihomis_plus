<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Vawc extends CI_Migration
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
			'name_of_ser_provi' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'type_pat' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE,
			),

			'gender_identity' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'wth_disab' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			),

			'disable_sp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'ra10627' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '3',
				'null' => TRUE,
			),

			'cb_others' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'cb_sex' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'cb_psy' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'cb_phy' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),

			'cb_eco' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '2',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('vawc', $fields);

		$fields = array(
			'inj_fracture_sp' => array(
				'name' => 'inj_fracture_sp',
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
			),

			'inj_abrasion_sp' => array(
				'name' => 'inj_abrasion_sp',
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'inj_avulsion_sp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'inj_concussion_sp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'inj_contusion_sp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'inj_fracture_sp2' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			),

			'inj_wound_sp' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE,
			)
		);

		$this->dbforge->modify_column('vawc', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('vawc', 'name_of_ser_provi');
		$this->dbforge->drop_column('vawc', 'type_pat');
		$this->dbforge->drop_column('vawc', 'gender_identity');
		$this->dbforge->drop_column('vawc', 'wth_disab');
		$this->dbforge->drop_column('vawc', 'disable_sp');
		$this->dbforge->drop_column('vawc', 'ra10627');
		$this->dbforge->drop_column('vawc', 'cb_others');
		$this->dbforge->drop_column('vawc', 'cb_sex');
		$this->dbforge->drop_column('vawc', 'cb_psy');
		$this->dbforge->drop_column('vawc', 'cb_phy');
		$this->dbforge->drop_column('vawc', 'cb_eco');
	}
}
