	Module=$('#module').val();

	function checkAssessmentExist(enccode,hpercode)
	{
		enccode= encodeURIComponent(encodeURIComponent(enccode));
		hpercode= encodeURIComponent(encodeURIComponent(hpercode));

		$.ajax({
			type: "POST",
			url: "../SocialService/checkAssessmentExist/"+enccode+ "/" + hpercode,
			data: "JSON",
			success: function(data)
			{ 
				if(data==1)
				{	
					$('#AssessmentAddButton').attr('disabled',true);
				}
				else
				{ 
					$('#AssessmentAddButton').removeAttr("disabled");				
				}
			},
			error: function(data)
			{
				alert('Please Try Again!');
			}
		});
	}

	function checkPatient(hpercode)
	{
		hpercode= encodeURIComponent(encodeURIComponent(hpercode));


		$.ajax({
			type: "POST",
			url: baseURL + "SocialService/checkPatient/"+ hpercode,
			data: "JSON",
			success: function(data)
			{ 
				if(data==1)
				{	
					$('#ass_NewPat').val('Y');
					$('#ass_NewPat').prop('checked', true);
					$('#ass_OldPat').attr('disabled', true);


				}
				else if(data > 1)
				{	
					$('#ass_OldPat').val('Y');
					$('#ass_OldPat').prop('checked', true);
					$('#ass_NewPat').attr('disabled', true);

				}
				else
				{ 
					$('#ass_NewPat').prop('checked', false);
					$('#ass_NewPat').val('N');
					$('#ass_OldPat').prop('checked', false);
					$('#ass_OldPat').val('N');
				}
			},
			error: function(data)
			{
				alert('Please Try Again!');
			}
		});
	}

	function initSocialServicewizard(enccode, hpercode)
	{
		SocialServicewizard();
		sum();
		_validateWizard();
		getTypeEncounter(enccode,hpercode)
		checkPatient(hpercode)
	}

	function getTypeEncounter(enccode, hpercode)
	{
		enccode= encodeURIComponent(encodeURIComponent(enccode));
		hpercode= encodeURIComponent(encodeURIComponent(hpercode));

		$.ajax({
			url: baseURL + "SocialService/getTypeEncounter/"+enccode + "/" + hpercode,
			type:"POST",
			data:"JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
				var obj = $.parseJSON(data);
				console.log(obj);
				$("#ass_IOE option[value='" + obj['typeofpatient']+"']").attr("selected","selected");

			},
			error: function(response){
				toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
			}});
	}


	function sum() {
		var Food = document.getElementById('ass_food').value;
		var Educational = document.getElementById('ass_educ').value;
		var Transportation = document.getElementById('ass_transpo').value;
		var Clothing = document.getElementById('ass_cloth').value;
		var Househelp = document.getElementById('ass_houHelp').value;
		var Medical = document.getElementById('ass_medExp').value;
		var Insurance = document.getElementById('ass_insPre').value;
		var Other = document.getElementById('ass_other').value;
		var result = parseInt(Food) + parseInt(Educational)+ parseInt(Transportation) + parseInt(Clothing)+ parseInt(Househelp) + parseInt(Medical)+ parseInt(Insurance) + parseInt(Other);
		if (!isNaN(result)) {
			document.getElementById('ass_totMonExp').value = result;
		}
	}

	function SocialServicewizard()
	{
		
		var btnFinish = $('<button type="button" name ="btnDone" id="btnDone"></button>')
		.text('Done')
		.addClass('btn btn-info btn-ladda btn-square')
		.on('click',function(){$('#AssessmentSummary').modal('show');
			$("#ass_IOE").removeAttr("disabled");
			AssessmentSummary();});

		var btnCancel = $('<button></button>').text('Reset')
		.addClass('btn btn-danger btn-ladda btn-square')
		.on('click',function(){ $('#smartwizard')
			.smartWizard("reset");
		});
		
		$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition){
			
			if(stepPosition === 'first')
			{
				$('#btnDone').prop('disabled', true);
				$("#prev-btn").addClass('disabled');
				$("#prev-btn").addClass('disabled');

			}
			else if(stepPosition === 'final')
			{
				$("#next-btn").addClass('disabled');
				$('#btnDone').prop('disabled', false);
			}
			else
			{
				$("#prev-btn").removeClass('disabled');
				$("#next-btn").removeClass('disabled');
				$('#btnDone').prop('disabled', true);
			}

		});


		$('#smartwizard').smartWizard({
			selected: 0 ,
			theme: 'circles',
			transitionEffect:'fade',
			showStepURLhash: false,
			transitionSpeed: '1500',
			toolbarSettings: 
			{
				toolbarPosition: 'top',
				toolbarExtraButtons: [btnFinish, btnCancel]
			}
			
		});
	}

	function _validateWizard()
	{
		$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
			switch(stepNumber)
			{		
				case 0:
				if ($('#form-step-1').valid()) 
				{
					FamilyCompositionList();
					return true;
				}else 
				{
					return false; 
				}
				case 1:
				if ($('#form-step-2').valid()) 
				{
					return true;
				}else 
				{
					return false; 
				}
				break;
				case 2:
				if ($('#form-step-3').valid()) 
				{
					return true;
				} else 
				{
					return false; 
				}
				break;
				case 3:
				if ($('#form-step-4').valid()) 
				{
					return true;
				}else
				{
					return false; 
				}
				break;
			}
		});
	}


	function AssessmentSummary()
	{ 	
		
		$('#saveenccode').val($.session.get('enccode'));
		$('#savehpercode').val($.session.get('hpercode'));
		$('#formIdentif').val($('#formIden_assess').val());


		$('#assess_source_refname1').text($('#source_refname').val());
		$('#assess_source_refaddress1').text($('#source_refaddress').val());
		$('#assess_source_telno1').text($('#source_telno').val());

		$('#assess_med_DurOfProb1').text($('#med_DurOfProb').val());
		$('#assess_med_PresTreat1').text($('#med_PresTreat').val());
		$('#assess_med_PrevTreat1').text($('#med_PrevTreat').val());
		$('#assess_med_HealthProb1').text($('#med_HealthProb').val());

		$('#assess_prob_assess1').text($('#prob_assess').val());
		$('#assess_prob_recommend1').text($('#prob_recommend').val());


		$('#assess_source_refname').val($('#source_refname').val());
		$('#assess_source_refaddress').val($('#source_refaddress').val());
		$('#assess_source_telno').val($('#source_telno').val());

		$('#assess_med_DurOfProb').val($('#med_DurOfProb').val());
		$('#assess_med_PresTreat').val($('#med_PresTreat').val());
		$('#assess_med_PrevTreat').val($('#med_PrevTreat').val());
		$('#assess_med_HealthProb').val($('#med_HealthProb').val());

		$('#assess_prob_assess').val($('#prob_assess').val());
		$('#assess_prob_recommend').val($('#prob_recommend').val());
		
		$('#assess_dateasof').val($('#dateasof').val());
		$('#assess_ass_CompAdd').val($('#ass_CompAdd').val());
		$('#assess_ass_tempAdd').val($('#ass_tempAdd').val());

		$('#assess_ass_owned').val($('#ass_owned').val());
		$('#assess_ass_rent').val($('#ass_rent').val());
		$('#assess_ass_shared').val($('#ass_shared').val());
		$('#assess_ass_ins').val($('#ass_ins').val());
		$('#assess_ass_home').val($('#ass_home').val());

		$('#assess_ass_PhilDirect').val($('#ass_PhilDirect').val());
		
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
		$('#assess_ass_oth_spec').val($('#assess_ass_oth_spec').val());
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

		
	}
	


	function PatientAssessmentFormData(enccode,hpercode) {
		var enccode = encodeURIComponent(encodeURIComponent(enccode));
		var hpercode = encodeURIComponent(encodeURIComponent(hpercode));

		$.ajax({
			type: "POST",
			url  : baseURL+"SocialService/updateAssessmentForm/" + enccode + "/"+ hpercode,
			data: {
				'enccode' : enccode,
				'hpercode': hpercode
			},
			dataType: "JSON",
			success: function(obj){
				var dateinterview = obj['datntrview'];
				var dateinterviews = ((dateinterview == "1970-01-01 00:00:00") || (dateinterview == null)) ? "" : setTimeLocale(dateinterview);
				$("#dateasof").val(dateinterviews);

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

				sum();
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
