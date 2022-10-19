<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_Hwalkin extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge(); 
    }

    public function up()
    {	
		$hwalkin = array(
			'chrgdate' =>
			array(
				'type' => 'DATETIME',
				'null' => TRUE,
			),
			
			'modepay' =>
			array(
				'type' => 'CHAR',
				'constraint' => 1,
				'null' => TRUE,
			),
			'disccode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 11,
				'null' => TRUE,
			),
			'disctype' =>
			array(
				'type' => 'VARCHAR',
				 'constraint' => 11,
				'null' => TRUE,
			),
		);
		
		$hwidetails = array(
			'lotno' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 19,
				'null' => TRUE,
			),
			'chrgcode' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 11,
				'null' => TRUE,
			),
			'pcchrgcod' =>
			array(
				'type' => 'VARCHAR',
				 'constraint' => 11,
				'null' => TRUE,
			),
			'prikey' =>
			array(
				'type' => 'VARCHAR',
				 'constraint' => 41,
				'null' => TRUE,
			),
		);

       	$this->dbforge->add_column('hwalkin', $hwalkin);
       	$this->dbforge->add_column('hwidetails', $hwidetails);
       	$this->dbforge->modify_column('hwidetails', $hwidetails);
    }

    public function down()
    {
      	//$this->dbforge->drop_column('hwalkin', 'nbind');
    }
}
