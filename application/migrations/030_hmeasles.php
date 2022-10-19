<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hmeasles extends CI_Migration
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
            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),

            'member_of_IP' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'name_parent_caregiver' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'parent_caregiver_nos' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_report' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'name_reporter' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'reporter_nos' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_investigation' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'name_investigator' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'investigator_nos' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'fever' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'fever_dateonset' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'rash' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'rash_dateonset' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'cough' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'koplik' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'runny_nose' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'red_eyes' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'arthralgia' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'swollen_lymphatic' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'swollen_lymphatic_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'swollen_lymphatic_specify_others' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'complications' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'complications_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'other_symptoms' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'received_MCV' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'MCV_MV' => array(
                'type' => 'INT',
                'null' => TRUE,
            ),

            'MCV_MR' => array(
                'type' => 'INT',
                'null' => TRUE,
            ),

            'MCV_MMR' => array(
                'type' => 'INT',
                'null' => TRUE,
            ),

            'vaccine_validated_through' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_last_MCV' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'vacci_special_campaign' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'mother_busy' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'against_belief' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'medical_contraindication' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'fear_effects' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'child_sick' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'no_available' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'vaccinator_available' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'not_eligible' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'forgot_schedule' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'reason_other_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'vitamin_A' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'history_travel' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'place_travel' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'date_travel' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'less7_days_onset' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'date_onset7to23days' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'measles_prior_rash' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'rubella_prior_rash' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'rubella_prior_rash_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'rubella_prior_rash_place' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'rubella_prior_rash_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'day_care' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'barangay' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'home' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'home' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'school' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'health_facility' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dormitory' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'exposure_others_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'fever_rash_community' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'serum' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'serum_date_collected' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'serum_date_sent_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'serum_date_received_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'serum_measles_igm_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'serum_rubella_igm_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'dried_blood_spot' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dried_blood_spot_date_collected' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'dried_blood_spot_date_sent_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'dried_blood_spot_date_received_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'dried_blood_spot_measles_igm_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'dried_blood_spot_rubella_igm_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'oro_naso_swab' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'oro_naso_swab_date_collected' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'oro_naso_swab_date_sent_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'oro_naso_swab_date_received_RITM' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'oro_naso_swab_virus_iso_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'oro_naso_swab_pcr_result' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'final_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'source_infection' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => TRUE,
            ),

            'pregstat' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'weekpreg' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'vaccine_val_oth' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'entry_date' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'modifiedby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE,
            ),

            'date_modified' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hmeasles');
    }

    public function down()
    {
        $this->dbforge->drop_table('hmeasles');
    }
}
