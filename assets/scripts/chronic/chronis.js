var Module=$('#module').val();

function initcheck()
{
   smoke();
   occupational();
   pulmonary();
   secondsmoke();
   indor();
   outdor();
   $("#info_race_oth").attr("disabled", true);
   $("#info_ethnic_oth").attr("disabled", true);
   $("#info_educat_oth").attr("disabled", true);
   $("#underly_cause").attr("disabled", true);
   $("#occup_others").attr("disabled", true);
   $("#pulmon_others").attr("disabled", true);
   $("#copd_sign_others").attr("disabled", true);
   $("#copd_treat_others").attr("disabled", true);
   $("#copd_type_others").attr("disabled", true);
   $("#smoke").click(smoke);
   $("#occup_exp").click(occupational);
   $("#pulmon_infec").click(pulmonary);
   $("#shs_smoke").click(secondsmoke);
   $("#pulmon_indoor").click(indor);
   $("#pulmon_outdoor").click(outdor);	
   $('#datedeath').attr( "disabled", true );
   $('#placedeath').attr( "disabled", true );
   $('#selFac2').attr( "disabled", true );
   $('#selFac3').attr( "disabled", true );
   $('#deathreason').attr( "disabled", true );   
   $('#reasonrefer').attr( "disabled", true );	
}

function smoke() {
    if (this.checked) {
        $("input.ssmoke").removeAttr("disabled");
        $("input.ssmoke").prop( "checked", false );
    } else {
       $("input.ssmoke").attr("disabled", true);
       $("input.ssmoke").prop( "checked", false );
       $("#age_smoke").val("");
       $("#num_smoke").val("");
       $("#less_smoke").val("N");
       $("#more_smoke").val("N");
   }
}

function secondsmoke() {
  if (this.checked) {
    $("input.secsmoke").removeAttr("disabled");
    $("input.secsmoke").prop("checked", false );

} else {
    $("input.secsmoke").attr("disabled", true);
    $("input.secsmoke").prop( "checked", false );
    $("#expshs_smoke").val("N");
    $("#numyear_smoke").val("");
}
}

function occupational() {
    if (this.checked) {
      $("input.occup").removeAttr("disabled");

  } else {
      $("input.occup").attr("disabled", true);
  }
}

function pulmonary() {
    if (this.checked) {
      $("input.pulmon").removeAttr("disabled");
  } else {
      $("input.pulmon").attr("disabled", true);
  }
}
function indor() {
    if (this.checked) {
      $("input.indoor").removeAttr("disabled");
  } else {
      $("input.indoor").attr("disabled", true);
  }
}
function outdor() {
    if (this.checked) {
      $("input.outdoor").removeAttr("disabled");
  } else {
      $("input.outdoor").attr("disabled", true);
  }
}

$('#info_race').change(function() {
  if( $(this).val() == '6' ) {
    $('#info_race_oth').removeAttr( "disabled" );

} else {       
    $('#info_race_oth').attr( "disabled", true );
    $('#info_race_oth').prop('selectedIndex', [0]);
}
});

$('#info_ethnic').change(function() {
  if( $(this).val() == '10' ) {
    $('#info_ethnic_oth').removeAttr( "disabled" );

} else {       
    $('#info_ethnic_oth').attr( "disabled", true );
    $('#info_ethnic_oth').prop('selectedIndex', [0]);
}
});


$('#info_educat').change(function() {
  if( $(this).val() == 'OT' ) {
    $('#info_educat_oth').removeAttr( "disabled" );

} else {       
    $('#info_educat_oth').attr( "disabled", true );
    $('#info_educat_oth').prop('selectedIndex', [0]);
}
});


