<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Alter_hmrsrev extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$addstkdelv = array(
			'gen_fever' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gen_chills' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gen_weakness' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gen_nausea' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'eye_redness' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'eye_itching' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'eye_blurred_vision' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'eye_loss_vision' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'eye_diplopia' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'ent_congestion' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ent_epistaxis' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ent_sore_throat' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ent_hoarseness' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ent_ear_ache' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ent_ear_discharge' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'cv_chest_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'cv_palpitations' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'cv_orthopnea' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'cv_pedal_edema' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'cv_pnd' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'resp_dob' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'resp_cough' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'resp_sputum' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'resp_hemoptysis' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'resp_wheezing' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'gi_abdom_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gi_vomiting' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gi_constipation' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gi_melena' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gi_hematochezia' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gi_hematemesis' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'gu_dysuria' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gu_frequency' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gu_nocturia' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gu_vaginal_discharge' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'gu_vaginal_bleeding' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'neuro_headache' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'neuro_blackout' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'neuro_numbness' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'neuro_unsteady_gait' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'neuro_seizure' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'ms_neck_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ms_back_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ms_hip_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ms_shoulder_pain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'ms_jointpain' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'skin_rash' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'skin_swelling' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'skin_breast_discharge' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'skin_breast_masses' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),

			'psych_anxious' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'psych_depression' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'psych_hallucination' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'psych_stress' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'psych_not_sleeping' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'oth_systems_reviewed' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE
			),
			'oth_all_systems' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
			'oth_incomplete' =>
			array(
				'type' => 'CHAR',
				'constraint' => '1',
				'null' => TRUE
			),
		);

		$this->dbforge->add_column('hmrsrev', $addstkdelv);
	}

	public function down()
	{
		$this->dbforge->drop_column('hmrsrev', 'gen_fever');
		$this->dbforge->drop_column('hmrsrev', 'gen_chills');
		$this->dbforge->drop_column('hmrsrev', 'gen_weakness');
		$this->dbforge->drop_column('hmrsrev', 'gen_nausea');
		$this->dbforge->drop_column('hmrsrev', 'eye_redness');
		$this->dbforge->drop_column('hmrsrev', 'eye_itching');
		$this->dbforge->drop_column('hmrsrev', 'eye_blurred_vision');
		$this->dbforge->drop_column('hmrsrev', 'eye_loss_vision');
		$this->dbforge->drop_column('hmrsrev', 'eye_diplopia');
		$this->dbforge->drop_column('hmrsrev', 'ent_congestion');
		$this->dbforge->drop_column('hmrsrev', 'ent_epistaxis');
		$this->dbforge->drop_column('hmrsrev', 'ent_sore_throat');
		$this->dbforge->drop_column('hmrsrev', 'ent_hoarseness');
		$this->dbforge->drop_column('hmrsrev', 'ent_ear_ache');
		$this->dbforge->drop_column('hmrsrev', 'ent_ear_discharge');
		$this->dbforge->drop_column('hmrsrev', 'cv_chest_pain');
		$this->dbforge->drop_column('hmrsrev', 'cv_palpitations');
		$this->dbforge->drop_column('hmrsrev', 'cv_orthopnea');
		$this->dbforge->drop_column('hmrsrev', 'cv_pedal_edema');
		$this->dbforge->drop_column('hmrsrev', 'cv_pnd');
		$this->dbforge->drop_column('hmrsrev', 'resp_dob');
		$this->dbforge->drop_column('hmrsrev', 'resp_cough');
		$this->dbforge->drop_column('hmrsrev', 'resp_sputum');
		$this->dbforge->drop_column('hmrsrev', 'resp_hemoptysis');
		$this->dbforge->drop_column('hmrsrev', 'resp_wheezing');
		$this->dbforge->drop_column('hmrsrev', 'gi_abdom_pain');
		$this->dbforge->drop_column('hmrsrev', 'gi_vomiting');
		$this->dbforge->drop_column('hmrsrev', 'gi_constipation');
		$this->dbforge->drop_column('hmrsrev', 'gi_melena');
		$this->dbforge->drop_column('hmrsrev', 'gi_hematochezia');
		$this->dbforge->drop_column('hmrsrev', 'gi_hematemesis');
		$this->dbforge->drop_column('hmrsrev', 'gu_dysuria');
		$this->dbforge->drop_column('hmrsrev', 'gu_frequency');
		$this->dbforge->drop_column('hmrsrev', 'gu_nocturia');
		$this->dbforge->drop_column('hmrsrev', 'gu_vaginal_discharge');
		$this->dbforge->drop_column('hmrsrev', 'gu_vaginal_bleeding');
		$this->dbforge->drop_column('hmrsrev', 'neuro_headache');
		$this->dbforge->drop_column('hmrsrev', 'neuro_blackout');
		$this->dbforge->drop_column('hmrsrev', 'neuro_numbness');
		$this->dbforge->drop_column('hmrsrev', 'neuro_unsteady_gait');
		$this->dbforge->drop_column('hmrsrev', 'neuro_seizure');
		$this->dbforge->drop_column('hmrsrev', 'ms_neck_pain');
		$this->dbforge->drop_column('hmrsrev', 'ms_back_pain');
		$this->dbforge->drop_column('hmrsrev', 'ms_hip_pain');
		$this->dbforge->drop_column('hmrsrev', 'ms_shoulder_pain');
		$this->dbforge->drop_column('hmrsrev', 'ms_jointpain');
		$this->dbforge->drop_column('hmrsrev', 'skin_rash');
		$this->dbforge->drop_column('hmrsrev', 'skin_swelling');
		$this->dbforge->drop_column('hmrsrev', 'skin_breast_discharge');
		$this->dbforge->drop_column('hmrsrev', 'skin_breast_masses');
		$this->dbforge->drop_column('hmrsrev', 'psych_anxious');
		$this->dbforge->drop_column('hmrsrev', 'psych_depression');
		$this->dbforge->drop_column('hmrsrev', 'psych_hallucination');
		$this->dbforge->drop_column('hmrsrev', 'psych_stress');
		$this->dbforge->drop_column('hmrsrev', 'psych_not_sleeping');
		$this->dbforge->drop_column('hmrsrev', 'oth_systems_reviewed');
		$this->dbforge->drop_column('hmrsrev', 'oth_all_systems');
		$this->dbforge->drop_column('hmrsrev', 'oth_incomplete');
	}
}
