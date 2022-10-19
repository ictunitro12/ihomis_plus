<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Engas_install extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type'       => 'VARCHAR',
				'constraint' => '20',
			),
			'description' => array(
				'type'       => 'VARCHAR',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tables['groups']);
	}
	public function down()
	{
		$this->dbforge->drop_table('bk_r_fund_104');
		$this->dbforge->drop_table('bk_r_authorization');
	}
}