$('#dispos').change(function() {
  if( $(this).val() == 'DIEDD' ) {
    $('#datedeath').removeAttr( "disabled" );
    $('#placedeath').removeAttr( "disabled" );
    $('#placedeath').val($('#info_rephealthfac').val());
    $('#selFac3').removeAttr( "disabled" );
    $('#deathreason_refer').removeAttr( "disabled" );
    $('#dispos').prop('selectedIndex', [7]);
} else {       
    $('#datedeath').attr( "disabled", true );
    $('#placedeath').attr( "disabled", true );
    $('#placedeath').val("");
    $('#selFac3').attr( "disabled", true );
    $('#deathreason_refer').attr( "disabled", true );
    $('#dispos').prop('selectedIndex', [0]);
    $('#datedeath').val("0000-00-00 00:00:00");
    $('#diagICD_diag_death').empty();
}
});

$('#copd_type').change(function() {
    if( $(this).val() == 'OTHER') {
        $('#copd_type_others').prop( "disabled", false );
    } else {       
        $('#copd_type_others').prop( "disabled", true );
        $('#copd_type_others').val("");
    }
});


$("#ref_from").click(function(){
    if($(this).is(":checked")){
        $("#ref_from").val("Y");
        $("#selFac2").removeAttr("disabled");
        $("#copd_reasonrefer").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#ref_from").val("N");
        $("#selFac2").attr("disabled", true);
        $("#copd_reasonrefer").attr("disabled", true);
        $("#copd_reasonrefer").val("");
        $("#selFac2").val("");

    }
});


$("#smoke").click(function(){
    if($(this).is(":checked")){
        $("#smoke").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#smoke").val("N");
    }
});

$("#less_smoke").click(function(){
    if($(this).is(":checked")){
     $("#more_smoke").attr("disabled", true);
     $("#less_smoke").val("Y");
 }
 else if($(this).is(":not(:checked)")){
     $("#more_smoke").removeAttr("disabled");
     $("#more_smoke").prop( "checked", false );
     $("#less_smoke").val("N");
 }
});

$("#more_smoke").click(function(){
    if($(this).is(":checked")){
     $("#less_smoke").attr("disabled", true);
     $("#more_smoke").val("Y");
 }
 else if($(this).is(":not(:checked)")){
     $("#less_smoke").removeAttr("disabled");
     $("#less_smoke").prop( "checked", false );
     $("#more_smoke").val("N");
 }
});

$("#shs_smoke").click(function(){
    if($(this).is(":checked")){
        $("#shs_smoke").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#shs_smoke").val("N");
        $("#expshs_smoke").prop("checked", false);
        $("#numyear_smoke").val("");
    }
});

$("#expshs_smoke").click(function(){
    if($(this).is(":checked")){
        $("#expshs_smoke").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#expshs_smoke").val("N");
        $("#numyear_smoke").val("");
    }
});

$("#occup_exp").click(function(){
    if($(this).is(":checked")){
        $("#occup_exp").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_exp").val("N");
        $("#occup_cement").prop( "checked", false );
        $("#occup_cotton").prop( "checked", false );
        $("#occup_grains").prop( "checked", false );
        $("#occup_metal").prop( "checked", false );
        $("#occup_paper").prop( "checked", false );
        $("#occup_silica").prop( "checked", false );
        $("#occup_oth").prop( "checked", false );
    }
});

$("#occup_cement").click(function(){
    if($(this).is(":checked")){
        $("#occup_cement").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_cement").val("N");
    }
});

$("#occup_cotton").click(function(){
    if($(this).is(":checked")){
        $("#occup_cotton").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_cotton").val("N");
    }
}); 

$("#occup_grains").click(function(){
    if($(this).is(":checked")){
        $("#occup_grains").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_grains").val("N");
    }
}); 


$("#occup_metal").click(function(){
    if($(this).is(":checked")){
        $("#occup_metal").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_metal").val("N");
    }
}); 

$("#occup_paper").click(function(){
    if($(this).is(":checked")){
        $("#occup_paper").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_paper").val("N");
    }
}); 

$("#occup_silica").click(function(){
    if($(this).is(":checked")){
        $("#occup_silica").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_silica").val("N");
    }
});  

$("#occup_oth").click(function(){
    if($(this).is(":checked")){
      $("#occup_oth").val("Y");
      $("#occup_others").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#occup_oth").val("N");
    $("#occup_others").attr("disabled", true);
    $("#occup_others").val("");
}
});

