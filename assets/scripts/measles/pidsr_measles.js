var Module=$('#module').val();

function initcheck()
    {
	selection();
	}

function selection()
 {
    $("#preg_yes").click(function(){
            if($(this).is(":checked")){
                $("#week_preg").removeAttr("readonly");
            }
        });
		
    $("#preg_no").click(function(){
            if($(this).is(":checked")){
                $("#week_preg").attr("readonly", true);
                $("#week_preg").val(""); 
            } 
        }); 
	
    $("#preg_unknown").click(function(){
            if($(this).is(":checked")){
                $("#week_preg").attr("readonly", true);
                $("#week_preg").val("");
            } 
        }); 
		
	$("#fever_yes").click(function(){
            if($(this).is(":checked")){
                $("#date_onset_fever").removeAttr("readonly");
            }
        });
		
    $("#fever_no").click(function(){
            if($(this).is(":checked")){
                $("#date_onset_fever").attr("readonly", true);
				$("#date_onset_fever").val("");
            } 
        }); 
		
	$("#rash_yes").click(function(){
            if($(this).is(":checked")){
                $("#date_onset_rash").removeAttr("readonly");
            }
        });
		
    $("#rash_no").click(function(){
            if($(this).is(":checked")){
                $("#date_onset_rash").attr("readonly", true);
				$("#date_onset_rash").val("");
            } 
        }); 
		
	$("#complication_yes").click(function(){
            if($(this).is(":checked")){
                $("#specify_compilation").removeAttr("readonly");
            }
        });
		
    $("#complication_no").click(function(){
            if($(this).is(":checked")){
                $("#specify_compilation").attr("readonly", true);
				$("#specify_compilation").val(""); 
            } 
        }); 


    $("#lymphatic_yes").click(function(){
            if($(this).is(":checked")){
                $("#cervical_yes").removeAttr("readonly");
				$("#post_auricular_yes").removeAttr("readonly");
				$("#sub_occipital_yes").removeAttr("readonly");
				$("#others_specify").removeAttr("readonly");
            }
        });
		
    $("#lymphatic_no").click(function(){
            if($(this).is(":checked")){
                $("#cervical_yes").attr("readonly", true);
				$("#post_auricular_yes").attr("readonly", true);
				$("#sub_occipital_yes").attr("readonly", true);
				$("#others_specify").attr("readonly", true);
				$("#specify_others").attr("readonly", true);
				
				$("#cervical_yes").prop("checked", false);
				$("#post_auricular_yes").prop("checked", false);
				$("#sub_occipital_yes").prop("checked", false);
				$("#others_specify").prop("checked", false);
				
				$("#cervical_yes").val("");
				$("#post_auricular_yes").val("");
				$("#sub_occipital_yes").val("");
				$("#others_specify").val("");
				$("#specify_others").val("");
            } 
        }); 
	
	$("#cervical_yes").click(function(){
            if($(this).is(":checked")){
                $("#specify_others").attr("readonly", true);
                $("#specify_others").val(""); 
            }
        });
		
	$("#post_auricular_yes").click(function(){
            if($(this).is(":checked")){
                $("#specify_others").attr("readonly", true);
                $("#specify_others").val(""); 
            }
        });
		
	$("#sub_occipital_yes").click(function(){
            if($(this).is(":checked")){
                $("#specify_others").attr("readonly", true);
                $("#specify_others").val(""); 
            }
        });
		
	$("#others_specify").click(function(){
            if($(this).is(":checked")){
                $("#specify_others").removeAttr("readonly");
            }
        });
		
	$("#mcv_yes").click(function(){
            if($(this).is(":checked")){
			$("#mv").removeAttr("readonly");
			$("#mr").removeAttr("readonly");
			$("#mmr").removeAttr("readonly");
			$("#date_received_mcv").removeAttr("readonly");
			$("#vaccine_vaccination").removeAttr("readonly");
			$("#vaccine_logsheet").removeAttr("readonly");
			$("#vaccine_byrecall").removeAttr("readonly");
			$("#vaccine_others").removeAttr("readonly");
			$("#special_campaigns_yes").removeAttr("readonly");
			$("#special_campaigns_no").removeAttr("readonly");
			
			$("#mother_busy").attr("readonly", true);
			$("#child_sick").attr("readonly", true);
			$("#forget_schedule").attr("readonly", true);
			$("#against_belief").attr("readonly", true);
			$("#novaccine_available").attr("readonly", true);
			$("#med_contraindication").attr("readonly", true);
			$("#novaccinator_available").attr("readonly", true);
			$("#side_effects").attr("readonly", true);
			$("#not_eligible").attr("readonly", true);
			$("#others_mcv").attr("readonly", true);
			
			$("#mother_busy").prop("checked", false);
			$("#child_sick").prop("checked", false);
			$("#forget_schedule").prop("checked", false);
			$("#against_belief").prop("checked", false);
			$("#novaccine_available").prop("checked", false);
			$("#med_contraindication").prop("checked", false);
			$("#novaccinator_available").prop("checked", false);
			$("#side_effects").prop("checked", false);
			$("#not_eligible").prop("checked", false);
			
			$("#others_mcv").val(""); 
			
			$("#vaccine_others_specify").removeAttr("readonly");
		}
    });
	
	$("#mcv_no").click(function(){
            if($(this).is(":checked")){
			 $("#mv").attr("readonly", true);
			 $("#mr").attr("readonly", true);
			 $("#mmr").attr("readonly", true);
			 $("#vaccine_vaccination").attr("readonly", true);
			 $("#vaccine_logsheet").attr("readonly", true);
			 $("#vaccine_byrecall").attr("readonly", true);
			 $("#vaccine_others").attr("readonly", true);
			 $("#special_campaigns_yes").attr("readonly", true);
			 $("#special_campaigns_no").attr("readonly", true);
		 	 $("#date_received_mcv").attr("readonly", true);
			 
			 $("#mother_busy").removeAttr("readonly");
			 $("#child_sick").removeAttr("readonly");
			 $("#forget_schedule").removeAttr("readonly");
			 $("#against_belief").removeAttr("readonly");
			 $("#novaccine_available").removeAttr("readonly");
			 $("#med_contraindication").removeAttr("readonly");
			 $("#novaccinator_available").removeAttr("readonly");
			 $("#side_effects").removeAttr("readonly");
			 $("#not_eligible").removeAttr("readonly");
			 $("#others_mcv").removeAttr("readonly");
			 
			 $("#vaccine_vaccination").prop("checked", false);
			 $("#vaccine_logsheet").prop("checked", false);
			 $("#vaccine_byrecall").prop("checked", false);
			 $("#vaccine_others").prop("checked", false);

			 $("#special_campaigns_yes").prop("checked", false);
			 $("#special_campaigns_no").prop("checked", false);
			 
			 $("#mv").val("");
			 $("#mr").val("");
			 $("#mmr").val("");	
			 $("#vaccine_others_specify").val("");
			 $("#date_received_mcv").val("");
			 
			 $("#vaccine_others_specify").attr("readonly", true);
			 $("#vaccine_others_specify").val("");
			 
		}
    });
 
	$("#vaccine_vaccination").click(function(){
            if($(this).is(":checked")){
                $("#vaccine_others_specify").attr("readonly", true);
                $("#vaccine_others_specify").val(""); 
            }
        });
		
	$("#vaccine_logsheet").click(function(){
            if($(this).is(":checked")){
                $("#vaccine_others_specify").attr("readonly", true);
                $("#vaccine_others_specify").val(""); 
            }
        });
		
	$("#vaccine_byrecall").click(function(){
            if($(this).is(":checked")){
                $("#vaccine_others_specify").attr("readonly", true);
                $("#vaccine_others_specify").val(""); 
            }
        });
		
	$("#vaccine_others").click(function(){
            if($(this).is(":checked")){
                $("#vaccine_others_specify").removeAttr("readonly");
            }
        });
		
	$("#mother_busy").click(function(){
            if($(this).is(":checked")){
                $("#mother_busy").val("Y"); 
            }
        });
		
	$("#against_belief").click(function(){
            if($(this).is(":checked")){
                $("#against_belief").val("Y"); 
            }
        });
		
	$("#med_contraindication").click(function(){
            if($(this).is(":checked")){
                $("#med_contraindication").val("Y"); 
            }
        });
	
	$("#side_effects").click(function(){
            if($(this).is(":checked")){
                $("#side_effects").val("Y"); 
            }
        });
		
	$("#child_sick").click(function(){
            if($(this).is(":checked")){
                $("#child_sick").val("Y"); 
            }
        });
		
	$("#novaccine_available").click(function(){
            if($(this).is(":checked")){
                $("#novaccine_available").val("Y"); 
            }
        });
	
	$("#novaccinator_available").click(function(){
            if($(this).is(":checked")){
                $("#novaccinator_available").val("Y"); 
            }
        });
	
	$("#not_eligible").click(function(){
            if($(this).is(":checked")){
                $("#not_eligible").val("Y"); 
            }
        });
		
	$("#forget_schedule").click(function(){
            if($(this).is(":checked")){
                $("#forget_schedule").val("Y"); 
            }
        });
		
	$("#history_travel_yes").click(function(){
            if($(this).is(":checked")){
                $("#specify_place").removeAttr("readonly");
				$("#timing").removeAttr("readonly");
				$("#rash_onset_seven").removeAttr("readonly");
				$("#rash_onset_uptotwentythree").removeAttr("readonly");
            }
        });
		
    $("#history_travel_no").click(function(){
            if($(this).is(":checked")){
                $("#specify_place").attr("readonly", true);
				$("#timing").attr("readonly", true);
				$("#rash_onset_seven").attr("readonly", true);
				$("#rash_onset_uptotwentythree").attr("readonly", true);
				$("#rash_onset_seven").prop("checked", false);
				$("#rash_onset_uptotwentythree").prop("checked", false);
				$("#specify_place").val("");
				$("#timing").val("");
            } 
        }); 
		
	$("#rash_onset_seven").click(function(){
            if($(this).is(":checked")){
               $("#rash_onset_uptotwentythree").attr("readonly", true);
			   $("#rash_onset_uptotwentythree").prop("checked", false);
            }else{
			   $("#rash_onset_uptotwentythree").removeAttr("readonly");
			}
        });
	
	$("#rash_onset_uptotwentythree").click(function(){
            if($(this).is(":checked")){
               $("#rash_onset_seven").attr("readonly", true);
			   $("#rash_onset_seven").prop("checked", false);
            }else{
			   $("#rash_onset_seven").removeAttr("readonly");
			}
        });
		
	$("#rubella_case_yes").click(function(){
            if($(this).is(":checked")){
                $("#rubella_name_contact").removeAttr("readonly");
				$("#rubella_place_residence").removeAttr("readonly");
				$("#rubella_date_contact").removeAttr("readonly"); 
            }
        });
		
    $("#rubella_case_no").click(function(){
            if($(this).is(":checked")){
                $("#rubella_name_contact").attr("readonly", true);
				$("#rubella_place_residence").attr("readonly", true);
				$("#rubella_date_contact").attr("readonly", true);

				$("#rubella_name_contact").val("");
				$("#rubella_place_residence").val("");
				$("#rubella_date_contact").val("");
            } 
        }); 
	
	$("#rubella_case_unknown").click(function(){
            if($(this).is(":checked")){
                $("#rubella_name_contact").attr("readonly", true);
				$("#rubella_place_residence").attr("readonly", true);
				$("#rubella_date_contact").attr("readonly", true);
               
			   $("#rubella_case_unknown").val("U");

				$("#rubella_name_contact").val("");
				$("#rubella_place_residence").val("");
				$("#rubella_date_contact").val("");
            }
        });
		
	$("#serum").click(function(){
            if($(this).is(":checked")){
                $("#serum_date_collected").removeAttr("readonly");
				$("#serum_datesent_RITM").removeAttr("readonly");
				$("#serum_datereceived_RITM").removeAttr("readonly");
				$("#serum_measles_igm_result").removeAttr("readonly");
				$("#serum_rubella_igm_result").removeAttr("readonly");
            }else{
				$("#serum_date_collected").attr("readonly", true);
				$("#serum_datesent_RITM").attr("readonly", true);
				$("#serum_datereceived_RITM").attr("readonly", true);
				$("#serum_measles_igm_result").attr("readonly", true);
				$("#serum_rubella_igm_result").attr("readonly", true);
				
				$("#serum_date_collected").val("");
				$("#serum_datesent_RITM").val("");
				$("#serum_datereceived_RITM").val("");
				$("#serum_measles_igm_result").val("");
				$("#serum_rubella_igm_result").val("");
			}
        });
		
	$("#dried_blood").click(function(){
            if($(this).is(":checked")){
                $("#driedblood_date_collected").removeAttr("readonly");
				$("#driedblood_datesent_RITM").removeAttr("readonly");
				$("#driedblood_datereceived_RITM").removeAttr("readonly");
				$("#dried_blood_measles_igm_result").removeAttr("readonly");
				$("#dried_blood_rubella_igm_result").removeAttr("readonly");
            }else{
				$("#driedblood_date_collected").attr("readonly", true);
				$("#driedblood_datesent_RITM").attr("readonly", true);
				$("#driedblood_datereceived_RITM").attr("readonly", true);
				$("#dried_blood_measles_igm_result").attr("readonly", true);
				$("#dried_blood_rubella_igm_result").attr("readonly", true);
				
				$("#driedblood_date_collected").val("");
				$("#driedblood_datesent_RITM").val("");
				$("#driedblood_datereceived_RITM").val("");
				$("#dried_blood_measles_igm_result").val("");
				$("#dried_blood_rubella_igm_result").val("");
			}
        });
		
	$("#swab").click(function(){
            if($(this).is(":checked")){
                $("#swab_date_collected").removeAttr("readonly");
				$("#swab_datesent_RITM").removeAttr("readonly");
				$("#swab_datereceived_RITM").removeAttr("readonly");
				$("#swab_virus_isolation_result").removeAttr("readonly");
				$("#swab_PCR_result").removeAttr("readonly");
            }else{
				$("#swab_date_collected").attr("readonly", true);
				$("#swab_datesent_RITM").attr("readonly", true);
				$("#swab_datereceived_RITM").attr("readonly", true);
				$("#swab_virus_isolation_result").attr("readonly", true);
				$("#swab_PCR_result").attr("readonly", true);
				
				$("#swab_date_collected").val("");
				$("#swab_datesent_RITM").val("");
				$("#swab_datereceived_RITM").val("");
				$("#swab_virus_isolation_result").val("");
				$("#swab_PCR_result").val("");
			}
        });
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 