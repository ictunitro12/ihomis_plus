<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hafp extends CI_Migration
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

            'name_investigator' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_investigation' => array(
                'type' => 'DATETIME',
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

            'cough' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'diarrhea_vomit' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'muscle_pain' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'meningeal_signs' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'date_paralysis' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'present_birth' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'asymmetric' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE,
            ),

            'paralysis_3_to_14' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'paralysis_direction' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE,
            ),

            'clinical_paralysis_rarm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'rarm_sensory_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'rarm_d_tendon_reflexes' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'rarm_motor_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'clinical_paralysis_larm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'larm_sensory_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'larm_d_tendon_reflexes' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'larm_motor_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'clinical_paralysis_rleg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'rleg_sensory_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'rleg_d_tendon_reflexes' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'rleg_motor_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'clinical_paralysis_lleg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'lleg_sensory_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'lleg_d_tendon_reflexes' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'lleg_motor_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'lleg_d_tendon_reflexes' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'lleg_motor_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'breathing_muscles' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'neck_muscles' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'facial_muscles' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'working_diagnosis' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'hist_neuro_dis' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hist_neuro_dis_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'travel_one_month_prio' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'travel_one_month_prio_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'date_traveled_from' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_traveled_to' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'other_afp_in_community' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hist_injection_trauma' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hist_injection_trauma_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'sample_tested_positive' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'sample_tested_positive_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'opv_ipv_dose_received' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'opv_ipv_dose_received_date' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'hot_case' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'expected_date_follow_up' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_follow_up_done' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'actual_date_follow_up' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'PE_done' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'residual_paralysis' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'residual_paralysis_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'presence_atrophy' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'reason_no_PE_done' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'reason_specify' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'other_observation' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'lost_followup' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'site_rarm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'site_larm' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'site_rleg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'site_lleg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'final_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'final_classification_VAPP' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_classified' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'classification_criteria' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'case_not_AFP' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
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
        $this->dbforge->create_table('hafp');
    }

    public function down()
    {
        $this->dbforge->drop_table('hafp');
    }
}
