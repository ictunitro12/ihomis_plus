var Module=$('#module').val();

function initcheck()
{
  $('input.multi').prop( "disabled", true );
  $('input.mult').attr( "disabled", true );
  $('input.multiburn').attr( "disabled", true );
  $('input.ex').attr( "disabled", true );
  $('#ext_burn1').attr( "disabled", true );
  $('#ext_drown1').attr( "disabled", true );
  $('#ext_expose1').attr( "disabled", true );
  $('#ext_fall1').attr( "disabled", true );
  $('#selFire').attr( "disabled", true );
  $('#veh_col').attr("disabled", true);
  $('#veh_col1').attr("disabled", true);
  $('#veh_pat1').attr("disabled", true);
  $('#veh_col1').attr("disabled", true);
  $('#veh_position1').attr("disabled", true);
  $('#veh_placeoccur1').attr("disabled", true);
  $('#veh_act1').attr("disabled", true);
  $('#oth_others_spec').attr("disabled", true);
  $('#safety_others_spec').attr("disabled", true);
  $('#pat_refer').attr("disabled", true);
  $('input.hos').attr("disabled", true);
  $('#selFac').attr("disabled", true);
  $('#pat_status').attr("disabled", true);
  $('#pat_mode').attr("disabled", true);
  $('#pat_disp').attr("disabled", true);
  $('#selFac2').attr("disabled", true);
  $('#selFac3').attr("disabled", true);
  $('#pat_outcome ').attr("disabled", true);
  $('#inpat_oth ').attr("disabled", true);


}



$('#multinj').change(function() {
  if( $(this).val() == 'Y') {
    $('input.multi').prop( "disabled", false );
  } else  {       
    $('input.multi').prop( "disabled", true );
    $("input.multi").prop( "checked", false );
    $('input.multiburn').prop( "disabled", true );
    $("input.multiburn").prop( "checked", false );
    $('input.mult').attr("disabled", true);
    $('input.mult').val("");
  }
});

$("#multi_abra").click(function(){
  if($(this).is(":checked")){
    $("#multi_abra").val("Y");
    $("#multi_1").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_abra").val("N");
    $("#multi_1").attr("disabled", true);
    $("#multi_1").val("");
  }
});

$("#multi_avul").click(function(){
  if($(this).is(":checked")){
    $("#multi_avul").val("Y");
    $("#multi_2").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_avul").val("N");
    $("#multi_2").attr("disabled", true);
    $("#multi_2").val("");
  }
});

$("#multi_burn").click(function(){
  if($(this).is(":checked")){
    $("#multi_burn").val("Y");
    $("input.multiburn").removeAttr("disabled");
    $("#multi_site").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_burn").val("N");
    $("input.multiburn").attr("disabled", true);
    $("input.multiburn").prop("checked", false);
    $("#multi_site").attr("disabled", true);
    $("#multi_site").val("");
  }
});

$("#multi_burn1").click(function(){
  if($(this).is(":checked")){
    $("#multi_burn1").val("Y");
    $("#multi_burn2").attr("disabled", true);
    $("#multi_burn3").attr("disabled", true);
    $("#multi_burn4").attr("disabled", true);
    $("#multi_burn2").prop("checked", false);
    $("#multi_burn3").prop("checked", false);
    $("#multi_burn4").prop("checked", false);
    $("#multi_burn2").val("N");
    $("#multi_burn3").val("N");
    $("#multi_burn4").val("N");

  }
  else if($(this).is(":not(:checked)")){
    $("#multi_burn1").val("N");
    $("#multi_burn2").removeAttr("disabled");
    $("#multi_burn3").removeAttr("disabled");
    $("#multi_burn4").removeAttr("disabled");
  }
});


$("#multi_burn2").click(function(){
  if($(this).is(":checked")){
    $("#multi_burn2").val("Y");
    $("#multi_burn1").attr("disabled", true);
    $("#multi_burn3").attr("disabled", true);
    $("#multi_burn4").attr("disabled", true);
    $("#multi_burn1").prop("checked", false);
    $("#multi_burn3").prop("checked", false);
    $("#multi_burn4").prop("checked", false);
    $("#multi_burn1").val("N");
    $("#multi_burn3").val("N");
    $("#multi_burn4").val("N");

  }
  else if($(this).is(":not(:checked)")){
    $("#multi_burn2").val("N");
    $("#multi_burn1").removeAttr("disabled");
    $("#multi_burn3").removeAttr("disabled");
    $("#multi_burn4").removeAttr("disabled");
  }
});

