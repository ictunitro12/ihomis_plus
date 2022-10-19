<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hperson extends CI_Migration
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
			'bldtype' =>
			array(
				'type' => 'varchar',
				'constraint' => '5',
				'null' => TRUE,
			),

			'henlistdte' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'henlist' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'pat_tin' =>
			array(
				'type' => 'varchar',
				'constraint' => '12',
				'null' => TRUE,
			),

			'pat_unit' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'pat_bldg' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'pat_lot' =>
			array(
				'type' => 'varchar',
				'constraint' => '50',
				'null' => TRUE,
			),

			'pat_subd' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'pat_email' =>
			array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => TRUE,
			),

			'spphicnum' =>
			array(
				'type' => 'varchar',
				'constraint' => '14',
				'null' => TRUE,
			),

			'spbirth' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'spsex' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),

			'fatphicnum' =>
			array(
				'type' => 'varchar',
				'constraint' => '14',
				'null' => TRUE,
			),

			'fatbirth' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'fatdisable' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),

			'motphicnum' =>
			array(
				'type' => 'varchar',
				'constraint' => '14',
				'null' => TRUE,
			),

			'motbirth' =>
			array(
				'type' => 'datetime',
				'constraint' => '',
				'null' => TRUE,
			),

			'motdisable' =>
			array(
				'type' => 'char',
				'constraint' => '1',
				'null' => TRUE,
			),

			'hipgroup' =>
			array(
				'type' => 'varchar',
				'constraint' => '20',
				'null' => TRUE,
			),

			'Client_DOHID' =>
			array(
				'type' => 'varchar',
				'constraint' => '18',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_column('hperson', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hperson', 'bldtype');
		$this->dbforge->drop_column('hperson', 'henlistdte');
		$this->dbforge->drop_column('hperson', 'henlist');
		$this->dbforge->drop_column('hperson', 'pat_tin');
		$this->dbforge->drop_column('hperson', 'pat_unit');
		$this->dbforge->drop_column('hperson', 'pat_bldg');
		$this->dbforge->drop_column('hperson', 'pat_lot');
		$this->dbforge->drop_column('hperson', 'pat_subd');
		$this->dbforge->drop_column('hperson', 'pat_email');
		$this->dbforge->drop_column('hperson', 'spphicnum');
		$this->dbforge->drop_column('hperson', 'spbirth');
		$this->dbforge->drop_column('hperson', 'spsex');
		$this->dbforge->drop_column('hperson', 'fatphicnum');
		$this->dbforge->drop_column('hperson', 'fatbirth');
		$this->dbforge->drop_column('hperson', 'fatdisable');
		$this->dbforge->drop_column('hperson', 'motphicnum');
		$this->dbforge->drop_column('hperson', 'motbirth');
		$this->dbforge->drop_column('hperson', 'motdisable');
		$this->dbforge->drop_column('hperson', 'hipgroup');
		$this->dbforge->drop_column('hperson', 'Client_DOHID');
	}
}
