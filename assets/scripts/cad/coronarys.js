var Module=$('#module').val();

function initcheck()
{
   smoke();
   secondsmoke();
   physicalactivity();
   previousdiag();
   fishs();
   rices();
   fruitss();
   fatss();
   sugars();
   milks();
   otherss();
   drinksss();
   famcad();
   $("#smoke").click(smoke);
   $("#shs_smoke").click(secondsmoke);    
   $("#physical_act").click(physicalactivity);    
   $("#prev_diag").click(previousdiag);   
   $("#fish").click(fishs);   
   $("#rice").click(rices);   
   $("#fruits").click(fruitss);   
   $("#fats").click(fatss);   
   $("#sugar").click(sugars);   
   $("#milk").click(milks);   
   $("#drink").click(drinksss);   
   $("#usu_other").click(otherss);   
   $("#family").click(famcad);   

   $("input.previousdiag").attr("disabled", true);
   $("input.ssmoke").attr("disabled", true);
   $("#physical_act_min").attr("disabled", true);
   $("#physical_act_freq").attr("disabled", true);

   $("#prev_other").attr("disabled", true);
   
   $("#fish_specify").attr("disabled", true);
   $("#rice_specify").attr("disabled", true);
   $("#fruits_specify").attr("disabled", true);
   $("#fats_specify").attr("disabled", true);
   $("#sugar_specify").attr("disabled", true);
   $("#milk_specify").attr("disabled", true);
   $("#usu_other_specify").attr("disabled", true);

   $("#fish_freq").attr("disabled", true);
   $("#rice_freq").attr("disabled", true);
   $("#fruits_freq").attr("disabled", true);
   $("#fats_freq").attr("disabled", true);
   $("#sugar_freq").attr("disabled", true);
   $("#milk_freq").attr("disabled", true);
   $("#other_freq").attr("disabled", true);
   $("#symp_otherspec").attr("disabled", true);
   $("#diag_other_spec").attr("disabled", true);


   $("#drink_type").attr("disabled", true);
   $("#drink_amount").attr("disabled", true);
   $("#age_alcohol").attr("disabled", true);
   $("#no_alcohol").attr("disabled", true);
   $("#unit").attr("disabled", true);
   $("#alcohol_freq").attr("disabled", true);

   $("#fam_mem").attr("disabled", true);
   $("#fam_memtype").attr("disabled", true);
   $("#selFac2").attr("disabled", true);

   $('#datedeath').attr( "disabled", true );
   $('#dispos').attr( "disabled", true );
   $('#placedeath').attr( "disabled", true );
   $('#selFac3').attr( "disabled", true );
   $('#deathreason').attr( "disabled", true );

   
   $("#info_ethnic_spec").attr("disabled", true);         
   $("#info_race_spec").attr("disabled", true);         
   $("#info_occup_spec").attr("disabled", true);         
   $("#info_educat_spec").attr("disabled", true);
}

//march 15, 2022 nicette
$('#info_ethnic').change(function() {
    if($("#info_ethnic").val()== '10'){
        $('#info_ethnic_spec').removeAttr( "disabled" );
    } else {       
        $('#info_ethnic_spec').attr( "disabled", true );
        $('#info_ethnic_spec').val("");
    }
});

$('#info_race').change(function() {
    if($("#info_race").val()== '6'){
        $('#info_race_spec').removeAttr( "disabled" );
    } else {       
        $('#info_race_spec').attr( "disabled", true );
        $('#info_race_spec').val("");
    }
});

$('#info_occup').change(function() {
    if($("#info_occup").val()== 'OTHER'){
        $('#info_occup_spec').removeAttr( "disabled" );
    } else {       
        $('#info_occup_spec').attr( "disabled", true );
        $('#info_occup_spec').val("");
    }
});

$('#info_educat').change(function() {
    if($("#info_educat").val()== 'OT'){
        $('#info_educat_spec').removeAttr( "disabled" );
    } else {       
        $('#info_educat_spec').attr( "disabled", true );
        $('#info_educat_spec').val("");
    }
});

//smoke
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

function physicalactivity() {
  if (this.checked) {
    $("input.physactivity").removeAttr("disabled");
    $("#physical_act").val("Y");
    $("#physical_act_min").attr("disabled", false);
    $("#physical_act_freq").attr("disabled", false);
}
else {
    $("input.physactivity").attr("disabled", true);
    $("#physical_act_min").attr("disabled", true);
    $("#physical_act_freq").attr("disabled", true);
    $("#physical_act").val("N");
    $("input.physactivity").val("");

}
}

