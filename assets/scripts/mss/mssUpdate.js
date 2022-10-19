	Module=$('#module').val();


		
		$("#addclass").on('click',function(){
		$("#mssEnccode").val($('#enccode').val());
		$("#mssHpercode").val($('#hhpercode').val());

		});

		$("#backmss").on('click',function(){
		var enccode=$('#saveenccode').val();
		var	hpercode= $('#savehpercode').val();
		window.location.href = baseURL + "MSS/index/"+hpercode +"/"+ enccode;
		initMSS(enccode,hpercode)
		

		});


		
	function initMSS(enccode,hpercode)
	{
		$('#hpercode').val(hpercode);
		$('#hhpercode').val(hpercode);
		$('#enccode').val(enccode);
		PatientData(hpercode);
		CaseInformation(enccode);
		MSS(enccode,hpercode);


		
	}


	

	function AssessmentSummary()
	{ 	

		var hpercode= $('#hpercode').val();
		var enccode=$('#enccode').val();
		
		$('#assess_source_refname').val($('#source_refname').val());
		$('#assess_source_refaddress').val($('#source_refaddress').val());
		$('#assess_source_telno').val($('#source_telno').val());
		$('#assess_ass_CompAdd').val($('#ass_CompAdd').val());
		$('#assess_ass_tempAdd').val($('#ass_tempAdd').val());

		$('#assess_ass_owned').val($('#ass_owned').val());
		$('#assess_ass_rent').val($('#ass_rent').val());
		$('#assess_ass_shared').val($('#ass_shared').val());
		$('#assess_ass_ins').val($('#ass_ins').val());
		$('#assess_ass_home').val($('#ass_home').val());

		$('#assess_ass_PhilDirect').val($('#ass_PhilDirect').val());
		$('#assess_ass_PhilIndirect').val($('#ass_PhilIndirect').val());
		
		$('#assess_ass_IOE').val($('#ass_IOE').val());
		$('#assess_ass_OldPat').val($('#ass_OldPat').val());
		$('#assess_ass_NewPat').val($('#ass_NewPat').val());
		$('#assess_ass_caseFor').val($('#ass_caseFor').val());
		$('#assess_ass_closedCase').val($('#ass_closedCase').val());

		$('#assess_ass_senior').val($('#ass_senior').val());
		$('#assess_ass_brgy').val($('#ass_brgy').val());
		$('#assess_ass_bhw').val($('#ass_bhw').val());
		$('#assess_ass_pwd').val($('#ass_pwd').val());
		$('#assess_ass_indig').val($('#ass_indig').val());

		$('#assess_ass_elec').val($('#ass_elec').val());
		$('#assess_ass_candle').val($('#ass_candle').val());
		$('#assess_ass_keros').val($('#ass_keros').val());

		$('#assess_ass_arte').val($('#ass_arte').val());
		$('#assess_ass_watPublic').val($('#ass_watPublic').val());
		$('#assess_ass_watOwned').val($('#ass_watOwned').val());
		$('#assess_ass_watdis').val($('#ass_watdis').val());

		$('#assess_ass_gas').val($('#ass_gas').val());
		$('#assess_ass_fire').val($('#ass_fire').val());
		$('#assess_ass_char').val($('#ass_char').val());

		$('#assess_ass_educAttain').val($('#ass_educAttain').val());
		$('#assess_ass_emp').val($('#ass_emp').val());
		$('#assess_ass_occu').val($('#ass_occu').val());
		$('#assess_ass_mswd').val($('#ass_mswd').val());
		$('#assess_ass_income').val($('#ass_income').val());

		$('#assess_ass_perIncome').val($('#ass_perIncome').val());
		$('#assess_ass_infor').val($('#ass_infor').val());
		$('#assess_ass_oth').val($('#ass_oth').val());
		$('#assess_ass_relToPat').val($('#ass_relToPat').val());
		$('#assess_ass_addInfo').val($('#ass_addInfo').val());

		$('#assess_ass_othIncome').val($('#ass_othIncome').val());
		$('#assess_ass_houSize').val($('#ass_houSize').val());
		$('#assess_ass_monExp').val($('#ass_monExp').val());
		$('#assess_ass_hoLot').val($('#ass_hoLot').val());
		
		$('#assess_ass_food').val($('#ass_food').val());
		$('#assess_ass_educ').val($('#ass_educ').val());
		$('#assess_ass_transpo').val($('#ass_transpo').val());
		$('#assess_ass_cloth').val($('#ass_cloth').val());
		$('#assess_ass_houHelp').val($('#ass_houHelp').val());
		$('#assess_ass_medExp').val($('#ass_medExp').val());
		$('#assess_ass_insPre').val($('#ass_insPre').val());
		$('#assess_ass_other').val($('#ass_other').val());
		$('#assess_ass_totMonExp').val($('#ass_totMonExp').val());
		
		$('#assess_med_DurOfProb').val($('#med_DurOfProb').val());
		$('#assess_med_PresTreat').val($('#med_PresTreat').val());
		$('#assess_med_PrevTreat').val($('#med_PrevTreat').val());
		$('#assess_med_HealthProb').val($('#med_HealthProb').val());

		//social

		$('#assess_soc_parent_tsi').val($('#soc_parent_tsi').val());
		$('#assess_soc_parent_si').val($('#soc_parent_si').val());
		$('#assess_soc_parent_di').val($('#soc_parent_di').val());
		$('#assess_soc_parent_ci').val($('#soc_parent_ci').val());

		$('#assess_soc_spouse_tsi').val($('#soc_spouse_tsi').val());
		$('#assess_soc_spouse_si').val($('#soc_spouse_si').val());
		$('#assess_soc_spouse_di').val($('#soc_spouse_di').val());
		$('#assess_soc_spouse_ci').val($('#soc_spouse_ci').val());

		$('#assess_soc_child_tsi').val($('#soc_child_tsi').val());
		$('#assess_soc_child_si').val($('#soc_child_si').val());
		$('#assess_soc_child_di').val($('#soc_child_di').val());
		$('#assess_soc_child_ci').val($('#soc_child_ci').val());

		$('#assess_soc_sibling_tsi').val($('#soc_sibling_tsi').val());
		$('#assess_soc_sibling_si').val($('#soc_sibling_si').val());
		$('#assess_soc_sibling_di').val($('#soc_sibling_di').val());
		$('#assess_soc_sibling_ci').val($('#soc_sibling_ci').val());

		$('#assess_soc_fammember_tsi').val($('#soc_fammember_tsi').val());
		$('#assess_soc_fammember_si').val($('#soc_fammember_si').val());
		$('#assess_soc_fammember_di').val($('#soc_fammember_di').val());
		$('#assess_soc_fammember_ci').val($('#soc_fammember_ci').val());

		$('#assess_soc_significant_tsi').val($('#soc_significant_tsi').val());
		$('#assess_soc_significant_si').val($('#soc_significant_si').val());
		$('#assess_soc_significant_di').val($('#soc_significant_di').val());
		$('#assess_soc_significant_ci').val($('#soc_significant_ci').val());

		$('#assess_soc_person_tsi').val($('#soc_person_tsi').val());
		$('#assess_soc_person_si').val($('#soc_person_si').val());
		$('#assess_soc_person_di').val($('#soc_person_di').val());
		$('#assess_soc_person_ci').val($('#soc_person_ci').val());
		
		$('#assess_soc_lover_tsi').val($('#soc_lover_tsi').val());
		$('#assess_soc_lover_si').val($('#soc_lover_si').val());
		$('#assess_soc_lover_di').val($('#soc_lover_di').val());
		$('#assess_soc_lover_ci').val($('#soc_lover_ci').val());

		$('#assess_soc_friend_tsi').val($('#soc_friend_tsi').val());
		$('#assess_soc_friend_si').val($('#soc_friend_si').val());
		$('#assess_soc_friend_di').val($('#soc_friend_di').val());
		$('#assess_soc_friend_ci').val($('#soc_friend_ci').val());

		$('#assess_soc_neighbor_tsi').val($('#soc_neighbor_tsi').val());
		$('#assess_soc_neighbor_si').val($('#soc_neighbor_si').val());
		$('#assess_soc_neighbor_di').val($('#soc_neighbor_di').val());
		$('#assess_soc_neighbor_ci').val($('#soc_neighbor_ci').val());

		$('#assess_soc_member_tsi').val($('#soc_member_tsi').val());
		$('#assess_soc_member_si').val($('#soc_member_si').val());
		$('#assess_soc_member_di').val($('#soc_member_di').val());
		$('#assess_soc_member_ci').val($('#soc_member_ci').val());
		
		$('#assess_soc_other_tsi').val($('#soc_other_tsi').val());
		$('#assess_soc_other_si').val($('#soc_other_si').val());
		$('#assess_soc_other_di').val($('#soc_other_di').val());
		$('#assess_soc_other_ci').val($('#soc_other_ci').val());

		$('#assess_soc_occupational_tsi').val($('#soc_occupational_tsi').val());
		$('#assess_soc_occupational_si').val($('#soc_occupational_si').val());
		$('#assess_soc_occupational_di').val($('#soc_occupational_di').val());
		$('#assess_soc_occupational_ci').val($('#soc_occupational_ci').val());

		$('#assess_soc_paid_tsi').val($('#soc_paid_tsi').val());
		$('#assess_soc_paid_si').val($('#soc_paid_si').val());
		$('#assess_soc_paid_di').val($('#soc_paid_di').val());
		$('#assess_soc_paid_ci').val($('#soc_paid_ci').val());

		$('#assess_soc_home_tsi').val($('#soc_home_tsi').val());
		$('#assess_soc_home_si').val($('#soc_home_si').val());
		$('#assess_soc_home_di').val($('#soc_home_di').val());
		$('#assess_soc_home_ci').val($('#soc_home_ci').val());
		
		$('#assess_soc_volunteer_tsi').val($('#soc_volunteer_tsi').val());
		$('#assess_soc_volunteer_si').val($('#soc_volunteer_si').val());
		$('#assess_soc_volunteer_di').val($('#soc_volunteer_di').val());
		$('#assess_soc_volunteer_ci').val($('#soc_volunteer_ci').val());

		$('#assess_soc_student_tsi').val($('#soc_student_tsi').val());
		$('#assess_soc_student_si').val($('#soc_student_si').val());
		$('#assess_soc_student_di').val($('#soc_student_di').val());
		$('#assess_soc_student_ci').val($('#soc_student_ci').val());

		$('#assess_soc_other_sp_tsi').val($('#soc_other_sp_tsi').val());
		$('#assess_soc_other_sp_si').val($('#soc_other_sp_si').val());
		$('#assess_soc_other_sp_di').val($('#soc_other_sp_di').val());
		$('#assess_soc_other_sp_ci').val($('#soc_other_sp_ci').val());

		$('#assess_sls_role_tsi').val($('#soc_sls_role_tsi').val());
		$('#assess_sls_role_si').val($('#soc_sls_role_si').val());
		$('#assess_sls_role_di').val($('#soc_sls_role_di').val());
		$('#assess_sls_role_ci').val($('#soc_sls_role_ci').val());
		
		$('#assess_soc_consumer_tsi').val($('#soc_consumer_tsi').val());
		$('#assess_soc_consumer_si').val($('#soc_consumer_si').val());
		$('#assess_soc_consumer_di').val($('#soc_consumer_di').val());
		$('#assess_soc_consumer_ci').val($('#soc_consumer_ci').val());

		$('#assess_soc_inpatient_tsi').val($('#soc_inpatient_tsi').val());
		$('#assess_soc_inpatient_si').val($('#soc_inpatient_si').val());
		$('#assess_soc_inpatient_di').val($('#soc_inpatient_di').val());
		$('#assess_soc_inpatient_ci').val($('#soc_inpatient_ci').val());

		$('#assess_soc_outpatient_tsi').val($('#soc_outpatient_tsi').val());
		$('#assess_soc_outpatient_si').val($('#soc_outpatient_si').val());
		$('#assess_soc_outpatient_di').val($('#soc_outpatient_di').val());
		$('#assess_soc_outpatient_ci').val($('#soc_outpatient_ci').val());

		$('#assess_soc_prisoner_tsi').val($('#soc_prisoner_tsi').val());
		$('#assess_soc_prisoner_si').val($('#soc_prisoner_si').val());
		$('#assess_soc_prisoner_di').val($('#soc_prisoner_di').val());
		$('#assess_soc_prisoner_ci').val($('#soc_prisoner_ci').val());
		
		$('#assess_soc_immigrant_leg_tsi').val($('#soc_immigrant_leg_tsi').val());
		$('#assess_soc_immigrant_leg_si').val($('#soc_immigrant_leg_si').val());
		$('#assess_soc_immigrant_leg_di').val($('#soc_immigrant_leg_di').val());
		$('#assess_soc_immigrant_leg_ci').val($('#soc_immigrant_leg_ci').val());

		$('#assess_soc_immigrant_ileg_tsi').val($('#soc_immigrant_ileg_tsi').val());
		$('#assess_soc_immigrant_ileg_si').val($('#soc_immigrant_ileg_si').val());
		$('#assess_soc_immigrant_ileg_di').val($('#soc_immigrant_ileg_di').val());
		$('#assess_soc_immigrant_ileg_ci').val($('#soc_immigrant_ileg_ci').val());

		$('#assess_soc_immigrant_refugee_tsi').val($('#soc_immigrant_refugee_tsi').val());
		$('#assess_soc_immigrant_refugee_si').val($('#soc_immigrant_refugee_si').val());
		$('#assess_soc_immigrant_refugee_di').val($('#soc_immigrant_refugee_di').val());
		$('#assess_soc_immigrant_refugee_ci').val($('#soc_immigrant_refugee_ci').val());

		$('#assess_soc_other_sp2_tsi').val($('#soc_other_sp2_tsi').val());
		$('#assess_soc_other_sp2_si').val($('#soc_other_sp2_si').val());
		$('#assess_soc_other_sp2_di').val($('#soc_other_sp2_di').val());
		$('#assess_soc_other_sp2_ci').val($('#soc_other_sp2_ci').val());


		//problem in the environment
		$('#assess_prob_fan_lackreg_si').val($('#prob_fan_lackreg_si').val());
		$('#assess_prob_fan_lackreg_di').val($('#prob_fan_lackreg_di').val());
		
		$('#assess_prob_fan_nutri_si').val($('#prob_fan_nutri_si').val());
		$('#assess_prob_fan_nutri_di').val($('#prob_fan_nutri_di').val());

		$('#assess_prob_fan_docu_si').val($('#prob_fan_docu_si').val());
		$('#assess_prob_fan_docu_di').val($('#prob_fan_docu_di').val());
		
		$('#assess_prob_fan_other_si').val($('#prob_fan_other_si').val());
		$('#assess_prob_fan_other_di').val($('#prob_fan_other_di').val());

		$('#assess_prob_shelter_absence_si').val($('#prob_shelter_absence_si').val());
		$('#assess_prob_shelter_absence_di').val($('#prob_shelter_absence_di').val());
		
		$('#assess_prob_shelter_substandard_si').val($('#prob_shelter_substandard_si').val());
		$('#assess_prob_shelter_substandard_di').val($('#prob_shelter_substandard_di').val());

		$('#assess_prob_shelter_other_si').val($('#prob_shelter_other_si').val());
		$('#assess_prob_shelter_other_di').val($('#prob_shelter_other_di').val());
		
		$('#assess_prob_employment_unemp_si').val($('#prob_employment_unemp_si').val());
		$('#assess_prob_employment_unemp_di').val($('#prob_employment_unemp_di').val());

		$('#assess_prob_employment_under_si').val($('#prob_employment_under_si').val());
		$('#assess_prob_employment_under_di').val($('#prob_employment_under_di').val());
		
		$('#assess_prob_employment_inappro_si').val($('#prob_employment_inappro_si').val());
		$('#assess_prob_employment_inappro_di').val($('#prob_employment_inappro_di').val());

		$('#assess_prob_othersp_si').val($('#prob_othersp_si').val());
		$('#assess_prob_othersp_di').val($('#prob_othersp_di').val());

		$('#assess_prob_ecores_insuffcom_si').val($('#prob_ecores_insuffcom_si').val());
		$('#assess_prob_ecores_insuffcom_di').val($('#prob_ecores_insuffcom_di').val());
		
		$('#assess_prob_ecores_insuffres_si').val($('#prob_ecores_insuffres_si').val());
		$('#assess_prob_ecores_insuffres_di').val($('#prob_ecores_insuffres_di').val());

		$('#assess_prob_ecores_other_si').val($('#prob_ecores_other_si').val());
		$('#assess_prob_ecores_other_di').val($('#prob_ecores_other_di').val());
		
		$('#assess_prob_transpo_si').val($('#prob_transpo_si').val());
		$('#assess_prob_transpo_di').val($('#prob_transpo_di').val());

		$('#assess_prob_transpo_other_si').val($('#prob_transpo_other_si').val());
		$('#assess_prob_transpo_other_di').val($('#prob_transpo_other_di').val());
		
		$('#assess_prob_basicneed_si').val($('#prob_basicneed_si').val());
		$('#assess_prob_basicneed_di').val($('#prob_basicneed_di').val());

		$('#assess_prob_affectab_si').val($('#prob_affectab_si').val());
		$('#assess_prob_affectab_di').val($('#prob_affectab_di').val());
		
		$('#assess_prob_affectsu_si').val($('#prob_affectsu_si').val());
		$('#assess_prob_affectsu_di').val($('#prob_affectsu_di').val());

		$('#assess_prob_affectex_si').val($('#prob_affectex_si').val());
		$('#assess_prob_affectex_di').val($('#prob_affectex_di').val());
		
		$('#assess_prob_affect_other_si').val($('#prob_affect_other_si').val());
		$('#assess_prob_affect_other_di').val($('#prob_affect_other_di').val());
	
	
		

		$('#assess_prob_assess').val($('#prob_assess').val());
		$('#assess_prob_recommend').val($('#prob_recommend').val());


	
	}

	

	