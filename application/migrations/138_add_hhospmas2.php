<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hhospmas2 extends CI_Migration
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
            'specialtyspecify' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
                'default' => null,
            ),
            'ownershipspecify' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
                'default' => null,
            ),
        );

        $this->dbforge->add_column('hhospmas', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hhospmas', 'specialtyspecify');
        $this->dbforge->drop_column('hhospmas', 'ownershipspecify');
    }
}
