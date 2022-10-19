<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Cancer extends CI_Migration
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
			'cb_surg' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_radthe' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_chethe' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_immthe' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_horm' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_unk' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_oth' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_surg2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_radthe2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_chethe2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_immthe2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_horm2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_unk2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_oth2' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_surg3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_radthe3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_chethe3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_immthe3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_horm3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_unk3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),

			'cb_oth3' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),
			'more_equal_1_pack' =>
			array(
				'type' => 'varchar',
				'constraint' => '1',
				'null' => TRUE,
			),
			
		);
		
		$this->dbforge->add_column('cancer', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('cancer', 'cb_surg');
		$this->dbforge->drop_column('cancer', 'cb_radthe');
		$this->dbforge->drop_column('cancer', 'cb_chethe');
		$this->dbforge->drop_column('cancer', 'cb_immthe');
		$this->dbforge->drop_column('cancer', 'cb_horm');
		$this->dbforge->drop_column('cancer', 'cb_unk');
		$this->dbforge->drop_column('cancer', 'cb_oth');
		$this->dbforge->drop_column('cancer', 'cb_surg2');
		$this->dbforge->drop_column('cancer', 'cb_radthe2');
		$this->dbforge->drop_column('cancer', 'cb_chethe2');
		$this->dbforge->drop_column('cancer', 'cb_immthe2');
		$this->dbforge->drop_column('cancer', 'cb_horm2');
		$this->dbforge->drop_column('cancer', 'cb_unk2');
		$this->dbforge->drop_column('cancer', 'cb_oth2');
		$this->dbforge->drop_column('cancer', 'cb_surg3');
		$this->dbforge->drop_column('cancer', 'cb_radthe3');
		$this->dbforge->drop_column('cancer', 'cb_chethe3');
		$this->dbforge->drop_column('cancer', 'cb_immthe3');
		$this->dbforge->drop_column('cancer', 'cb_horm3');
		$this->dbforge->drop_column('cancer', 'cb_unk3');
		$this->dbforge->drop_column('cancer', 'cb_oth3');
		$this->dbforge->drop_column('cancer', 'more_equal_1_pack');
	}
}
