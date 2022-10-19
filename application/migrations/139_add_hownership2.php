<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hownership2 extends CI_Migration
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
            'howner_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ),
        );

        $data = [
            ['howner_code' => 'GLOCM', 'howner_name' => 'Government : Local - Municipality', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GDILG', 'howner_name' => 'Government : National - DILG-PNP', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GDND', 'howner_name' => 'Government : National - DND-AFP', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GDOH', 'howner_name' => 'Government : National - DOH Retained', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GDOJ', 'howner_name' => 'Government : National - DOJ', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GLOCC', 'howner_name' => 'Government : Local - City', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GLOCP', 'howner_name' => 'Government : Local - Province', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GOTH', 'howner_name' => 'Government : National - Others', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'GSUC', 'howner_name' => 'Government : National - State Universities and Colleges (SUCs)', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PC', 'howner_name' => 'Private : Corporation', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PCO', 'howner_name' => 'Private : Civic Organization', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PCOOP', 'howner_name' => 'Private : Cooperative', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PF', 'howner_name' => 'Private : Foundation', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PO', 'howner_name' => 'Private : Others', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PP', 'howner_name' => 'Private : Partnership', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PR', 'howner_name' => 'Private : Religious', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],
            ['howner_code' => 'PSP', 'howner_name' => 'Private : Single Proprietorship', 'howner_desc' => '', 'updsw' => 'P', 'hownerlock' => 'N', 'datemod' => '2018-01-01 00:00:00', 'hownerstat' => 'A'],

        ];

        $this->dbforge->modify_column('hownership', $fields);
        $this->db->empty_table('hownership');
        $this->db->insert_batch('hownership', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('hownership');
    }
}
