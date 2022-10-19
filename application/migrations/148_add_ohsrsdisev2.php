<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Ohsrsdisev2 extends CI_Migration
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
            'evtofacilityfromanother' =>
            array(
                'type' => 'int',
                'constraint' => '11',
                'null' => TRUE,
                'default' => null,
            )
        );

        $this->dbforge->add_column('ohsrsdisev', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('ohsrsdisev', 'evtofacilityfromanother');
    }
}
