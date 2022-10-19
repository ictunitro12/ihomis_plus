var Module=$('#module').val();

function initcheck()
{
 smoke();
 secondsmoke();
 physicalactivity();
 fishs();
 rices();
 fruitss();
 fatss();
 sugars();
 milks();
 otherss();
 drinksss();
 famcad();
 med();
 accctt();
 hypo();
 $("#smoke").click(smoke);
 $("#med_thera").click(med);
 $("#physical_act1").click(accctt);
 $("#shs_smoke").click(secondsmoke);    
 $("#physical_act").click(physicalactivity);    
 $("#oral_hypo").click(hypo);    
 $("#fish").click(fishs);   
 $("#rice").click(rices);   
 $("#fruits").click(fruitss);   
 $("#fats").click(fatss);   
 $("#sugar").click(sugars);   
 $("#milk").click(milks);   
 $("#drink").click(drinksss);   
 $("#usu_other").click(otherss);   
 $("#family").click(famcad);   
 $("#physical_act_min").attr("disabled", true);
 $("#physical_act_freq").attr("disabled", true);
 $("#other_oral").attr("disabled", true);

 $("#prev_other").attr("disabled", true);
 $("#others_symp").attr("disabled", true);
 $("#kind").attr("disabled", true);
 $("#freq").attr("disabled", true);
 $("#others_sur").attr("disabled", true);


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
 $("#with_formal").attr("disabled", true);
 $("#no_formal").attr("disabled", true);
 $("#oral_1").attr("disabled", true);
 $("#oral_2").attr("disabled", true);
 $("#oral_3").attr("disabled", true);
 $("#oral_4").attr("disabled", true);
 $("#oral_5").attr("disabled", true);

 $("#type_insu").attr("disabled", true);
 $("#unitsperday").attr("disabled", true);
 $("#sur_2").attr("disabled", true);
 $("#sur_3").attr("disabled", true);

 $('#datedeath').attr( "disabled", true );
 $('#placedeath').attr( "disabled", true );
 $("#selFac").attr("disabled", true);
 $('#selFac3').attr( "disabled", true );
 $('#deathreason').attr( "disabled", true );
 $('#other_type').attr( "disabled", true );
}

function med() {
  if (this.checked) {
    $("input.medical").removeAttr("disabled");
    $("#med_thera").val("Y");
} else {
    $("input.medical").attr("disabled", true);
    $( "input.medical" ).prop( "checked", false );
    $("#med_thera").val("N");
    $("input.medical").val("N");
}
}

function accctt() {
  if (this.checked) {
    $("#physical_act1").val("Y");
    $("#kind").removeAttr("disabled");
    $("#freq").removeAttr("disabled");
} else {
   $("#physical_act1").val("N");
   $("#kind").val("");
   $("#freq").val("");
   $("#kind").attr("disabled", true);
   $("#freq").attr("disabled", true);

}
}    

function hypo() {
  if (this.checked) {
    $("#oral_hypo").val("Y");
    $("input.oral").removeAttr("disabled");


} else {
   $("#oral_hypo").val("N");
   $("input.oral").attr("disabled", true);
   $("input.oral").val("N");
   $("input.oral").prop("checked", false);
   $("#other_oral").attr("disabled", true);
   $("#other_oral").val("");


}
}        
//prev diag
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
    $("#unit").val($("#alcohol_freq option:first").val());

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
function smoke() {
  if (this.checked) {
    $("input.ssmoke").removeAttr("disabled");
    $("#shs_smoke").attr("disabled", true);
    $("#smoke").val("Y");
    $("#final_smoke").val("Y");
} else {
    $("input.ssmoke").attr("disabled", true);
    $( "input.ssmoke" ).prop( "checked", false );
    $("#shs_smoke").removeAttr("disabled");
    $("#age_smoke").val("");
    $("#num_smoke").val("");
    $("#less_smoke").val("N");
    $("#more_smoke").val("N");
    $("#final_smoke").val("");
    $("#smoke").val("");

}
}

function secondsmoke() {
  if (this.checked) {
    $("input.secsmoke").removeAttr("disabled");
    $("#smoke").attr("disabled", true);
    $("#shs_smoke").val("N");
    $("#final_smoke").val("N");
} else {
    $("input.secsmoke").attr("disabled", true);
    $("input.ssmoke").attr("disabled", true);
    $("#smoke").removeAttr("disabled", true);
    $("#numyear_smoke").val("");
    $("#expshs_smoke").prop("checked", false);
    $("#final_smoke").val("");
    $("#shs_smoke").val("");
}
}
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

$("#with_formal").click(function(){
    if($(this).is(":checked")){
        $("#no_formal").attr("disabled", true);
        $("#with_formal").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#no_formal").removeAttr("disabled");
        $("#no_formal").prop( "checked", false );
        $("#with_formal").val("N");
    }
});

$("#no_formal").click(function(){
    if($(this).is(":checked")){
        $("#with_formal").attr("disabled", true);
        $("#no_formal").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#with_formal").removeAttr("disabled");
        $("#with_formal").prop( "checked", false );
        $("#no_formal").val("N");
    }
});


$("#expshs_smoke").click(function(){
    if($(this).is(":checked")){
        $("#expshs_smoke").val("Y");
        $("#numyear_smoke").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#expshs_smoke").val("N");
        $("#numyear_smoke").val("");
    }
});


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
    $("#physical_act_type").val("");
    $("#physical_act_min").val("");
    $("#physical_act_freq").val($("#physical_act_freq option:first").val());
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
        $("#prev_3").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#prev_3").val("N");

    }
});

