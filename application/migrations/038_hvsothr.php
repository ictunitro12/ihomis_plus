<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hvsothr extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		/* $fields = array(
			'vsheight' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => null,
			),

			'vsweight' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => null,
			),

			'vswaist' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => null,
			),

			'vsbmi' =>
			array(
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => TRUE,
				'default' => null,
			),

			'vsbmicat' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => null,
			),

			'entryby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '10',
				'null' => TRUE,
				'default' => null,
			),
		);

		$this->dbforge->add_column('hvsothr', $fields); */

		$modifyFields = array(
			/* 'othrvs' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
			), */

			/* 'othrmeas' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			), */

			/* 'othrunit' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '5',
				'null' => TRUE,
			), */
		);

		//$this->dbforge->modify_column('hvsothr', $modifyFields);
	}

	public function down()
	{
		//$this->dbforge->drop_column('hvsothr', 'othrvs');
		//$this->dbforge->drop_column('hvsothr', 'othrmeas');
		//$this->dbforge->drop_column('hvsothr', 'othrunit');
		/* $this->dbforge->drop_column('hvsothr', 'vsheight');
		$this->dbforge->drop_column('hvsothr', 'vsweight');
		$this->dbforge->drop_column('hvsothr', 'vswaist');
		$this->dbforge->drop_column('hvsothr', 'vsbmi');
		$this->dbforge->drop_column('hvsothr', 'vsbmicat');
		$this->dbforge->drop_column('hvsothr', 'entryby'); */
	}
}