function famcad() {
  if (this.checked) {
    $("#family").val("Y");
    $("input.famm").removeAttr("disabled");
} else {
    $("#family").val("N");
    $("input.famm").attr("disabled", true);
    $("input.famm").val("");
    
}
}

function drinksss() {
  if (this.checked) {
    $("#drink").val("Y");
    $("input.drinks").removeAttr("disabled");
    $("#unit").removeAttr("disabled");
    $("#alcohol_freq").removeAttr("disabled");
} else {
    $("#drink").val("N");
    $("input.drinks").attr("disabled", true);
    $("#unit").attr("disabled", true);
    $("#alcohol_freq").attr("disabled", true);
    $("input.drinks").val("");
    $("#alcohol_freq").val($("#alcohol_freq option:first").val());
    $("#unit").val($("#unit option:first").val());
    
}
}
function fishs() {
  if (this.checked) {
    $("#fish").val("Y");
    $("input.fishes").removeAttr("disabled");
    $("#fish_freq").removeAttr("disabled");
} else {
    $("#fish").val("N");
    $("input.fishes").attr("disabled", true);
    $("#fish_freq").attr("disabled", true);
    $("input.fishes").val("");
    $("#fish_freq").val($("#fish_freq option:first").val());
    
}
}

function rices() {
  if (this.checked) {
    $("#rice").val("Y");
    $("#rice_specify").removeAttr("disabled");
    $("#rice_freq").removeAttr("disabled");
} else {
    $("#rice").val("N");
    $("#rice_specify").attr("disabled", true);
    $("#rice_freq").attr("disabled", true);
    $("#rice_specify").val("");
    $("#rice_freq").val($("#rice_freq option:first").val());
    
}
}

function fruitss() {
  if (this.checked) {
    $("#fruits").val("Y");
    $("#fruits_specify").removeAttr("disabled");
    $("#fruits_freq").removeAttr("disabled");
} else {
    $("#fruits").val("N");
    $("#fruits_specify").attr("disabled", true);
    $("#fruits_freq").attr("disabled", true);
    $("#fruits_specify").val("");
    $("#fruits_freq").val($("#fruits_freq option:first").val());
    
}
}

function fatss() {
  if (this.checked) {
    $("#fats").val("Y");
    $("#fats_specify").removeAttr("disabled");
    $("#fats_freq").removeAttr("disabled");
} else {
    $("#fats").val("N");
    $("#fats_specify").attr("disabled", true);
    $("#fats_freq").attr("disabled", true);
    $("#fats_specify").val("");
    $("#fats_freq").val($("#fats_freq option:first").val());
    
}
}

function sugars() {
  if (this.checked) {
    $("#sugar").val("Y");
    $("#sugar_specify").removeAttr("disabled");
    $("#sugar_freq").removeAttr("disabled");
} else {
    $("#sugar").val("N");
    $("#sugar_specify").attr("disabled", true);
    $("#sugar_freq").attr("disabled", true);
    $("#sugar_specify").val("");
    $("#sugar_freq").val($("#sugar_freq option:first").val());
    
}
}

function milks() {
  if (this.checked) {
    $("#milk").val("Y");
    $("#milk_specify").removeAttr("disabled");
    $("#milk_freq").removeAttr("disabled");
} else {
    $("#milk").val("N");
    $("#milk_specify").attr("disabled", true);
    $("#milk_freq").attr("disabled", true);
    $("#milk_specify").val("");
    $("#milk_freq").val($("#milk_freq option:first").val());

}
}

function otherss() {
  if (this.checked) {
    $("#usu_other").val("Y");
    $("#usu_other_specify").removeAttr("disabled");
    $("#other_freq").removeAttr("disabled");
} else {
    $("#usu_other").val("N");
    $("#usu_other_specify").attr("disabled", true);
    $("#other_freq").attr("disabled", true);
    $("#usu_other_specify").val("");
    $("#other_freq").val($("#other_freq option:first").val());
    
    
}
}

/////////////////////////////////////////////////////

function previousdiag() {
  if (this.checked) {
    $("#prev_diag").val("Y");
    $("input.previousdiag").removeAttr("disabled");    
}
else {
    $("input.previousdiag").attr("disabled", true);
    $("input.previousdiag").val("N");
    $("input.previousdiag").prop('checked', false);
    $("#prev_other").val("");
}
}

$("#prev_1").click(function(){
    if($(this).is(":checked")){
        $("#prev_1").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_1").val("N");

    }
});

