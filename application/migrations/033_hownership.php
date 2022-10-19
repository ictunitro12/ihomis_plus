<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hownership extends CI_Migration
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
            'howner_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'howner_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'howner_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE,
            ),

            'hownerstat' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hownerlock' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'datemod' => array(
                'type' => 'DATETIME',

                'null' => TRUE,
            ),

            'updsw' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('howner_code', TRUE);
        $this->dbforge->create_table('hownership');

        // insert
        $data = [
            [
                'howner_code' => 'GAFP',
                'howner_name' => 'Government - DND-AFP',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P',
            ],
            [
                'howner_code' => 'GDILG',
                'howner_name' => 'Government - DILG-PNP',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GDND',
                'howner_name' => 'DND',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GDOH',
                'howner_name' => 'Government-National-DOH Retained/ Renationalized',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GDOJ',
                'howner_name' => 'Government - DOJ',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GLOCC',
                'howner_name' => 'Government - Local(City)',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GLOCD',
                'howner_name' => 'Government - Local(District)',
                'howner_desc' => '',
                'hownerstat' =>  'A',
                'hownerlock' => 'N',
                'datemod' =>  '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GLOCP',
                'howner_name' => 'Government - Local(Province)',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' =>  'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'GOTH',
                'howner_name' => 'Government - Others',
                'howner_desc' => '',
                'hownerstat' => 'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' =>  'P'
            ],
            [
                'howner_code' => 'PCO',
                'howner_name' => 'Private - Civic Organization',
                'howner_desc' => '',
                'hownerstat' =>  'A',
                'hownerlock' => 'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'PF',
                'howner_name' => 'Private - Foundation',
                'howner_desc' => '',
                'hownerstat' =>  'A',
                'hownerlock' =>  'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' =>  'P'
            ],
            [
                'howner_code' => 'PO',
                'howner_name' => 'Private - Others',
                'howner_desc' =>  '',
                'hownerstat' =>  'A',
                'hownerlock' =>  'N',
                'datemod' =>  '2018-01-01 00:00:00',
                'updsw' => 'P'
            ],
            [
                'howner_code' => 'PR',
                'howner_name' => 'Private-Religious',
                'howner_desc' =>  '',
                'hownerstat' =>  'A',
                'hownerlock' =>  'N',
                'datemod' => '2018-01-01 00:00:00',
                'updsw' =>  'P'
            ],
            [
                'howner_code' => 'PSPPC',
                'howner_name' => 'Private - Single Proprietorship/Partnership/Corp',
                'howner_desc' =>  '',
                'hownerstat' => 'A',
                'hownerlock' =>  'N',
                'datemod' =>  '2018-01-01 00:00:00',
                'updsw' =>  'P'
            ],
        ];

        $this->db->insert_batch('hownership', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('hownership');
    }
}
