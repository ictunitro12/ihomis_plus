
		function PatientAssessmentForm(enccode,hpercode) {
		var enccode = encodeURIComponent(encodeURIComponent(enccode));
			var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
   			
			$.ajax({
				type: "POST",
				url  : baseURL+"MSS/editMssAssementForm/" + enccode + "/"+ hpercode,
				data: {
					'enccode' : enccode,
					'hpercode': hpercode
				},
				dataType: "JSON",
				success: function(obj){
					$('#source_refname').val(obj['sourcereff']);
					$('#source_refaddress').val(obj['hasaddress']);
					$('#source_telno').val(obj['reftelno']);
					$('#ass_tempAdd').val(obj['tempaddress']);

					$('#ass_emp').val(obj['employer']);
					$('#ass_income').val(obj['income']);
					$('#ass_perIncome').val(obj['percapincome']);

					$('#ass_infor').val(obj['osminformantname']);
					$('#ass_addInfo').val(obj['osaddress_informant']);
					$('#ass_oth').val(obj['osother']);

					$('#ass_houSize').val(obj['household']);
					$('#ass_othIncome').val(obj['othsourceincome']);
					$('#ass_monExp').val(obj['totalmon_expendi']);
					$('#ass_hoLot').val(obj['fc_houselot']);

					$('#ass_food').val(obj['fc_food']);
					$('#ass_educ').val(obj['fc_educ']);
					$('#ass_cloth').val(obj['fc_clothing']);
					$('#ass_transpo').val(obj['fc_transpo']);
					$('#ass_houHelp').val(obj['fc_househelp']);
					$('#ass_medExp').val(obj['fc_medexped']);
					$('#ass_insPre').val(obj['fc_insurpremium']);
					$('#ass_other').val(obj['fc_other']);

					$('#med_DurOfProb').val(obj['DPS']);
					$('#med_PrevTreat').val(obj['PTD']);
					$('#med_PresTreat').val(obj['PTP']);
					$('#med_HealthProb').val(obj['HAP']);

					$('#prob_assess').val(obj['assessment']);
					$('#prob_recommend').val(obj['recomended']);

					/*checkbox*/

					if (obj['owned'] == 'Y') {
						$("#ass_owned").prop('checked', true);
						$("#ass_owned").val('Y');

					} else if (obj['owned'] == 'N') {

						$("#ass_owned").prop('checked', false);
						$("#ass_owned").val('N');
					}

					if (obj['rent'] == 'Y') {
						$("#ass_rent").prop('checked', true);
						$("#ass_rent").val('Y');
					} else if (obj['rent'] == 'N') {
						$("#ass_rent").prop('checked', false);
						$("#ass_rent").val('N');
					}


					if (obj['institution'] == 'Y') {
						$("#ass_ins").prop('checked', true);
						$("#ass_ins").val('Y');
					} else if (obj['institution'] == 'N') {
						$("#ass_ins").prop('checked', false);
						$("#ass_ins").val('N');
					}

					if (obj['klashared'] == 'Y') {
						$("#ass_shared").prop('checked', true);
						$("#ass_shared").val('Y');
					} else if (obj['klashared'] == 'N') {
						$("#ass_shared").prop('checked', false);
						$("#ass_shared").val('N');
					}


					if (obj['homeless'] == 'Y') {
						$("#ass_home").prop('checked', true);
						$("#ass_home").val('Y');
					} else if (obj['homeless'] == 'N') {
						$("#ass_home").prop('checked', false);
						$("#ass_home").val('N');
					}
//////////////////////////////////////////////////

					if (obj['phicdirect'] == 'Y') {
						$("#ass_PhilDirect").prop('checked', true);
						$("#ass_PhilDirect").val('Y');
					} else if (obj['phicdirect'] == 'N') {
						$("#ass_PhilDirect").prop('checked', false);
						$("#ass_PhilDirect").val('N');
					}

					if (obj['phicindirect'] == 'Y') {
						$("#ass_PhilIndirect").prop('checked', true);
						$("#ass_PhilIndirect").val('Y');
					} else if (obj['phicindirect'] == 'N') {
						$("#ass_PhilIndirect").prop('checked', false);
						$("#ass_PhilIndirect").val('N');
					}
////////////////////////////////////////////////// hidden
					if (obj['inoper'] == 'Y') {
						$("#ass_IOE").prop('checked', true);
						$("#ass_IOE").val('Y');
					} else if (obj['inoper'] == 'N') {
						$("#ass_IOE").prop('checked', false);
						$("#ass_IOE").val('N');
					}

					if (obj['opatient'] == 'Y') {
						$("#ass_OldPat").prop('checked', true);
						$("#ass_OldPat").val('Y');
					} else if (obj['opatient'] == 'N') {
						$("#ass_OldPat").prop('checked', false);
						$("#ass_OldPat").val('N');
					}

					if (obj['npatient'] == 'Y') {
						$("#ass_NewPat").prop('checked', true);
						$("#ass_NewPat").val('Y');
					} else if (obj['npatient'] == 'N') {
						$("#ass_NewPat").prop('checked', false);
						$("#ass_NewPat").val('N');
					}

					if (obj['caseforward'] == 'Y') {
						$("#ass_caseFor").prop('checked', true);
						$("#ass_caseFor").val('Y');
					} else if (obj['caseforward'] == 'N') {
						$("#ass_caseFor").prop('checked', false);
						$("#ass_caseFor").val('N');
					}

					if (obj['closedcase'] == 'Y') {
						$("#ass_closedCase").prop('checked', true);
						$("#ass_closedCase").val('Y');
					} else if (obj['closedcase'] == 'N') {
						$("#ass_closedCase").prop('checked', false);
						$("#ass_closedCase").val('N');
					}
//////////////////////////////////////////////////
					if (obj['osmsenior'] == 'Y') {
						$("#ass_senior").prop('checked', true);
						$("#ass_senior").val('Y');
					} else if (obj['osmsenior'] == 'N') {
						$("#ass_senior").prop('checked', false);
						$("#ass_senior").val('N');
					}

					if (obj['osmbarangay'] == 'Y') {
						$("#ass_brgy").prop('checked', true);
						$("#ass_brgy").val('Y');
					} else if (obj['osmbarangay'] == 'N') {
						$("#ass_brgy").prop('checked', false);
						$("#ass_brgy").val('N');
					}

					if (obj['osmmbh'] == 'Y') {
						$("#ass_bhw").prop('checked', true);
						$("#ass_bhw").val('Y');
					} else if (obj['osmmbh'] == 'N') {
						$("#ass_bhw").prop('checked', false);
						$("#ass_bhw").val('N');
					}

					if (obj['osmpwd'] == 'Y') {
						$("#ass_pwd").prop('checked', true);
						$("#ass_pwd").val('Y');
					} else if (obj['osmpwd'] == 'N') {
						$("#ass_pwd").prop('checked', false);
						$("#ass_pwd").val('N');
					}

					if (obj['osindigen'] == 'Y') {
						$("#ass_indig").prop('checked', true);
						$("#ass_indig").val('Y');
					} else if (obj['osindigen'] == 'N') {
						$("#ass_indig").prop('checked', false);
						$("#ass_indig").val('N');
					}
////////////////////////////////////
					if (obj['lselectric'] == 'Y') {
						$("#ass_elec").prop('checked', true);
						$("#ass_elec").val('Y');
					} else if (obj['lselectric'] == 'N') {
						$("#ass_elec").prop('checked', false);
						$("#ass_elec").val('N');
					}

					if (obj['lscandle'] == 'Y') {
						$("#ass_candle").prop('checked', true);
						$("#ass_candle").val('Y');
					} else if (obj['lscandle'] == 'N') {
						$("#ass_candle").prop('checked', false);
						$("#ass_candle").val('N');
					}

					if (obj['lskeros'] == 'Y') {
						$("#ass_keros").prop('checked', true);
						$("#ass_keros").val('Y');
					} else if (obj['lskeros'] == 'N') {
						$("#ass_keros").prop('checked', false);
						$("#ass_keros").val('N');
					}

					if (obj['wsartesian'] == 'Y') {
						$("#ass_arte").prop('checked', true);
						$("#ass_arte").val('Y');
					} else if (obj['wsartesian'] == 'N') {
						$("#ass_arte").prop('checked', false);
						$("#ass_arte").val('N');
					}

					if (obj['wspublic'] == 'Y') {
						$("#ass_watPublic").prop('checked', true);
						$("#ass_watPublic").val('Y');
						$("#ass_watPublic").removeAttr("disabled");
					} else if (obj['wspublic'] == 'N') {
						$("#ass_watPublic").prop('checked', false);
						$("#ass_watPublic").val('N');
						$("#ass_watPublic").attr("disabled", true);

					}

					if (obj['wsowned'] == 'Y') {
						$("#ass_watOwned").prop('checked', true);
						$("#ass_watOwned").val('Y');
						$("#ass_watOwned").removeAttr("disabled");

					} else if (obj['wsowned'] == 'N') {
						$("#ass_watOwned").prop('checked', false);
						$("#ass_watOwned").val('N');
						$("#ass_watOwned").attr("disabled", true);
						
					}

					if (obj['wswaterdist'] == 'Y') {
						$("#ass_watdis").prop('checked', true);
						$("#ass_watdis").val('Y');
					} else if (obj['wswaterdist'] == 'N') {
						$("#ass_watdis").prop('checked', false);
						$("#ass_watdis").val('N');
					}

					if (obj['fs_gas'] == 'Y') {
						$("#ass_gas").prop('checked', true);
						$("#ass_gas").val('Y');
					} else if (obj['fs_gas'] == 'N') {
						$("#ass_gas").prop('checked', false);
						$("#ass_gas").val('N');
					}

					if (obj['fs_firewood'] == 'Y') {
						$("#ass_fire").prop('checked', true);
						$("#ass_fire").val('Y');
					} else if (obj['fs_firewood'] == 'N') {
						$("#ass_fire").prop('checked', false);
						$("#ass_fire").val('N');
					}

					if (obj['fs_charcoal'] == 'Y') {
						$("#ass_char").prop('checked', true);
						$("#ass_char").val('Y');
					} else if (obj['fs_charcoal'] == 'N') {
						$("#ass_char").prop('checked', false);
						$("#ass_char").val('N');
					}

					$("#ass_educAttain option[value='" + obj['educ_attain_code']+"']").attr("selected","selected");
					$("#ass_CompAdd option[value='" + obj['compupad']+"']").attr("selected","selected");
					$("#ass_occu option[value='" + obj['occup_code']+"']").attr("selected","selected");
					$("#ass_relToPat option[value='" + obj['reltopatient']+"']").attr("selected","selected");
					$("#ass_mswd option[value='" + obj['fcapable']+"']").attr("selected","selected");


					$("#soc_parent_tsi option[value='" + obj['parents']+"']").attr("selected","selected");
					$("#soc_parent_si option[value='" + obj['parents_si']+"']").attr("selected","selected");
					$("#soc_parent_di option[value='" + obj['parents_di']+"']").attr("selected","selected");
					$("#soc_parent_ci option[value='" + obj['parents_ci']+"']").attr("selected","selected");

					$("#soc_spouse_tsi option[value='" + obj['spouse']+"']").attr("selected","selected");
					$("#soc_spouse_si option[value='" + obj['spouse_si']+"']").attr("selected","selected");
					$("#soc_spouse_di option[value='" + obj['spouse_di']+"']").attr("selected","selected");
					$("#soc_spouse_ci option[value='" + obj['spouse_ci']+"']").attr("selected","selected");

					$("#soc_child_tsi option[value='" + obj['child']+"']").attr("selected","selected");
					$("#soc_child_si option[value='" + obj['child_si']+"']").attr("selected","selected");
					$("#soc_child_di option[value='" + obj['child_di']+"']").attr("selected","selected");
					$("#soc_child_ci option[value='" + obj['child_ci']+"']").attr("selected","selected");

					$("#soc_sibling_tsi option[value='" + obj['sibling']+"']").attr("selected","selected");
					$("#soc_sibling_si option[value='" + obj['sibling_si']+"']").attr("selected","selected");
					$("#soc_sibling_di option[value='" + obj['sibling_di']+"']").attr("selected","selected");
					$("#soc_sibling_ci option[value='" + obj['sibling_ci']+"']").attr("selected","selected");

					$("#soc_fammember_tsi option[value='" + obj['familymember']+"']").attr("selected","selected");
					$("#soc_fammember_si option[value='" + obj['familymember_si']+"']").attr("selected","selected");
					$("#soc_fammember_di option[value='" + obj['familymember_di']+"']").attr("selected","selected");
					$("#soc_fammember_ci option[value='" + obj['familymember_ci']+"']").attr("selected","selected");

					$("#soc_significant_tsi option[value='" + obj['significant']+"']").attr("selected","selected");
					$("#soc_significant_si option[value='" + obj['significant_si']+"']").attr("selected","selected");
					$("#soc_significant_di option[value='" + obj['significant_di']+"']").attr("selected","selected");
					$("#soc_significant_ci option[value='" + obj['significant_ci']+"']").attr("selected","selected");

					$("#soc_person_tsi option[value='" + obj['personal_role']+"']").attr("selected","selected");
					$("#soc_person_si option[value='" + obj['personal_role_si']+"']").attr("selected","selected");
					$("#soc_person_di option[value='" + obj['personal_role_di']+"']").attr("selected","selected");
					$("#soc_person_ci option[value='" + obj['personal_role_ci']+"']").attr("selected","selected");

					$("#soc_lover_tsi option[value='" + obj['lover']+"']").attr("selected","selected");
					$("#soc_lover_si option[value='" + obj['lover_si']+"']").attr("selected","selected");
					$("#soc_lover_di option[value='" + obj['lover_di']+"']").attr("selected","selected");
					$("#soc_lover_ci option[value='" + obj['lover_ci']+"']").attr("selected","selected");

					$("#soc_friend_tsi option[value='" + obj['friend']+"']").attr("selected","selected");
					$("#soc_friend_si option[value='" + obj['friend_si']+"']").attr("selected","selected");
					$("#soc_friend_di option[value='" + obj['friend_di']+"']").attr("selected","selected");
					$("#soc_friend_ci option[value='" + obj['friend_ci']+"']").attr("selected","selected");

					$("#soc_neighbor_tsi option[value='" + obj['neighbor']+"']").attr("selected","selected");
					$("#soc_neighbor_si option[value='" + obj['neighbor_si']+"']").attr("selected","selected");
					$("#soc_neighbor_di option[value='" + obj['neighbor_di']+"']").attr("selected","selected");
					$("#soc_neighbor_ci option[value='" + obj['neighbor_ci']+"']").attr("selected","selected");

					$("#soc_member_tsi option[value='" + obj['member']+"']").attr("selected","selected");
					$("#soc_member_si option[value='" + obj['member_si']+"']").attr("selected","selected");
					$("#soc_member_di option[value='" + obj['member_di']+"']").attr("selected","selected");
					$("#soc_member_ci option[value='" + obj['member_ci']+"']").attr("selected","selected");

					$("#soc_other_tsi option[value='" + obj['other']+"']").attr("selected","selected");
					$("#soc_other_si option[value='" + obj['other_si']+"']").attr("selected","selected");
					$("#soc_other_di option[value='" + obj['other_di']+"']").attr("selected","selected");
					$("#soc_other_ci option[value='" + obj['other_ci']+"']").attr("selected","selected");


					$("#soc_occupational_tsi option[value='" + obj['occupational']+"']").attr("selected","selected");
					$("#soc_occupational_si option[value='" + obj['occupational_si']+"']").attr("selected","selected");
					$("#soc_occupational_di option[value='" + obj['occupational_di']+"']").attr("selected","selected");
					$("#soc_occupational_ci option[value='" + obj['occupational_ci']+"']").attr("selected","selected");

					$("#soc_paid_tsi option[value='" + obj['worker_paid']+"']").attr("selected","selected");
					$("#soc_paid_si option[value='" + obj['worker_paid_si']+"']").attr("selected","selected");
					$("#soc_paid_di option[value='" + obj['worker_paid_di']+"']").attr("selected","selected");
					$("#soc_paid_ci option[value='" + obj['worker_paid_ci']+"']").attr("selected","selected");

					$("#soc_home_tsi option[value='" + obj['worker_home']+"']").attr("selected","selected");
					$("#soc_home_si option[value='" + obj['worker_home_si']+"']").attr("selected","selected");
					$("#soc_home_di option[value='" + obj['worker_home_di']+"']").attr("selected","selected");
					$("#soc_home_ci option[value='" + obj['worker_home_ci']+"']").attr("selected","selected");


					$("#soc_volunteer_tsi option[value='" + obj['worker_volunteer']+"']").attr("selected","selected");
					$("#soc_volunteer_si option[value='" + obj['worker_volunteer_si']+"']").attr("selected","selected");
					$("#soc_volunteer_di option[value='" + obj['worker_volunteer_di']+"']").attr("selected","selected");
					$("#soc_volunteer_ci option[value='" + obj['worker_volunteer_ci']+"']").attr("selected","selected");

					$("#soc_student_tsi option[value='" + obj['student']+"']").attr("selected","selected");
					$("#soc_student_si option[value='" + obj['student_si']+"']").attr("selected","selected");
					$("#soc_student_di option[value='" + obj['student_di']+"']").attr("selected","selected");
					$("#soc_student_ci option[value='" + obj['student_ci']+"']").attr("selected","selected");

					$("#soc_other_sp_tsi option[value='" + obj['other_sp']+"']").attr("selected","selected");
					$("#soc_other_sp_si option[value='" + obj['other_sp_si']+"']").attr("selected","selected");
					$("#soc_other_sp_di option[value='" + obj['other_sp_di']+"']").attr("selected","selected");
					$("#soc_other_sp_ci option[value='" + obj['other_sp_ci']+"']").attr("selected","selected");

					$("#soc_sls_role_tsi option[value='" + obj['sls_role']+"']").attr("selected","selected");
					$("#soc_sls_role_si option[value='" + obj['sls_role_si']+"']").attr("selected","selected");
					$("#soc_sls_role_di option[value='" + obj['sls_role_di']+"']").attr("selected","selected");
					$("#soc_sls_role_ci option[value='" + obj['sls_role_ci']+"']").attr("selected","selected");


					$("#soc_consumer_tsi option[value='" + obj['consumer']+"']").attr("selected","selected");
					$("#soc_consumer_si option[value='" + obj['consumer_si']+"']").attr("selected","selected");
					$("#soc_consumer_di option[value='" + obj['consumer_di']+"']").attr("selected","selected");
					$("#soc_consumer_ci option[value='" + obj['consumer_ci']+"']").attr("selected","selected");

					$("#soc_inpatient_tsi option[value='" + obj['inpatient']+"']").attr("selected","selected");
					$("#soc_inpatient_si option[value='" + obj['inpatient_si']+"']").attr("selected","selected");
					$("#soc_inpatient_di option[value='" + obj['inpatient_di']+"']").attr("selected","selected");
					$("#soc_inpatient_ci option[value='" + obj['inpatient_ci']+"']").attr("selected","selected");

					$("#soc_outpatient_tsi option[value='" + obj['outpatient']+"']").attr("selected","selected");
					$("#soc_outpatient_si option[value='" + obj['outpatient_si']+"']").attr("selected","selected");
					$("#soc_outpatient_di option[value='" + obj['outpatient_di']+"']").attr("selected","selected");
					$("#soc_outpatient_ci option[value='" + obj['outpatient_ci']+"']").attr("selected","selected");

					$("#soc_prisoner_tsi option[value='" + obj['prisoner']+"']").attr("selected","selected");
					$("#soc_prisoner_si option[value='" + obj['prisoner_si']+"']").attr("selected","selected");
					$("#soc_prisoner_di option[value='" + obj['prisoner_di']+"']").attr("selected","selected");
					$("#soc_prisoner_ci option[value='" + obj['prisoner_ci']+"']").attr("selected","selected");

					$("#soc_immigrant_leg_tsi option[value='" + obj['immigrant_leg']+"']").attr("selected","selected");
					$("#soc_immigrant_leg_si option[value='" + obj['immigrant_leg_si']+"']").attr("selected","selected");
					$("#soc_immigrant_leg_di option[value='" + obj['immigrant_leg_di']+"']").attr("selected","selected");
					$("#soc_immigrant_leg_ci option[value='" + obj['immigrant_leg_ci']+"']").attr("selected","selected");

					$("#soc_immigrant_ileg_tsi option[value='" + obj['immigrant_ileg']+"']").attr("selected","selected");
					$("#soc_immigrant_ileg_si option[value='" + obj['immigrant_ileg_si']+"']").attr("selected","selected");
					$("#soc_immigrant_ileg_di option[value='" + obj['immigrant_ileg_di']+"']").attr("selected","selected");
					$("#soc_immigrant_ileg_ci option[value='" + obj['immigrant_ileg_ci']+"']").attr("selected","selected");

					$("#soc_immigrant_refugee_tsi option[value='" + obj['immigrant_refugee']+"']").attr("selected","selected");
					$("#soc_immigrant_refugee_si option[value='" + obj['immigrant_refugee_si']+"']").attr("selected","selected");
					$("#soc_immigrant_refugee_di option[value='" + obj['immigrant_refugee_di']+"']").attr("selected","selected");
					$("#soc_immigrant_refugee_ci option[value='" + obj['immigrant_refugee_ci']+"']").attr("selected","selected");

					$("#soc_other_sp2_tsi option[value='" + obj['other_sp2']+"']").attr("selected","selected");
					$("#soc_other_sp2_si option[value='" + obj['other_sp2_si']+"']").attr("selected","selected");
					$("#soc_other_sp2_di option[value='" + obj['other_sp2_di']+"']").attr("selected","selected");
					$("#soc_other_sp2_ci option[value='" + obj['other_sp2_ci']+"']").attr("selected","selected");


					$("#prob_fan_lackreg_si option[value='" + obj['fan_lackreg_si']+"']").attr("selected","selected");
					$("#prob_fan_lackreg_di option[value='" + obj['fan_lackreg_di']+"']").attr("selected","selected");

					$("#prob_fan_nutri_si option[value='" + obj['fan_nutrion_si']+"']").attr("selected","selected");
					$("#prob_fan_nutri_di option[value='" + obj['fan_nutrion_di']+"']").attr("selected","selected");

					$("#prob_fan_docu_si option[value='" + obj['fan_documented_si']+"']").attr("selected","selected");
					$("#prob_fan_docu_di option[value='" + obj['fan_documented_di']+"']").attr("selected","selected");

					$("#prob_fan_other_si option[value='" + obj['fan_other_si']+"']").attr("selected","selected");
					$("#prob_fan_other_di option[value='" + obj['fan_other_di']+"']").attr("selected","selected");

					$("#prob_shelter_absence_si option[value='" + obj['shelter_absence_si']+"']").attr("selected","selected");
					$("#prob_shelter_absence_di option[value='" + obj['shelter_absence_di']+"']").attr("selected","selected");

					$("#prob_shelter_substandard_si option[value='" + obj['shelter_substandard_si']+"']").attr("selected","selected");
					$("#prob_shelter_substandard_di option[value='" + obj['shelter_substandard_di']+"']").attr("selected","selected");

					$("#prob_shelter_other_si option[value='" + obj['shelter_other_si']+"']").attr("selected","selected");
					$("#prob_shelter_other_di option[value='" + obj['shelter_other_di']+"']").attr("selected","selected");



					$("#prob_employment_unemp_si option[value='" + obj['employment_unemp_si']+"']").attr("selected","selected");
					$("#prob_employment_unemp_di option[value='" + obj['employment_unemp_di']+"']").attr("selected","selected");

					$("#prob_employment_under_si option[value='" + obj['employment_under_si']+"']").attr("selected","selected");
					$("#prob_employment_under_di option[value='" + obj['employment_under_di']+"']").attr("selected","selected");

					$("#prob_employment_inappro_si option[value='" + obj['employment_inappro_si']+"']").attr("selected","selected");
					$("#prob_employment_inappro_di option[value='" + obj['employment_inappro_di']+"']").attr("selected","selected");


					$("#prob_othersp_si option[value='" + obj['othersp_si']+"']").attr("selected","selected");
					$("#prob_othersp_di option[value='" + obj['othersp_di']+"']").attr("selected","selected");

					$("#prob_ecores_insuffcom_si option[value='" + obj['ecores_insufficentcom_si']+"']").attr("selected","selected");
					$("#prob_ecores_insuffcom_di option[value='" + obj['ecores_insufficentcom_di']+"']").attr("selected","selected");

					$("#prob_ecores_insuffres_si option[value='" + obj['ecores_insufficentres_si']+"']").attr("selected","selected");
					$("#prob_ecores_insuffres_di option[value='" + obj['ecores_insufficentres_di']+"']").attr("selected","selected");


					$("#prob_ecores_other_si option[value='" + obj['othersp2_si']+"']").attr("selected","selected");
					$("#prob_ecores_other_di option[value='" + obj['othersp2_di']+"']").attr("selected","selected");

					$("#prob_transpo_si option[value='" + obj['transpo_si']+"']").attr("selected","selected");
					$("#prob_transpo_di option[value='" + obj['transpo_di']+"']").attr("selected","selected");

					$("#prob_transpo_other_si option[value='" + obj['othersp3_si']+"']").attr("selected","selected");
					$("#prob_transpo_other_di option[value='" + obj['othersp3_di']+"']").attr("selected","selected");

					$("#prob_basicneed_si option[value='" + obj['basicneedsys_si']+"']").attr("selected","selected");
					$("#prob_basicneed_di option[value='" + obj['basicneedsys_di']+"']").attr("selected","selected");

					$("#prob_affectab_si option[value='" + obj['affectab_si']+"']").attr("selected","selected");
					$("#prob_affectab_di option[value='" + obj['affectab_di']+"']").attr("selected","selected");

					$("#prob_affectsu_si option[value='" + obj['affectsu_si']+"']").attr("selected","selected");
					$("#prob_affectsu_di option[value='" + obj['affectsu_di']+"']").attr("selected","selected");

					$("#prob_affectex_si option[value='" + obj['affectex_si']+"']").attr("selected","selected");
					$("#prob_affectex_di option[value='" + obj['affectex_di']+"']").attr("selected","selected");

					$("#prob_affect_other_si option[value='" + obj['othersp4_si']+"']").attr("selected","selected");
					$("#prob_affect_other_di option[value='" + obj['othersp4_di']+"']").attr("selected","selected");


				}		
			});
}
