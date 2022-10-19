<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hcovid extends CI_Migration
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
            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'CaseInvestigatorID' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'dateinterviewed' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'passportno' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'Permhouseno' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'PermStr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'PermRegID' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'PermProvID' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'default' => null,
                'null' => TRUE,
            ),

            'PermCtyID' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'default' => null,
                'null' => TRUE,
            ),

            'PermBrgyID' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'default' => null,
                'null' => TRUE,
            ),

            'PermTelno' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'PermCellno' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'PermEmailAdd' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'CurrCellno' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'CurrTelno' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'empname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empoccup' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'placeofwork' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'emphouseno' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empstr' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empcity' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empprov' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empcountry' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empphoneno' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'empcellno' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'travelhist' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'countryexit' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'airlineseavessel' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'flightvesselno' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'datedeparture' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'datearrival' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'rofw' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'lsi' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexp' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexpdatecontact' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'histexpplace' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexpworkplace' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexpsocgather' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexphealthfac' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexprelgather' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'histexpoth' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'histexpplacedate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'histexpnameplace' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'DateOnset' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'cough' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'sorethroat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'colds' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'shortnessbreathing' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'SpecifySymptomsID' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'ComorbidityYN' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'ComorbidityID' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'ChestXray' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'ChestXraydate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'pregstat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'LMP' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'highrisk' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'CXRResults' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'CXRResultoth' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'Serum' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'Serumdatecollect' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'SerumdatesentRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'SerumdatercvRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'serumdatevirusiso' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'serumpcr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'swab' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'swabdatecollect' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'swabdatesentRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'swabdatercvRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'swabdatevirusiso' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'swabpcr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'othspeciment' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'othdatecollect' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'othdatesentRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'othdatercvRITM' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'othdatevirusiso' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'othpcr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'covidclass' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'informantlastname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'informantfirstname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'informantrelation' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'informanttelno' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'entrydate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'datemodified' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'HealthStatusID' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'informantmiddlename' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),
            
            'patemail' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

            'interviewercontactno' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'localtranspo' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'default' => null,
                'null' => TRUE,
            ),

            'ctr' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => null,
                'null' => TRUE,
            ),

            'docointket' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'specimenid' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'specimentype' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'collectdatetime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'receiveddatetime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'testresult' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'default' => null,
                'null' => TRUE,
            ),

            'resultdatetime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'uploaddate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hcovid');
    }

    public function down()
    {
        $this->dbforge->drop_table('hcovid');
    }
}