$("#pulmon_infec").click(function(){
    if($(this).is(":checked")){
        $("#pulmon_infec").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pulmon_infec").val("N");
    }
});  

$("#pulmon_tb").click(function(){
    if($(this).is(":checked")){
        $("#pulmon_tb").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pulmon_tb").val("N");
    }
});  

$("#pulmon_oth").click(function(){
    if($(this).is(":checked")){
      $("#pulmon_oth").val("Y");
      $("#pulmon_others").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#pulmon_oth").val("N");
    $("#pulmon_others").attr("disabled", true);
    $("#pulmon_others").val("");
}
});  

$("#pulmon_indoor").click(function(){
    if($(this).is(":checked")){
        $("#pulmon_indoor").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pulmon_indoor").val("N");
        $("#pulmon_indoorpollut").val("");
    }
});  

$("#pulmon_outdoor").click(function(){
    if($(this).is(":checked")){
        $("#pulmon_outdoor").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pulmon_outdoor").val("N");
        $("#pulmon_outdoorpollut").val("");
    }
}); 

$("#signs_chest").click(function(){
    if($(this).is(":checked")){
        $("#signs_chest").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_chest").val("N");
    }
});  

$("#signs_chronic").click(function(){
    if($(this).is(":checked")){
        $("#signs_chronic").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_chronic").val("N");
    }
});  

$("#signs_fingers").click(function(){
    if($(this).is(":checked")){
        $("#signs_fingers").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_fingers").val("N");
    }
});  
$("#signs_cyanosis").click(function(){
    if($(this).is(":checked")){
        $("#signs_cyanosis").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_cyanosis").val("N");
    }
});  
$("#signs_dyspnea").click(function(){
    if($(this).is(":checked")){
        $("#signs_dyspnea").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_dyspnea").val("N");
    }
});  
$("#signs_freqinfec").click(function(){
    if($(this).is(":checked")){
        $("#signs_freqinfec").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_freqinfec").val("N");
    }
}); 
$("#signs_freqinfec").click(function(){
    if($(this).is(":checked")){
        $("#signs_freqinfec").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_freqinfec").val("N");
    }
}); 
$("#signs_hemo").click(function(){
    if($(this).is(":checked")){
        $("#signs_hemo").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_hemo").val("N");
    }
}); 
$("#signs_sputum").click(function(){
    if($(this).is(":checked")){
        $("#signs_sputum").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_sputum").val("N");
    }
});  

$("#signs_wheez").click(function(){
    if($(this).is(":checked")){
        $("#signs_wheez").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#signs_wheez").val("N");
    }
});  


$("#signs_others").click(function(){
    if($(this).is(":checked")){
      $("#signs_others").val("Y");
      $("#copd_sign_others").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#signs_others").val("N");
    $("#copd_sign_others").attr("disabled", true);
    $("#copd_sign_others").val("");
}
});


$("#treat_bronc").click(function(){
    if($(this).is(":checked")){
        $("#treat_bronc").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat_bronc").val("N");
    }
}); 

$("#treat_corti").click(function(){
    if($(this).is(":checked")){
        $("#treat_corti").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat_corti").val("N");
    }
});

$("#treat_combi").click(function(){
    if($(this).is(":checked")){
        $("#treat_combi").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat_combi").val("N");
    }
});
$("#treat_muco").click(function(){
    if($(this).is(":checked")){
        $("#treat_muco").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat_muco").val("N");
    }
});

$("#treat_antibio").click(function(){
    if($(this).is(":checked")){
        $("#treat_antibio").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat_antibio").val("N");
    }
});