$("#prev_4").click(function(){
    if($(this).is(":checked")){
        $("#prev_4").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#prev_4").val("N");

    }
});

$("#prev_5").click(function(){
    if($(this).is(":checked")){
        $("#prev_5").val("Y");

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
        $("#prev_7").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#prev_7").val("N");

    }
});


$("#prev_8").click(function(){
    if($(this).is(":checked")){
      $("#prev_8").val("Y");
      $("#prev_other").removeAttr("disabled");

  }
  else if($(this).is(":not(:checked)")){
    $("#prev_8").val("N");
    $("#prev_other").val("");
    $("#prev_other").attr("disabled", true);
}
});

$("#preg").click(function(){
    if($(this).is(":checked")){
        $("#preg").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#preg").val("N");

    }
}); 

$("#lact").click(function(){
    if($(this).is(":checked")){
        $("#lact").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#lact").val("N");

    }
});  

$("#notappli").click(function(){
    if($(this).is(":checked")){
        $("#notappli").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#notappli").val("N");

    }
});  



$("#symp_1").click(function(){
    if($(this).is(":checked")){
        $("#symp_1").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_1").val("N");

    }
});  

$("#symp_2").click(function(){
    if($(this).is(":checked")){
        $("#symp_2").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_2").val("N");

    }
});  

$("#symp_3").click(function(){
    if($(this).is(":checked")){
        $("#symp_3").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_3").val("N");

    }
});  

$("#symp_4").click(function(){
    if($(this).is(":checked")){
        $("#symp_4").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_4").val("N");

    }
});  

$("#symp_5").click(function(){
    if($(this).is(":checked")){
        $("#symp_5").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_5").val("N");

    }
});  

$("#symp_6").click(function(){
    if($(this).is(":checked")){
        $("#symp_6").val("Y");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_6").val("N");

    }
});  


$("#symp_7").click(function(){
    if($(this).is(":checked")){
        $("#symp_7").val("Y");
        $("#others_symp").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#symp_7").val("N");
        $("#others_symp").val("");
        $("#others_symp").attr("disabled", true);

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


    }
});





$("#oral_1").click(function(){
    if($(this).is(":checked")){
        $("#oral_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#oral_1").val("N");
    }
});

$("#oral_2").click(function(){
    if($(this).is(":checked")){
        $("#oral_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#oral_2").val("N");
    }
});

$("#oral_3").click(function(){
    if($(this).is(":checked")){
        $("#oral_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#oral_3").val("N");
    }
});

$("#oral_4").click(function(){
    if($(this).is(":checked")){
        $("#oral_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#oral_4").val("N");
    }
});  

$("#oral_5").click(function(){
    if($(this).is(":checked")){
        $("#oral_5").val("Y");
        $("#other_oral").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#oral_5").val("N");
        $("#other_oral").val("");
        $("#other_oral").attr("disabled", true);
    } 
});   

$("#insulin").click(function(){
    if($(this).is(":checked")){
        $("#insulin").val("Y");
        $("input.insu").removeAttr("disabled");
        $("#type_insu").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#insulin").val("N");
        $("input.insu").attr("disabled", true);
        $("#unitsperday").val("");
        $("#type_insu").val($("#type_insu option:first").val());

    } 
});     

$("#sur_1").click(function(){
    if($(this).is(":checked")){
        $("#sur_1").val("Y");
        $("input.amp").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#sur_1").val("N");
        $("input.amp").attr("disabled", true);
        $("input.amp").prop("checked", false);
        $("input.amp").val("N");

    } 
});  

$("#sur_2").click(function(){
    if($(this).is(":checked")){
        $("#sur_2").val("Y");
        $("#sur_3").attr("disabled", true);


    }
    else if($(this).is(":not(:checked)")){
        $("#sur_2").val("N");
        $("#sur_3").removeAttr("disabled");
    } 
});  

$("#sur_3").click(function(){
    if($(this).is(":checked")){
        $("#sur_3").val("Y");
        $("#sur_2").attr("disabled", true);



    }
    else if($(this).is(":not(:checked)")){
        $("#sur_3").val("N");
        $("#sur_2").removeAttr("disabled");
    } 
}); 

$("#sur_4").click(function(){
    if($(this).is(":checked")){
        $("#sur_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sur_4").val("N");
    } 
}); 

$("#sur_5").click(function(){
    if($(this).is(":checked")){
        $("#sur_5").val("Y");
        $("#others_sur").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#sur_5").val("N");
        $("#others_sur").val("");
        $("#others_sur").attr("disabled", true);
    } 
});     


$("#ref_from").click(function(){
    if($(this).is(":checked")){
        $("#ref_from").val("Y");
        $("#selFac").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#ref_from").val("N");
        $("#selFac").attr("disabled", true);

    } 
}); 



$('#patstat').change(function() {
    if( $(this).val() == 'DI' ) {
        $('#datedeath').removeAttr( "disabled" );
        $('#placedeath').removeAttr( "disabled" );
        $('#selFac3').removeAttr( "disabled" );
        $('#deathreason').removeAttr( "disabled" );

        $('#dispos').prop('selectedIndex', [7]);


    } else {       
        $('#datedeath').attr( "disabled", true );
        $('#placedeath').attr( "disabled", true );
        $('#selFac3').attr( "disabled", true );
        $('#deathreason').attr( "disabled", true );
        $('#dispos').prop('selectedIndex', [0]);

    }
});      


$('#type_diabet').change(function() {
    if( $(this).val() == 'OTHER' ) {
        $('#other_type').removeAttr( "disabled" );
    } else {       
        $('#other_type').attr( "disabled", true );
    }
});      