$("#prev_2").click(function(){
    if($(this).is(":checked")){
        $("#prev_2").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_2").val("N");

    }
});

$("#prev_3").click(function(){
    if($(this).is(":checked")){
        $("#prev_1").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_3").val("N");

    }
});

$("#prev_4").click(function(){
    if($(this).is(":checked")){
        $("#prev_1").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_4").val("N");

    }
});

$("#prev_5").click(function(){
    if($(this).is(":checked")){
        $("#prev_1").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_5").val("N");

    }
});

$("#prev_6").click(function(){
    if($(this).is(":checked")){
        $("#prev_6").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_6").val("N");

    }
});

$("#prev_7").click(function(){
    if($(this).is(":checked")){
        $("#prev_1").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_7").val("N");

    }
});

$("#prev_8").click(function(){
    if($(this).is(":checked")){
        $("#prev_8").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_8").val("N");

    }
});

$("#prev_9").click(function(){
    if($(this).is(":checked")){
      $("#prev_9").val("Y");
      $("#prev_other").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#prev_9").val("N");
    $("#prev_other").attr("disabled", true);
}
});

$("#prev_10").click(function(){
    if($(this).is(":checked")){
        $("#prev_10").val("Y");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_10").val("N");

    }
});
////////////////////////////////////////////////////


$("#ref_from").click(function(){
    if($(this).is(":checked")){
        $("#ref_from").val("Y");
        $("#selFac2").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#ref_from").val("N");
        $("#selFac2").attr("disabled", true);

    }
});


$("#symp_other").click(function(){
    if($(this).is(":checked")){
        $("#symp_other").val("Y");
        $("#symp_otherspec").removeAttr("disabled");
        
    }
    else if($(this).is(":not(:checked)")){
        $("#symp_other").val("N");
        $("#symp_otherspec").attr("disabled", true);
        $("#symp_otherspec").val("");

    }
});

$("#diag_other").click(function(){
    if($(this).is(":checked")){
        $("#diag_other").val("Y");
        $("#diag_other_spec").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#diag_other").val("N");
        $("#diag_other_spec").attr("disabled", true);
        $("#diag_other_spec").val("");
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
        $("#expshs_smoke").prop( "checked", false );
    }
});

$("#expshs_smoke").click(function(){
    if($(this).is(":checked")){
        $("#expshs_smoke").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#expshs_smoke").val("N");
    }
});

$("#nausea").click(function(){
    if($(this).is(":checked")){
        $("#nausea").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#nausea").val("N");
    }
});

$("#vomit").click(function(){
    if($(this).is(":checked")){
        $("#vomit").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#vomit").val("N");
    }
});


$("#cough").click(function(){
    if($(this).is(":checked")){
        $("#cough").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cough").val("N");
    }
});

$("#jaw").click(function(){
    if($(this).is(":checked")){
        $("#jaw").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#jaw").val("N");
    }
});

$("#dizzy").click(function(){
    if($(this).is(":checked")){
        $("#dizzy").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#dizzy").val("N");
    }
});

$("#anxiety").click(function(){
    if($(this).is(":checked")){
        $("#anxiety").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#anxiety").val("N");
    }
});

$("#palpi").click(function(){
    if($(this).is(":checked")){
        $("#palpi").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#palpi").val("N");
    }
});

$("#ortho").click(function(){
    if($(this).is(":checked")){
        $("#ortho").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ortho").val("N");
    }
});

$("#short").click(function(){
    if($(this).is(":checked")){
        $("#short").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#short").val("N");
    }
});

$("#chest").click(function(){
    if($(this).is(":checked")){
        $("#chest").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#chest").val("N");
    }
});

$("#leftarm").click(function(){
    if($(this).is(":checked")){
        $("#leftarm").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#leftarm").val("N");
    }
});

$("#pall").click(function(){
    if($(this).is(":checked")){
        $("#pall").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pall").val("N");
    }
});

$("#cold").click(function(){
    if($(this).is(":checked")){
        $("#cold").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cold").val("N");
    }
});

$("#edema").click(function(){
    if($(this).is(":checked")){
        $("#edema").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#edema").val("N");
    }
});

$("#abdominal").click(function(){
    if($(this).is(":checked")){
        $("#abdominal").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#abdominal").val("N");
    }
});

$("#indigest").click(function(){
    if($(this).is(":checked")){
        $("#indigest").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#indigest").val("N");
    }
});


$("#easy").click(function(){
    if($(this).is(":checked")){
        $("#easy").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#easy").val("N");
    }
});

