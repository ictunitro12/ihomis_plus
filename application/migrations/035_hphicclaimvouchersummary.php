<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hphicclaimvouchersummary extends CI_Migration
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
            'id' => array(
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
                'null' => FALSE,
            ),

            'pVoucherNo' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pCheckNo' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pCheckDate' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pPayeeType' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pPayeeCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pPayeeName' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE,
                'default' => 'null',
            ),

            'pRMBD' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pDRUGS' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pXRAY' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pOPRM' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pSPFee' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pGPFee' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pSURFee' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pANESFee' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pGrossAmount' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => FALSE,
                'default' => '0.00',
            ),

            'pTaxAmount' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => TRUE,
                'default' => '0.00',
            ),

            'pNetAmount' => array(
                'type' => 'DECIMAL',
                'constraint' => 20, 2,
                'null' => FALSE,
                'default' => '0.00',
            ),
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('hphicclaimvouchersummary');
    }

    public function down()
    {
        $this->dbforge->drop_table('hphicclaimvouchersummary');
    }
}
