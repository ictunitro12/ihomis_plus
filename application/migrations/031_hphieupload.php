<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphieupload extends CI_Migration
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

            'uploaddatetime' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'datatype' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
            ),

            'uploadedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'remarks' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('uploaddatetime', TRUE);
        $this->dbforge->add_key('datatype', TRUE);

        $this->dbforge->create_table('hphieupload');
    }

    public function down()
    {
        $this->dbforge->drop_table('hphieupload');
    }
}
