<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphiclog2 extends CI_Migration
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
			'memlandline' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => null,
				'null' => TRUE,
			),
            'empcontactno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 50,
				'default' => null,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hphiclog', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hvitalsign', 'memlandline');
        $this->dbforge->drop_column('hvitalsign', 'empcontactno');
    }
}
