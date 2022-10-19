<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Modify_Hcovid extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $addcol = array(
            'typeofclient' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcata' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatb' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatc' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatd' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcate' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatf' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcath' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcati' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testcatj' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'covprevconsul' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'covprevconsuldte' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'covprevconsulfacility' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
                'default' => null,
            ),
            'admtohosp' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'admtohospname' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
                'default' => null,
            ),
            'admtohospdate' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'admtoisolation' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'admtoisolationname' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
                'default' => null,
            ),
            'admtoisolationdate' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'homeisolation' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'homeisolationdate' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'homedishome' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'fever' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'dispoth' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'genweak' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'fatigue' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'headache' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'myalgia' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'coryza' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'dyspnea' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'anorexia' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'nausea' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'vomiting' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'diarrhea' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'alteredmentalill' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'anosmia' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'ageusia' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'clinicinfooth' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'cNone' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'hypertension' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'diabetes' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'heartdisease' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'lungdisease' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'gastrointestinal' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'genitourinary' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'neurodisease' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'cancer' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'comorbiditiesoth' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'highriskpreg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'sari' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'healthstat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testposbfore' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'testposbforedatecol' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'testposbforelab' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
                'default' => null,
            ),
            'testposbforeno' => array(
                'type' => 'BIGINT',
                'constraint' => 50,
                'null' => TRUE,
                'default' => null,
            ),
            'intertranspo' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
                'default' => null,
            ),
            'empbgy' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'empemail' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'covfirstadm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),
            'covfirstadmdte' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
                'default' => null,
            ),
            'covfirstadmfacility' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'covfirstadmfacilityregion' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            'covfirstadmfacilityprov' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            
            'sphealthcarewrkr' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

        );
        $fields = array(
            'docointket' =>
            array(
                'name' => 'docointkey',
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
                'default' => null,
            ),
            'DateOnset' => array(
                'name' => 'dateonset',
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
        );

        $this->dbforge->add_column('hcovid', $addcol);
        $this->dbforge->modify_column('hcovid', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('hcovid', 'typeofclient');
    }
}