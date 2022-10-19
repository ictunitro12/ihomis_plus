<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hcpnreferralfrom extends CI_Migration
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
            'LogID' => array(
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false,
            ),

            'fhudFrom' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ),

            'typeOfReferral' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ),

            'referralReason' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ),

            'otherReasons' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'remarks' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'referralCategory' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => false,
            ),

            'referralContactPerson' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'referralContactPersonDesignation' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'default' => null,
                'null' => TRUE,
            ),

            'referralDateTime' => array(
                'type' => 'DATETIME',
                'null' => false,
            ),

            'srfcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'patientLastName' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'null' => false,
            ),

            'patientFirstName' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'null' => false,
            ),

            'patientSuffix' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'patientMiddlename' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'patientBirthDate' => array(
                'type' => 'DATETIME',
                'null' => false,
            ),

            'patientSex' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => false,
            ),

            'patientContactNumber' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'patientReligion' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'patientStreetAddress' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'patientBrgyCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => false,
            ),

            'patientMundCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => false,
            ),

            'patientProvCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => false,
            ),

            'patientRegCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => false,
            ),

            'patientZipCode' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'default' => null,
                'null' => TRUE,
            ),

            'clinicalDiagnosis' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'clinicalHistory' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'physicalExamination' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'chiefComplaint' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'findings' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'null' => TRUE,
            ),

            'bp' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'temp' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'hr' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'rr' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'o2sats' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'weight' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'height' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => null,
                'null' => TRUE,
            ),

            'providerlast_consu' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providerfirst_consu' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providermiddle_consu' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providersuffix_consu' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'providercontact_consu' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => null,
                'null' => TRUE,
            ),

            'providerlast_refer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providerfirst_refer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providermiddle_refer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providersuffix_refer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'providercontact_refer' => array(
                'type' => 'VARCHAR',
                'constraint' => 60,
                'default' => null,
                'null' => TRUE,
            ),

            'downloadby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'downloaddate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'receivedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'default' => null,
                'null' => TRUE,
            ),

            'receiveddate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'referringContactNumber' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => null,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->add_key('LogID', TRUE);
        $this->dbforge->create_table('hcpnreferralfrom');
    }

    public function down()
    {
        $this->dbforge->drop_table('hcpnreferralfrom');
    }
}
