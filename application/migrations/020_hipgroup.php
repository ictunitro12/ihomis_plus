<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hipgroup extends CI_Migration
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
            'ipcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => FALSE,
            ),

            'ipdesc' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ),

            'ipstat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'updsw' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'iplock' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'datemod' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

        ));

        $this->dbforge->add_key('ipcode', TRUE);
        $this->dbforge->create_table('hipgroup');

        $data = [
            ['ipcode' => '1', 'ipdesc' => 'Aetas', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '2', 'ipdesc' => 'Ati', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '3', 'ipdesc' => 'Badjaos', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '4', 'ipdesc' => 'Batak', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '5', 'ipdesc' => 'Blaan', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '6', 'ipdesc' => 'Bontoc', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '7', 'ipdesc' => 'Bukidnon', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '8', 'ipdesc' => 'Higaonon', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '9', 'ipdesc' => 'Ibaloi', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '10', 'ipdesc' => 'Igorot', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '11', 'ipdesc' => 'Ilongots', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '12', 'ipdesc' => 'Isnag', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '13', 'ipdesc' => 'Isneg', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '14', 'ipdesc' => 'Kalinga', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '15', 'ipdesc' => 'Kankanaey', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '16', 'ipdesc' => 'Lumad', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '17', 'ipdesc' => 'Mamanwa', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '18', 'ipdesc' => 'Mandaya', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '19', 'ipdesc' => 'Mangyan', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '20', 'ipdesc' => 'Manobo', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '21', 'ipdesc' => 'Mansaka', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '22', 'ipdesc' => 'Palawano', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '23', 'ipdesc' => 'Palaweño', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '24', 'ipdesc' => 'Sangir', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '25', 'ipdesc' => 'Subanen', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '26', 'ipdesc' => "T'boli", 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '27', 'ipdesc' => 'Tagabawa', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '28', 'ipdesc' => 'Tagakaulo', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '29', 'ipdesc' => 'Tagbanwa', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '30', 'ipdesc' => 'Tasaday', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '31', 'ipdesc' => 'Tinguian', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '32', 'ipdesc' => 'Tumandok', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
            ['ipcode' => '33', 'ipdesc' => 'Others', 'updsw' => 'A', 'updsw' => '', 'iplock' => '', 'datemod' => date('Y-m-d H:m:s')],
        ];

        $this->db->insert_batch('hipgroup', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('hipgroup');
    }
}