$("#numb").click(function(){
    if($(this).is(":checked")){
        $("#numb").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#numb").val("N");
    }
});

$("#backache").click(function(){
    if($(this).is(":checked")){
        $("#backache").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#backache").val("N");
    }
});

$("#weak").click(function(){
    if($(this).is(":checked")){
        $("#weak").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#weak").val("N");
    }
});

$("#faint").click(function(){
    if($(this).is(":checked")){
        $("#faint").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#faint").val("N");
    }
});

$("#cyan").click(function(){
    if($(this).is(":checked")){
        $("#cyan").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cyan").val("N");
    }
});

$("#none").click(function(){
    if($(this).is(":checked")){
        $("#none").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#none").val("N");
    }
});


$("#diag_pe").click(function(){
    if($(this).is(":checked")){
        $("#diag_pe").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#diag_pe").val("N");
    }
});


$("#tread").click(function(){
    if($(this).is(":checked")){
        $("#tread").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#tread").val("N");
    }
});


$("#radio").click(function(){
    if($(this).is(":checked")){
        $("#radio").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#radio").val("N");
    }
});


$("#xray").click(function(){
    if($(this).is(":checked")){
        $("#xray").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#xray").val("N");
    }
});


$("#echocar").click(function(){
    if($(this).is(":checked")){
        $("#echocar").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#echocar").val("N");
    }
});


$("#corona").click(function(){
    if($(this).is(":checked")){
        $("#corona").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#corona").val("N");
    }
});


$("#electro").click(function(){
    if($(this).is(":checked")){
        $("#electro").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#electro").val("N");
    }
});


$("#holter").click(function(){
    if($(this).is(":checked")){
        $("#holter").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#holter").val("N");
    }
});


$("#angio").click(function(){
    if($(this).is(":checked")){
        $("#angio").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#angio").val("N");
    }
});


$("#ctscan").click(function(){
    if($(this).is(":checked")){
        $("#ctscan").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ctscan").val("N");
    }
});


$("#bio").click(function(){
    if($(this).is(":checked")){
        $("#bio").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#bio").val("N");
    }
});



$('#patstat').change(function() {
    if( $(this).val() == 'DI' ) {
        $('#datedeath').removeAttr( "disabled" );
        $('#dispos').removeAttr( "disabled" );
        $('#placedeath').removeAttr( "disabled" );
        $('#selFac3').removeAttr( "disabled" );
        $('#deathreason').removeAttr( "disabled" );

        $('#dispos').prop('selectedIndex', [7]);


    } else {       
        $('#datedeath').attr( "disabled", true );
        $('#dispos').attr( "disabled", true );
        $('#placedeath').attr( "disabled", true );
        $('#selFac3').attr( "disabled", true );
        $('#deathreason').attr( "disabled", true );
        $('#dispos').prop('selectedIndex', [0]);

    }
});      



function presentsymptoms_valid(){
    if($('#nausea').is(":checked") || $('#palpi').is(":checked") ||$('#cold').is(":checked") ||$('#backache').is(":checked") || $('#vomit').is(":checked")|| $('#ortho').is(":checked") || $('#edema').is(":checked")|| $('#weak').is(":checked")        || $('#cough').is(":checked")|| $('#short').is(":checked") || $('#abdominal').is(":checked")|| $('#faint').is(":checked") || $('#jaw').is(":checked")|| $('#chest').is(":checked") || $('#indigest').is(":checked")|| $('#cyan').is(":checked") || $('#dizzy').is(":checked")|| $('#leftarm').is(":checked")|| $('#easy').is(":checked")|| $('#none').is(":checked")|| $('#anxiety').is(":checked")|| $('#pall').is(":checked") || $('#numb').is(":checked")|| $('#symp_other').is(":checked")) {
        return true;
    }
    else{
        toastr.warning('At least one Symptom must be selected!', 'Warning');
        return false;
    }
}

function basisdiag_valid(){
    if($('#diag_pe').is(":checked") || $('#echocar').is(":checked") ||$('#angio').is(":checked") ||$('#corona').is(":checked") || $('#tread').is(":checked") ||$('#ctscan').is(":checked") || $('#radio').is(":checked") ||$('#electro').is(":checked") || $('#bio').is(":checked") ||$('#xray').is(":checked") || $('#holter').is(":checked") ||$('#diag_other').is(":checked")) {
        return true;
    }
    else{
        toastr.warning('At least one Diagnosis must be selected!', 'Warning');
        return false;
    }
}