$("#multi_burn3").click(function(){
  if($(this).is(":checked")){
    $("#multi_burn3").val("Y");
    $("#multi_burn1").attr("disabled", true);
    $("#multi_burn2").attr("disabled", true);
    $("#multi_burn4").attr("disabled", true);
    $("#multi_burn1").prop("checked", false);
    $("#multi_burn2").prop("checked", false);
    $("#multi_burn4").prop("checked", false);
    $("#multi_burn1").val("N");
    $("#multi_burn2").val("N");
    $("#multi_burn4").val("N");

  }
  else if($(this).is(":not(:checked)")){
    $("#multi_burn3").val("N");
    $("#multi_burn1").removeAttr("disabled");
    $("#multi_burn2").removeAttr("disabled");
    $("#multi_burn4").removeAttr("disabled");
  }
});

$("#multi_burn4").click(function(){
  if($(this).is(":checked")){
    $("#multi_burn4").val("Y");
    $("#multi_burn1").attr("disabled", true);
    $("#multi_burn2").attr("disabled", true);
    $("#multi_burn3").attr("disabled", true);
    $("#multi_burn2").prop("checked", false);
    $("#multi_burn3").prop("checked", false);
    $("#multi_burn1").prop("checked", false);
    $("#multi_burn2").val("N");
    $("#multi_burn3").val("N");
    $("#multi_burn1").val("N");

  }
  else if($(this).is(":not(:checked)")){
    $("#multi_burn4").val("N");
    $("#multi_burn1").removeAttr("disabled");
    $("#multi_burn2").removeAttr("disabled");
    $("#multi_burn3").removeAttr("disabled");
  }
});

$("#multi_conc").click(function(){
  if($(this).is(":checked")){
    $("#multi_conc").val("Y");
    $("#multi_4").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_conc").val("N");
    $("#multi_4").attr("disabled", true);
    $("#multi_4").val("");
  }
});

$("#multi_contu").click(function(){
  if($(this).is(":checked")){
    $("#multi_contu").val("Y");
    $("#multi_5").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_contu").val("N");
    $("#multi_5").attr("disabled", true);
    $("#multi_5").val("");
  }
});

$("#multi_close").click(function(){
  if($(this).is(":checked")){
    $("#multi_close").val("Y");
    $("#multi_6").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_close").val("N");
    $("#multi_6").attr("disabled", true);
    $("#multi_6").val("");
  }
});

$("#multi_open").click(function(){
  if($(this).is(":checked")){
    $("#multi_open").val("Y");
    $("#multi_7").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_open").val("N");
    $("#multi_7").attr("disabled", true);
    $("#multi_7").val("");
  }
});

$("#multi_lace").click(function(){
  if($(this).is(":checked")){
    $("#multi_lace").val("Y");
    $("#multi_8").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_lace").val("N");
    $("#multi_8").attr("disabled", true);
    $("#multi_8").val("");
  }
});

$("#multi_lace").click(function(){
  if($(this).is(":checked")){
    $("#multi_lace").val("Y");
    $("#multi_8").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_lace").val("N");
    $("#multi_8").attr("disabled", true);
    $("#multi_8").val("");
  }
});

$("#multi_ampu").click(function(){
  if($(this).is(":checked")){
    $("#multi_ampu").val("Y");
    $("#multi_9").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_ampu").val("N");
    $("#multi_9").attr("disabled", true);
    $("#multi_9").val("");
  }
});

$("#multi_other").click(function(){
  if($(this).is(":checked")){
    $("#multi_other").val("Y");
    $("#multi_10").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#multi_other").val("N");
    $("#multi_10").attr("disabled", true);
    $("#multi_10").val("");
  }
});
//EXTERNAL

$("#ext_bite").click(function(){
  if($(this).is(":checked")){
    $("#ext_bite").val("Y");
    $("#ext_1").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_bite").val("N");
    $("#ext_1").attr("disabled", true);
    $("#ext_1").val("");
  }
});

$("#ext_gun").click(function(){
  if($(this).is(":checked")){
    $("#ext_gun").val("Y");
    $("#ext_2").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_gun").val("N");
    $("#ext_2").attr("disabled", true);
    $("#ext_2").val("");
  }
});

$("#ext_burn").click(function(){
  if($(this).is(":checked")){
    $("#ext_burn").val("Y");
    $("#ext_burn1").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_burn").val("N");
    $("#ext_burn1").val($("#ext_burn1 option:first").val());
    $("#ext_burn1").attr("disabled", true);
    $("#ext_3").attr("disabled", true);
    $("#ext_3").val("");

  }
});

