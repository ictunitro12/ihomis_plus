<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Ohsrs_geninfo2 extends CI_Migration
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
            'ownershipspecify' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
                'default' => null,
            ),
        );

        $this->dbforge->add_column('ohsrs_geninfo', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('ohsrs_geninfo', 'ownershipspecify');
    }
}
