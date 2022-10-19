<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphictransmittalno extends CI_Migration
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
            'phospitaltransmittalno' => array(
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => FALSE,
            ),

            'phospitalcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('phospitaltransmittalno', TRUE);
        $this->dbforge->create_table('hphictransmittalno');
    }

    public function down()
    {
        $this->dbforge->drop_table('hphictransmittalno');
    }
}