$('#ext_burn1').change(function() {
  if( $(this).val() == '06') {
    $("#ext_3").removeAttr("disabled");
  } else  {       
    $('#ext_3').attr("disabled", true);
    $('#ext_3').val("");
  }
});


$("#ext_chem").click(function(){
  if($(this).is(":checked")){
    $("#ext_chem").val("Y");
    $("#ext_4").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_chem").val("N");
    $("#ext_4").attr("disabled", true);
    $("#ext_4").val("");
  }
});

$("#ext_contact").click(function(){
  if($(this).is(":checked")){
    $("#ext_contact").val("Y");
    $("#ext_5").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_contact").val("N");
    $("#ext_5").attr("disabled", true);
    $("#ext_5").val("");
  }
});

$("#ext_hang").click(function(){
  if($(this).is(":checked")){
    $("#ext_hang").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_hang").val("N");
  }
});

$("#ext_drown").click(function(){
  if($(this).is(":checked")){
    $("#ext_drown").val("Y");
    $("#ext_drown1").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_drown").val("N");
    $("#ext_drown1").val($("#ext_drown1 option:first").val());
    $("#ext_drown1").attr("disabled", true);
    $("#ext_6").attr("disabled", true);
    $("#ext_6").val("");

  }
});

$('#ext_drown1').change(function() {
  if( $(this).val() == '06') {
    $("#ext_6").removeAttr("disabled");
  } else  {       
    $('#ext_6').attr("disabled", true);
    $('#ext_6').val("");
  }
});

$("#ext_expose").click(function(){
  if($(this).is(":checked")){
    $("#ext_expose").val("Y");
    $("#ext_expose1").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_expose").val("N");
    $("#ext_expose1").val($("#ext_expose1 option:first").val());
    $("#ext_expose1").attr("disabled", true);
    $("#ext_7").attr("disabled", true);
    $("#ext_7").val("");

  }
});

$('#ext_expose1').change(function() {
  if( $(this).val() == '07') {
    $("#ext_7").removeAttr("disabled");
  } else  {       
    $('#ext_7').attr("disabled", true);
    $('#ext_7').val("");
  }
});


$("#ext_fall").click(function(){
  if($(this).is(":checked")){
    $("#ext_fall").val("Y");
    $("#ext_fall1").removeAttr("disabled");
    $("#ext_8").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_fall").val("N");
    $("#ext_fall1").val($("#ext_expose1 option:first").val());
    $("#ext_fall1").attr("disabled", true);
    $("#ext_8").attr("disabled", true);
    $("#ext_8").val("");

  }
});

$("#ext_cracker").click(function(){
  if($(this).is(":checked")){
    $("#ext_cracker").val("Y");
    $("#selFire").removeAttr("disabled");
    $("#ext_9").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_cracker").val("N");
    $("#selFire").val($("#selFire option:first").val());
    $("#selFire").attr("disabled", true);
    $("#ext_9").attr("disabled", true);
    $("#ext_9").val("");

  }
});


$("#ext_mau").click(function(){
  if($(this).is(":checked")){
    $("#ext_mau").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_mau").val("N");
  }
});



$("#ext_sex").click(function(){
  if($(this).is(":checked")){
    $("#ext_sex").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_sex").val("N");
  }
});


$("#ext_other").click(function(){
  if($(this).is(":checked")){
    $("#ext_other").val("Y");
    $("#ext_10").removeAttr("disabled");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_other").val("N");
    $("#ext_10").attr("disabled", true);
    $("#ext_10").val("");
  }
});



$("#ext_trans").click(function(){
  if($(this).is(":checked")){
    $("#ext_trans").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ext_trans").val("N");
  }
});

$('#ext_transpo1').change(function() {
  if( $(this).val() == '10') {
    $("#veh_col").removeAttr("disabled");
  } else  {       
    $('#veh_col').attr("disabled", true);
    $('#veh_col1').attr("disabled", true);
    $("#veh_col").val($("#veh_col option:first").val());
    $('#veh_col1').val("");
  }
});

$('#veh_pat').change(function() {
  if( $(this).val() == '88') {
    $("#veh_pat1").removeAttr("disabled");
  } else  {       
    $('#veh_pat1').attr("disabled", true);
    $('#veh_pat1').val("");
  }
});

