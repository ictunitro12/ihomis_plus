<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hhrw extends CI_Migration
{
    private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

    public function up()
    {
        $this->dbforge->add_field(array(
            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),
            
            'dteassess' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),
            
            'fecun' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
            
            'partner' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'fpmethod' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'planchild' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dtechild' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'counsel' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'what_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'cmethod' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'cmethod_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'switch' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dtereport' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hhrw');
    }

    public function down()
    {
		$this->dbforge->drop_table('hhrw');
    }
}
