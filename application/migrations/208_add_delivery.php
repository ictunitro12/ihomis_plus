<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_add_delivery extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        echo "asdasdasd";
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'cl1comb' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'NULL' => FALSE
            ),
            'cl2comb' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'NULL' => FALSE
            ),
            'cl2code' =>
            array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'NULL' => FALSE
            )));
        $this->dbforge->add_column('hstkdelivery', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hstkdelivery', 'cl1comb');
		$this->dbforge->drop_column('hstkdelivery', 'cl2comb');
		$this->dbforge->drop_column('hstkdelivery', 'cl2code');
    }
}