$('#veh_col').change(function() {
  if( $(this).val() == '88') {
    $("#veh_col1").removeAttr("disabled");
  } else  {       
    $('#veh_col1').attr("disabled", true);
    $('#veh_col1').val("");
  }
});

$('#veh_position').change(function() {
  if( $(this).val() == '88') {
    $("#veh_position1").removeAttr("disabled");
  } else  {       
    $('#veh_position1').attr("disabled", true);
    $('#veh_position1').val("");
  }
});

$('#veh_placeoccur').change(function() {
  if( $(this).val() == '88') {
    $("#veh_placeoccur1").removeAttr("disabled");
     $('#veh_placework').attr("disabled", true);
    $('#veh_placework').val("");
  } 
  else if( $(this).val() == '70') {
    $("#veh_placework").removeAttr("disabled");
    $('#veh_placeoccur1').attr("disabled", true);
    $('#veh_placeoccur1').val("");
  } else  {       
    $('#veh_placeoccur1').attr("disabled", true);
    $('#veh_placeoccur1').val("");
    $('#veh_placework').attr("disabled", true);
    $('#veh_placework').val("");
  }
});

$('#veh_act').change(function() {
  if( $(this).val() == '88') {
    $("#veh_act1").removeAttr("disabled");
  } else  {       
    $('#veh_act1').attr("disabled", true);
    $('#veh_act1').val("");
  }
});


$("#oth_alcohol").click(function(){
  if($(this).is(":checked")){
    $("#oth_alcohol").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#oth_alcohol").val("N");
  }
});

$("#oth_smoking").click(function(){
  if($(this).is(":checked")){
    $("#oth_smoking").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#oth_smoking").val("N");
  }
});

$("#oth_drugs").click(function(){
  if($(this).is(":checked")){
    $("#oth_drugs").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#oth_drugs").val("N");
  }
});

$("#oth_mobile").click(function(){
  if($(this).is(":checked")){
    $("#oth_mobile").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#oth_mobile").val("N");
  }
});

$("#oth_sleepy").click(function(){
  if($(this).is(":checked")){
    $("#oth_sleepy").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#oth_sleepy").val("N");
  }
});

$("#oth_others").click(function(){
  if($(this).is(":checked")){
    $("#oth_others").val("Y");
    $('#oth_others_spec').removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#oth_others").val("N");
    $('#oth_others_spec').attr("disabled", true);
    $('#oth_others_spec').val("");

  }
});

$("#safety_none").click(function(){
  if($(this).is(":checked")){
    $("#safety_none").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_none").val("N");
  }
});     

$("#safety_airbag").click(function(){
  if($(this).is(":checked")){
    $("#safety_airbag").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_airbag").val("N");
  }
});  

$("#safety_helmet").click(function(){
  if($(this).is(":checked")){
    $("#safety_helmet").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_helmet").val("N");
  }
});        

$("#safety_child").click(function(){
  if($(this).is(":checked")){
    $("#safety_child").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_child").val("N");
  }
});  

$("#safety_seatbelt").click(function(){
  if($(this).is(":checked")){
    $("#safety_seatbelt").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_seatbelt").val("N");
  }
}); 

$("#safety_life").click(function(){
  if($(this).is(":checked")){
    $("#safety_life").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_life").val("N");
  }
});     

$("#safety_others").click(function(){
  if($(this).is(":checked")){
    $("#safety_others").val("Y");
    $('#safety_others_spec').removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#safety_others").val("N");
    $('#safety_others_spec').attr("disabled", true);
    $('#safety_others_spec').val("");

  }
});

$("#safety_unk").click(function(){
  if($(this).is(":checked")){
    $("#safety_unk").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#safety_unk").val("N");
  }
});     




