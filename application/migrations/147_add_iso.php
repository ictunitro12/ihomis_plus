<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_ISO extends CI_Migration
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
            'isocode' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ),
            'isodesc' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),
            'isocertbody' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),
            'validfrom' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => FALSE,
            ),
            'validto' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => FALSE,
            ),
            'datemod' =>
            array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
            'isostat' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('isocode', TRUE);

        $this->dbforge->create_table('isocertification');
    }

    public function down()
    {
        $this->dbforge->drop_table('isocertification');
    }
}
