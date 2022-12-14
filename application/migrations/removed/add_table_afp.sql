create table hafp(
	enccode varchar(48) not null,
	hpercode varchar(20) not null,
	hfhudcode varchar(19) not null,
	member_of_IP varchar(50) null,
	name_parent_caregiver varchar(255) null,
	parent_caregiver_nos varchar(50) null,
	date_report datetime null,
	name_investigator varchar(50) null,
	date_investigation datetime null,
	investigator_nos varchar(50) null,
	fever varchar(1) null,
	cough varchar(1) null,
	diarrhea_vomit varchar(1) null,
	muscle_pain varchar(1) null,
	meningeal_signs varchar(1) null,
	date_paralysis datetime null,
	present_birth varchar(1) null,
	asymmetric varchar(20) null,
	paralysis_3_to_14  varchar(1) null,
	paralysis_direction varchar(20) null,
	clinical_paralysis_rarm varchar(1) null,
	rarm_sensory_status varchar(50) null,
	rarm_d_tendon_reflexes varchar(50) null,
	rarm_motor_status varchar(50) null,
	clinical_paralysis_larm varchar(1) null,
	larm_sensory_status varchar(50) null,
	larm_d_tendon_reflexes varchar(50) null,
	larm_motor_status varchar(50) null,
	clinical_paralysis_rleg varchar(1) null,
	rleg_sensory_status varchar(50) null,
	rleg_d_tendon_reflexes varchar(50) null,
	rleg_motor_status varchar(50) null,
	clinical_paralysis_lleg varchar(1) null,
	lleg_sensory_status varchar(50) null,
	lleg_d_tendon_reflexes varchar(50) null,
	lleg_motor_status varchar(50) null,
	breathing_muscles varchar(1) null,
	neck_muscles varchar(1) null,
	facial_muscles varchar(1) null,
	working_diagnosis varchar(255) null,
	hist_neuro_dis varchar(1) null,
	hist_neuro_dis_specify varchar(255) null,
	travel_one_month_prio varchar(1) null,
	travel_one_month_prio_specify varchar(255) null,
	date_traveled_from datetime null,
	date_traveled_to datetime null,
	other_afp_in_community varchar(1) null,
	hist_injection_trauma varchar(1) null,
	hist_injection_trauma_specify varchar(255) null,
	sample_tested_positive varchar(1) null,
	sample_tested_positive_date datetime null,
	opv_ipv_dose_received varchar(1) null,
	opv_ipv_dose_received_date datetime null,
	hot_case varchar(1) null,
	expected_date_follow_up datetime null,
	date_follow_up_done varchar(1) null,
	actual_date_follow_up datetime null,
	PE_done varchar(1) null,
	residual_paralysis varchar(1) null,
	residual_paralysis_specify varchar(50) null,
	presence_atrophy varchar(1) null,
	reason_no_PE_done varchar(50) null,
	reason_specify varchar(255) null,
	other_observation varchar(255) null,
	lost_followup varchar(1) null,
	site_rarm varchar(1) null,
	site_larm varchar(1) null,
	site_rleg varchar(1) null,
	site_lleg varchar(1) null,
	final_classification varchar(50) null,
	final_classification_VAPP varchar(50) null,
	date_classified datetime null,
	classification_criteria varchar(50) null,
	case_not_AFP varchar(1) null,
	entryby varchar(15) not null,
	entry_date datetime not null,
	modifiedby varchar(15) not null,
	date_modified datetime not null,
PRIMARY KEY (enccode)
);