$('#pat_trans').change(function() {
  if( $(this).val() == 'Y') {
    $('#pat_refer').removeAttr("disabled");
    $('#selFac').removeAttr("disabled");
    $('#pat_status').removeAttr("disabled");
    $('#pat_mode').removeAttr("disabled");
    $('#pat_disp').removeAttr("disabled");
    $('#pat_outcome').removeAttr("disabled");
    $('#pat_physician').removeAttr("disabled");
    $('#pat_initial').removeAttr("disabled");
    $('#pat_icd_nat').removeAttr("disabled");
    $('#pat_icd_ext').removeAttr("disabled");
    $('#pat_icd_ext').removeAttr("disabled");
  } 
  else if( $(this).val() == 'N') {       

    $("#pat_refer").val($("#pat_refer option:first").val());
    $("#selFac").val($("#selFac option:first").val());
    $("#pat_status").val($("#pat_status option:first").val());
    $("#pat_mode").val($("#pat_mode option:first").val());
    $("#pat_disp").val($("#pat_disp option:first").val());
    $("#selFac2").val($("#selFac2 option:first").val());
    $("#hospital_ext_diag").val($("#hospital_ext_diag option:first").val());
    $("#hospital_diag").val($("#hospital_diag option:first").val());
    $("#pat_outcome").val($("#pat_outcome option:first").val());

    $('input.hos').val("");

    $('input.hos').attr("disabled", true);
    $('#pat_refer').attr("disabled", true);
    $('#selFac').attr("disabled", true);
    $('#pat_status').attr("disabled", true);
    $('#pat_mode').attr("disabled", true);
    $('#pat_disp').attr("disabled", true);
    $('#selFac2').attr("disabled", true);
    $('#hospital_ext_diag').attr("disabled", true);
    $('#pat_outcome ').attr("disabled", true);
  }
  else{

    $("#pat_refer").val($("#pat_refer option:first").val());
    $("#selFac").val($("#selFac option:first").val());
    $("#pat_status").val($("#pat_status option:first").val());
    $("#pat_mode").val($("#pat_mode option:first").val());
    $("#pat_disp").val($("#pat_disp option:first").val());
    $("#selFac2").val($("#selFac2 option:first").val());
    $("#hospital_ext_diag").val($("#hospital_ext_diag option:first").val());
    $("#hospital_diag").val($("#hospital_diag option:first").val());
    $("#pat_outcome").val($("#pat_outcome option:first").val());

    $('input.hos').val("");

    $('input.hos').attr("disabled", true);
    $('#pat_refer').attr("disabled", true);
    $('#selFac').attr("disabled", true);
    $('#pat_status').attr("disabled", true);
    $('#pat_mode').attr("disabled", true);
    $('#pat_disp').attr("disabled", true);
    $('#selFac2').attr("disabled", true);
    $('#hospital_ext_diag').attr("disabled", true);
    $('#pat_outcome ').attr("disabled", true);
  }
}); 



$('#pat_mode').change(function() {
  if( $(this).val() == '04') {
    $('#pat_mode1').removeAttr("disabled");
  } 
  else  {                       
    $('#pat_mode1').attr("disabled", true);
    $('#pat_mode1').val("");
  }
}); 

$('#pat_disp').change(function() {
  if( $(this).val() == 'REFER') {
    $('#selFac2').removeAttr("disabled");
  } 
  else  {  
    $('#selFac2').attr("disabled", true);
    $("#selFac2").val($("#selFac2 option:first").val());

  }
}); 

$('#pat_disp2').change(function() {
  if( $(this).val() == 'OTH') {
    $('#inpat_oth').removeAttr("disabled");
    $('#selFac3').attr("disabled", true);
  } 
  else  {  
    $('#inpat_oth').attr("disabled", true);
    $('#selFac3').removeAttr("disabled");

    $("#inpat_oth").val("");


  }
}); 

$('#injaid').change(function() {
  if( $(this).val() == 'Y') {
    $('#aid_what').removeAttr("disabled");
    $('#aid_whom').removeAttr("disabled");
  } 
  else  {                       
    $('#aid_what').attr("disabled", true);
    $('#aid_what').val("");
    $('#aid_whom').attr("disabled", true);
    $('#aid_whom').val("");
  }
}); 



$('#info_typepat').change(function() {
  if( $(this).val()  == 'INPA') {
        $("#finaldiag").removeAttr("disabled");
        $("#pat_disp2").removeAttr("disabled");
        $("#selFac3").removeAttr("disabled");
        $("#inpat_oth").removeAttr("disabled");
        $("#pat_outcome2").removeAttr("disabled");
        $("#finalicd10").removeAttr("disabled");
        $("#external_diag").removeAttr("disabled");
        $("#pat_comment").removeAttr("disabled");
      }
       else  {       
        $("#finaldiag").attr("disabled", true);
        $("#pat_disp2").attr("disabled", true);
        $("#selFac3").attr("disabled", true);
        $("#inpat_oth").attr("disabled", true);
        $("#pat_outcome2").attr("disabled", true);
        $("#finalicd10").attr("disabled", true);
        $("#external_diag").attr("disabled", true);
        $("#pat_comment").attr("disabled", true);

    }
});