$("#severe_atrisk").click(function(){
    if($(this).is(":checked")){
        $("#severe_atrisk").val("Y");

        $("#severe_mild").prop("checked", false);
        $("#severe_moderate").prop("checked", false);
        $("#severe_severe").prop("checked", false);
        $("#severe_very_severe").prop("checked", false);
        $("#severe_unkn").prop("checked", false);


        $("#severe_mild").val("N");
        $("#severe_moderate").val("N");
        $("#severe_severe").val("N");
        $("#severe_very_severe").val("N");
        $("#severe_unkn").val("N");

        $("#severe_mild").attr("disabled", true);
        $("#severe_moderate").attr("disabled", true);
        $("#severe_severe").attr("disabled", true);
        $("#severe_very_severe").attr("disabled", true);
        $("#severe_unkn").attr("disabled", true);

    }
    else if($(this).is(":not(:checked)")){
        $("#severe_atrisk").val("N");

        $("#severe_mild").removeAttr("disabled");
        $("#severe_moderate").removeAttr("disabled");
        $("#severe_severe").removeAttr("disabled");
        $("#severe_very_severe").removeAttr("disabled");
        $("#severe_unkn").removeAttr("disabled");
    }
}); 


$("#severe_mild").click(function(){
    if($(this).is(":checked")){
        $("#severe_mild").val("Y");

        $("#severe_atrisk").prop("checked", false);
        $("#severe_moderate").prop("checked", false);
        $("#severe_severe").prop("checked", false);
        $("#severe_very_severe").prop("checked", false);
        $("#severe_unkn").prop("checked", false);

        $("#severe_atrisk").val("N");
        $("#severe_moderate").val("N");
        $("#severe_severe").val("N");
        $("#severe_very_severe").val("N");
        $("#severe_unkn").val("N");

        $("#severe_atrisk").attr("disabled", true);
        $("#severe_moderate").attr("disabled", true);
        $("#severe_severe").attr("disabled", true);
        $("#severe_very_severe").attr("disabled", true);
        $("#severe_unkn").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#severe_mild").val("N");

        $("#severe_atrisk").removeAttr("disabled");
        $("#severe_moderate").removeAttr("disabled");
        $("#severe_severe").removeAttr("disabled");
        $("#severe_very_severe").removeAttr("disabled");
        $("#severe_unkn").removeAttr("disabled");
    }
});

$("#severe_moderate").click(function(){
    if($(this).is(":checked")){
        $("#severe_moderate").val("Y");

        $("#severe_atrisk").prop("checked", false);
        $("#severe_mild").prop("checked", false);
        $("#severe_severe").prop("checked", false);
        $("#severe_very_severe").prop("checked", false);
        $("#severe_unkn").prop("checked", false);

        $("#severe_atrisk").val("N");
        $("#severe_mild").val("N");
        $("#severe_severe").val("N");
        $("#severe_very_severe").val("N");
        $("#severe_unkn").val("N");

        $("#severe_atrisk").attr("disabled", true);
        $("#severe_mild").attr("disabled", true);
        $("#severe_severe").attr("disabled", true);
        $("#severe_very_severe").attr("disabled", true);
        $("#severe_unkn").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#severe_moderate").val("N");

        $("#severe_atrisk").removeAttr("disabled");
        $("#severe_mild").removeAttr("disabled");
        $("#severe_severe").removeAttr("disabled");
        $("#severe_very_severe").removeAttr("disabled");
        $("#severe_unkn").removeAttr("disabled");
    }
}); 

$("#severe_severe").click(function(){
    if($(this).is(":checked")){
        $("#severe_severe").val("Y");

        $("#severe_atrisk").prop("checked", false);
        $("#severe_mild").prop("checked", false);
        $("#severe_moderate").prop("checked", false);
        $("#severe_very_severe").prop("checked", false);
        $("#severe_unkn").prop("checked", false);

        $("#severe_atrisk").val("N");
        $("#severe_mild").val("N");
        $("#severe_moderate").val("N");
        $("#severe_very_severe").val("N");
        $("#severe_unkn").val("N");

        $("#severe_atrisk").attr("disabled", true);
        $("#severe_mild").attr("disabled", true);
        $("#severe_moderate").attr("disabled", true);
        $("#severe_very_severe").attr("disabled", true);
        $("#severe_unkn").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#severe_severe").val("N");

        $("#severe_atrisk").removeAttr("disabled");
        $("#severe_mild").removeAttr("disabled");
        $("#severe_moderate").removeAttr("disabled");
        $("#severe_very_severe").removeAttr("disabled");
        $("#severe_unkn").removeAttr("disabled");
    }
});


$("#severe_very_severe").click(function(){
    if($(this).is(":checked")){
        $("#severe_very_severe").val("Y");

        $("#severe_atrisk").prop("checked", false);
        $("#severe_mild").prop("checked", false);
        $("#severe_moderate").prop("checked", false);
        $("#severe_severe").prop("checked", false);
        $("#severe_unkn").prop("checked", false);

        $("#severe_atrisk").val("N");
        $("#severe_mild").val("N");
        $("#severe_moderate").val("N");
        $("#severe_severe").val("N");
        $("#severe_unkn").val("N");

        $("#severe_atrisk").attr("disabled", true);
        $("#severe_mild").attr("disabled", true);
        $("#severe_moderate").attr("disabled", true);
        $("#severe_severe").attr("disabled", true);
        $("#severe_unkn").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#severe_very_severe").val("N");

        $("#severe_atrisk").removeAttr("disabled");
        $("#severe_mild").removeAttr("disabled");
        $("#severe_moderate").removeAttr("disabled");
        $("#severe_severe").removeAttr("disabled");
        $("#severe_unkn").removeAttr("disabled");
    }
}); 

$("#severe_unkn").click(function(){
    if($(this).is(":checked")){
        $("#severe_unkn").val("Y");

        $("#severe_atrisk").prop("checked", false);
        $("#severe_mild").prop("checked", false);
        $("#severe_moderate").prop("checked", false);
        $("#severe_severe").prop("checked", false);
        $("#severe_very_severe").prop("checked", false);

        $("#severe_atrisk").val("N");
        $("#severe_mild").val("N");
        $("#severe_moderate").val("N");
        $("#severe_severe").val("N");
        $("#severe_very_severe").val("N");


        $("#severe_atrisk").attr("disabled", true);
        $("#severe_mild").attr("disabled", true);
        $("#severe_moderate").attr("disabled", true);
        $("#severe_severe").attr("disabled", true);
        $("#severe_very_severe").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#severe_unkn").val("N");

        $("#severe_atrisk").removeAttr("disabled");
        $("#severe_mild").removeAttr("disabled");
        $("#severe_moderate").removeAttr("disabled");
        $("#severe_severe").removeAttr("disabled");
        $("#severe_very_severe").removeAttr("disabled");
    }
}); 

$("#treat_others").click(function(){
    if($(this).is(":checked")){
      $("#treat_others").val("Y");
      $("#copd_treat_others").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#treat_others").val("N");
    $("#copd_treat_others").attr("disabled", true);
    $("#copd_treat_others").val("");
}
});

////////////////////////////Nicette Ocampo update - 09/27/2022////////////////////////////

function symtoms_valid(){
    if($('#signs_dyspnea').is(":checked") || $('#signs_hemo').is(":checked") ||$('#signs_sputum').is(":checked") ||$('#signs_chronic').is(":checked") || $('#signs_fingers').is(":checked") || $('#signs_others').is(":checked")|| $('#signs_wheez').is(":checked") || $('#signs_cyanosis').is(":checked") || $('#signs_chest').is(":checked") || $('#signs_freqinfec').is(":checked")) {
        return true;
    }
    else{
        toastr.warning('At least one Symptom must be selected!', 'Warning');
        return false;
    }
}

function severity_valid(){
    if($('#severe_atrisk').is(":checked") || $('#severe_mild').is(":checked") ||$('#severe_moderate').is(":checked") ||$('#severe_very_severe').is(":checked") || $('#severe_unkn').is(":checked") ) {
        return true;
    }
    else{
        toastr.warning('Status of Severity is required!', 'Warning');
        return false;
    }
}



function treatment_valid(){
    if($('#treat_muco').is(":checked") || $('#treat_antibio').is(":checked") ||$('#treat_combi').is(":checked") ||$('#treat_corti').is(":checked") || $('#treat_bronc').is(":checked") || $('#copd_treat_others').is(":checked")) {
        return true;
    }
    else{
        toastr.warning('At least one Treatment must be selected!', 'Warning');
        return false;
    }
}
