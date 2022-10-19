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
   fam();
   bow();
   chemexp();
   contra();
   human();
   hepa();
   heli();
   infect();
   $("#smoke").click(smoke);
   $("#shs_smoke").click(secondsmoke); 
   $("#physical_act").click(physicalactivity);    
   $("#fish").click(fishs);   
   $("#rice").click(rices);   
   $("#fruits").click(fruitss);   
   $("#fats").click(fatss);   
   $("#sugar").click(sugars);   
   $("#milk").click(milks);   
   $("#drink").click(drinksss);   
   $("#usu_other").click(otherss);   
   $("#family").click(fam);

   $("#reg_bow").click(bow);   
   $("#chem_exp").click(chemexp);   
   $("#use_contra").click(contra);   

   $("#infect1").click(human);   
   $("#infect2").click(heli);   
   $("#infect3").click(hepa);   
   $("#infect4").click(infect);   

   $("input.ssmoke").attr("disabled", true);
   $("input.physactivity").attr("disabled", true);
   $("input.famm").attr("disabled", true);
   $("#occup_detail").attr("disabled", true);
   $("#occup_others").attr("disabled", true);

   $("#physical_act_freq").attr("disabled", true);

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


   $("#drink_type").attr("disabled", true);
   $("#drink_amount").attr("disabled", true);
   $("#age_alcohol").attr("disabled", true);
   $("#no_alcohol").attr("disabled", true);
   $("#unit").attr("disabled", true);
   $("#alcohol_freq").attr("disabled", true);

   $("#fam_mem").attr("disabled", true);
   $("#fam_memtype").attr("disabled", true);

   $('#datedeath').attr( "disabled", true );
   $('#dispos').attr( "disabled", true );
   $('#placedeath').attr( "disabled", true );
   $('#selFac3').attr( "disabled", true );
   $('#deathreason').attr( "disabled", true ); 

   $('#pulmon_indoorpollut').attr( "disabled", true ); 
   $('#pulmon_outdoorpollut').attr( "disabled", true ); 

   $('#reg_bow_freq').attr( "disabled", true ); 
   $('#reg_bow_oth').attr( "disabled", true ); 

   $('#type_chem').attr( "disabled", true ); 
   $('#leng_exp').attr( "disabled", true ); 

   $('#use_contra_spec').attr( "disabled", true ); 
   $('#no_early').attr( "disabled", true ); 

   $('#expshs_smoke').attr( "disabled", true ); 
   $('#numyear_smoke').attr( "disabled", true ); 
   $("#selFac2").attr("disabled", true);
   $("#copd_reasonrefer").attr("disabled", true);

   $("#prima21").attr("disabled", true);
   $("#prima_22_oth").attr("disabled", true);

   $("#plan_other_spec").attr("disabled", true);
   $("#add_other_spec").attr("disabled", true);
   $("#treathos_other_spec").attr("disabled", true);

   $("#treat_other_spec").attr("disabled", true);


   $("input.micro").attr("disabled", true);
   $("input.nonmicro").attr("disabled", true);
}


$('#occup_exp').change(function() {
    if($("#occup_detail").val()== 'OT'){
        $('#occup_others').removeAttr( "disabled" );
    } else {       
        $('#occup_others').attr( "disabled", true );
        $('#occup_others').val("");
    }
});



$("#occup_exp").click(function(){
    if (this.checked) {
        $("#occup_detail").removeAttr("disabled", true);
        $("#occup_others").removeAttr("disabled", true);
        $("#occup_exp").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#occup_others").attr("disabled", true);
        $("#occup_detail").val($("#prima21 option:first").val());
        $("#occup_others").val("");
        $("#occup_exp").val("N");

    }
});

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

$("#less_smoke").click(function(){
    if($(this).is(":checked")){
        $("#more_smoke").attr("disabled", true);
        $("#less_smoke").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#more_smoke").removeAttr("disabled");
        $("#more_smoke").prop( "checked", false );
        $("#less_smoke").val("");

    }
});

$("#more_smoke").click(function(){
    if($(this).is(":checked")){
        $("#less_smoke").attr("disabled", true);
        $("#more_smoke").val("N");

    }
    else if($(this).is(":not(:checked)")){
        $("#less_smoke").removeAttr("disabled");
        $("#less_smoke").prop( "checked", false );
        $("#more_smoke").val("");

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
        }//////////////////////////////

        $("input:radio[id='most_valid']").click(function() {
            if ($(this).val() === 'Y') {
               $("input.nonmicro").removeAttr("disabled");
               $("input.micro").attr("disabled", true);
               $("input.micro").prop("checked", false);
               $("input.micro").val("N");

           }
           else if($(this).val() === 'N'){
               $("input.micro").removeAttr("disabled");
               $("input.nonmicro").prop("checked", false);     
               $("input.nonmicro").val("N");
               $("input.nonmicro").attr("disabled", true);


           }
           else {
               $("input.micro").attr("disabled", true);
               $("input.nonmicro").attr("disabled", true);
               $("input.nonmicro").prop("checked", false);                              
               $("input.micro").prop("checked", false);      
               $("input.micro").val("N");
               $("input.nonmicro").val("N");


           }  

       });

        $("#nonmicro_1").click(function(){
            if($(this).is(":checked")){
                $("#nonmicro_1").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#nonmicro_1").val("N");
            }
        });


        $("#nonmicro_2").click(function(){
            if($(this).is(":checked")){
                $("#nonmicro_2").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#nonmicro_2").val("N");
            }
        });


        $("#nonmicro_3").click(function(){
            if($(this).is(":checked")){
                $("#nonmicro_3").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#nonmicro_3").val("N");
            }
        });


        $("#nonmicro_4").click(function(){
            if($(this).is(":checked")){
                $("#nonmicro_4").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#nonmicro_4").val("N");
            }
        });


        $("#micro_1").click(function(){
            if($(this).is(":checked")){
                $("#micro_1").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#micro_1").val("N");
            }
        });

        $("#micro_2").click(function(){
            if($(this).is(":checked")){
                $("#micro_2").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#micro_2").val("N");
            }
        });

        $("#micro_3").click(function(){
            if($(this).is(":checked")){
                $("#micro_3").val("Y");

            }
            else if($(this).is(":not(:checked)")){
                $("#micro_3").val("N");
            }
        });

    /////primary sites
    $("#prima_1").click(function(){
        if($(this).is(":checked")){
            $("#prima_1").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_1").val("N");
        }
    }); 

    $("#prima_2").click(function(){
        if($(this).is(":checked")){
            $("#prima_2").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_2").val("N");
        }
    });  

    $("#prima_3").click(function(){
        if($(this).is(":checked")){
            $("#prima_3").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_3").val("N");
        }
    }); 

    $("#prima_4").click(function(){
        if($(this).is(":checked")){
            $("#prima_4").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_4").val("N");
        }
    }); 

    $("#prima_5").click(function(){
        if($(this).is(":checked")){
            $("#prima_5").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_5").val("N");
        }
    }); 

    $("#prima_6").click(function(){
        if($(this).is(":checked")){
            $("#prima_6").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_6").val("N");
        }
    }); 

    $("#prima_7").click(function(){
        if($(this).is(":checked")){
            $("#prima_7").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_7").val("N");
        }
    }); 

    $("#prima_8").click(function(){
        if($(this).is(":checked")){
            $("#prima_8").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_8").val("N");
        }
    }); 

    $("#prima_9").click(function(){
        if($(this).is(":checked")){
            $("#prima_9").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_9").val("N");
        }
    }); 

    $("#prima_10").click(function(){
        if($(this).is(":checked")){
            $("#prima_10").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_10").val("N");
        }
    }); 

    $("#prima_11").click(function(){
        if($(this).is(":checked")){
            $("#prima_11").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_11").val("N");
        }
    }); 

    $("#prima_12").click(function(){
        if($(this).is(":checked")){
            $("#prima_12").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_12").val("N");
        }
    }); 

    $("#prima_13").click(function(){
        if($(this).is(":checked")){
            $("#prima_13").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_13").val("N");
        }
    }); 

    $("#prima_14").click(function(){
        if($(this).is(":checked")){
            $("#prima_14").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_14").val("N");
        }
    }); 

    $("#prima_15").click(function(){
        if($(this).is(":checked")){
            $("#prima_15").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_15").val("N");
        }
    }); 

    $("#prima_16").click(function(){
        if($(this).is(":checked")){
            $("#prima_16").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_16").val("N");
        }
    }); 

    $("#prima_17").click(function(){
        if($(this).is(":checked")){
            $("#prima_17").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_17").val("N");
        }
    }); 

    $("#prima_18").click(function(){
        if($(this).is(":checked")){
            $("#prima_18").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_18").val("N");
        }
    }); 

    $("#prima_19").click(function(){
        if($(this).is(":checked")){
            $("#prima_19").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_19").val("N");
        }
    }); 

    $("#prima_20").click(function(){
        if($(this).is(":checked")){
            $("#prima_20").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#prima_20").val("N");
        }
    }); 

    $("#prima_22").click(function(){
        if($(this).is(":checked")){
            $("#prima_22").val("Y");
            $("#prima_22_oth").removeAttr("disabled");

        }
        else if($(this).is(":not(:checked)")){
            $("#prima_22").val("N");
            $("#prima_22_oth").attr("disabled", true);
            $("#prima_22_oth").val("");


        }
    });     

    $("#prima_21").click(function(){
        if($(this).is(":checked")){
            $("#prima_21").val("Y");
            $("#prima21").removeAttr("disabled");

        }
        else if($(this).is(":not(:checked)")){
            $("#prima_21").val("N");
            $("#prima21").attr("disabled", true);
            $("#prima21").val($("#prima21 option:first").val());


        }
    });  

//////////////////////////////////

$("#stag_1").click(function(){
    if($(this).is(":checked")){
        $("#stag_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_1").val("N");
    }
}); 

$("#stag_2").click(function(){
    if($(this).is(":checked")){
        $("#stag_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_2").val("N");
    }
}); 

$("#stag_3").click(function(){
    if($(this).is(":checked")){
        $("#stag_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_3").val("N");
    }
}); 

$("#stag_4").click(function(){
    if($(this).is(":checked")){
        $("#stag_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_4").val("N");
    }
}); 

$("#stag_5").click(function(){
    if($(this).is(":checked")){
        $("#stag_5").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_5").val("N");
    }
}); 

$("#stag_6").click(function(){
    if($(this).is(":checked")){
        $("#stag_6").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_6").val("N");
    }
}); 

$("#stag_7").click(function(){
    if($(this).is(":checked")){
        $("#stag_7").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#stag_7").val("N");
    }
}); 


    //////////////////////////
    $("#site_1").click(function(){
        if($(this).is(":checked")){
            $("#site_1").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_1").val("N");
        }
    }); 

    $("#site_2").click(function(){
        if($(this).is(":checked")){
            $("#site_2").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_2").val("N");
        }
    }); 

    $("#site_3").click(function(){
        if($(this).is(":checked")){
            $("#site_3").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_3").val("N");
        }
    }); 

    $("#site_4").click(function(){
        if($(this).is(":checked")){
            $("#site_4").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_4").val("N");
        }
    }); 

    $("#site_5").click(function(){
        if($(this).is(":checked")){
            $("#site_5").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_5").val("N");
        }
    }); 

    $("#site_6").click(function(){
        if($(this).is(":checked")){
            $("#site_6").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_6").val("N");
        }
    }); 

    $("#site_7").click(function(){
        if($(this).is(":checked")){
            $("#site_7").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_7").val("N");
        }
    }); 

    $("#site_8").click(function(){
        if($(this).is(":checked")){
            $("#site_8").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_8").val("N");
        }
    }); 

    $("#site_9").click(function(){
        if($(this).is(":checked")){
            $("#site_9").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_9").val("N");
        }
    }); 

    $("#site_10").click(function(){
        if($(this).is(":checked")){
            $("#site_10").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#site_10").val("N");
        }
    }); 
////////////////////////////////
$("#plan_1").click(function(){
    if($(this).is(":checked")){
        $("#plan_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_1").val("N");
    }
}); 

$("#plan_2").click(function(){
    if($(this).is(":checked")){
        $("#plan_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_2").val("N");
    }
}); 

$("#plan_3").click(function(){
    if($(this).is(":checked")){
        $("#plan_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_3").val("N");
    }
}); 

$("#plan_4").click(function(){
    if($(this).is(":checked")){
        $("#plan_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_4").val("N");
    }
}); 

$("#plan_5").click(function(){
    if($(this).is(":checked")){
        $("#plan_5").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_5").val("N");
    }
}); 

$("#plan_6").click(function(){
    if($(this).is(":checked")){
        $("#plan_6").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_6").val("N");
    }
}); 

$("#plan_other").click(function(){
    if($(this).is(":checked")){
        $("#plan_other").val("Y");
        $("#plan_other_spec").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#plan_other").val("N");
        $("#plan_other_spec").attr("disabled", true);

    }
}); 

    //////////////////////////////
    $("#add_1").click(function(){
        if($(this).is(":checked")){
            $("#add_1").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_1").val("N");
        }
    }); 

    $("#add_2").click(function(){
        if($(this).is(":checked")){
            $("#add_2").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_2").val("N");
        }
    }); 

    $("#add_3").click(function(){
        if($(this).is(":checked")){
            $("#add_3").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_3").val("N");
        }
    }); 

    $("#add_4").click(function(){
        if($(this).is(":checked")){
            $("#add_4").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_4").val("N");
        }
    }); 

    $("#add_5").click(function(){
        if($(this).is(":checked")){
            $("#add_5").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_5").val("N");
        }
    }); 

    $("#add_6").click(function(){
        if($(this).is(":checked")){
            $("#add_6").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_6").val("N");
        }
    }); 

    $("#add_other").click(function(){
        if($(this).is(":checked")){
            $("#add_other").val("Y");
            $("#add_other_spec").removeAttr("disabled");
        }
        else if($(this).is(":not(:checked)")){
            $("#add_other").val("N");
            $("#add_other_spec").attr("disabled", true);

        }
    }); 

    //////////////////////////
    $("#treathos_1").click(function(){
        if($(this).is(":checked")){
            $("#treathos_1").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_1").val("N");
        }
    }); 

    $("#treathos_2").click(function(){
        if($(this).is(":checked")){
            $("#treathos_2").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_2").val("N");
        }
    }); 

    $("#treathos_3").click(function(){
        if($(this).is(":checked")){
            $("#treathos_3").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_3").val("N");
        }
    }); 

    $("#treathos_4").click(function(){
        if($(this).is(":checked")){
            $("#treathos_4").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_4").val("N");
        }
    }); 

    $("#treathos_5").click(function(){
        if($(this).is(":checked")){
            $("#treathos_5").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_5").val("N");
        }
    }); 

    $("#treathos_6").click(function(){
        if($(this).is(":checked")){
            $("#treathos_6").val("Y");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_6").val("N");
        }
    }); 

    $("#treathos_other").click(function(){
        if($(this).is(":checked")){
            $("#treathos_other").val("Y");
            $("#treathos_other_spec").removeAttr("disabled");
        }
        else if($(this).is(":not(:checked)")){
            $("#treathos_other").val("N");
            $("#treathos_other_spec").attr("disabled", true);

        }
    }); 
//////////////////
$('#treat_1').change(function() {
    if( $(this).val() == 'O' ) {
        $('#treat_other_spec').removeAttr( "disabled" );
    } else {       
        $('#treat_other_spec').attr( "disabled", true );
        $('#treat_other_spec').val("");
    }
});



    //////////////////////////

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
        }
    });

    $("#pulmon_indoor").click(function(){
        if($(this).is(":checked")){
            $("#pulmon_indoor").val("Y");
            $('#pulmon_indoorpollut').removeAttr( "disabled" );

        }
        else if($(this).is(":not(:checked)")){
            $("#pulmon_indoor").val("N");
            $('#pulmon_indoorpollut').attr( "disabled", true );
            $("#pulmon_indoorpollut").val("");
        }
    });

    $("#pulmon_outdoor").click(function(){
        if($(this).is(":checked")){
            $("#pulmon_outdoor").val("Y");
            $('#pulmon_outdoorpollut').removeAttr( "disabled" );

        }
        else if($(this).is(":not(:checked)")){
            $("#pulmon_outdoor").val("N");
            $('#pulmon_outdoorpollut').attr( "disabled", true );
            $("#pulmon_outdoorpollut").val("");
        }
    });

    $('#patstat').change(function() {
        if( $(this).val() == 'DI' ) {
            $('#datedeath').removeAttr( "disabled" );
            $('#dispos').removeAttr( "disabled" );
            $('#placedeath').removeAttr( "disabled" );
            $('#selFac3').removeAttr( "disabled" );
            $('#deathreason').removeAttr( "disabled" );
        } else {       
            $('#datedeath').attr( "disabled", true );
            $('#dispos').attr( "disabled", true );
            $('#placedeath').attr( "disabled", true );
            $('#selFac3').attr( "disabled", true );
            $('#deathreason').attr( "disabled", true );
        }
    });

    $('#reg_bow_freq').change(function() {
        if( $(this).val() == 'OT' ) {
            $('#reg_bow_oth').removeAttr( "disabled" );
        } else {       
            $('#reg_bow_oth').attr( "disabled", true );
            $('#reg_bow_oth').val( "");
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

function fam() {
  if (this.checked) {
    $("#family").val("Y");
    $("input.famm").removeAttr("disabled");
} else {
    $("#family").val("N");
    $("input.famm").attr("disabled", true);
    $("input.famm").val("");

}
}

function bow() {
  if (this.checked) {
    $("#reg_bow").val("Y");
    $("#reg_bow_freq").removeAttr("disabled");
} else {
    $("#reg_bow").val("N");
    $("#reg_bow_freq").attr("disabled", true);
    $("#reg_bow_oth").val("");
    $("#reg_bow_freq").val($("#reg_bow_freq option:first").val());


}
}

function chemexp() {
  if (this.checked) {
    $("#chem_exp").val("Y");
    $("#type_chem").removeAttr("disabled");
    $("#leng_exp").removeAttr("disabled");
} else {
    $("#chem_exp").val("N");
    $("#type_chem").attr("disabled", true);
    $("#leng_exp").attr("disabled", true);
    $("#type_chem").val("");
    $("#leng_exp").val("");

}
}


function contra() {
  if (this.checked) {
    $("#use_contra").val("Y");
    $("#use_contra_spec").removeAttr("disabled");
    $("#no_early").removeAttr("disabled");
} else {
    $("#use_contra").val("N");
    $("#use_contra_spec").attr("disabled", true);
    $("#no_early").attr("disabled", true);
    $("#use_contra_spec").val("");
    $("#no_early").val("");

}
}

function human() {
  if (this.checked) {
    $("#infect1").val("Y");
    $("#infect_1").removeAttr("disabled");
} else {
    $("#infect1").val("N");
    $("#infect_1").attr("disabled", true);
    $("#infect_1").val("");

}
}

function heli() {
  if (this.checked) {
    $("#infect2").val("Y");
    $("#infect_2").removeAttr("disabled");
} else {
    $("#infect2").val("N");
    $("#infect_2").attr("disabled", true);
    $("#infect_2").val("");

}
}

function hepa() {
  if (this.checked) {
    $("#infect3").val("Y");
    $("#infect_3").removeAttr("disabled");
} else {
    $("#infect3").val("N");
    $("#infect_3").attr("disabled", true);
    $("#infect_3").val("");

}
}

function infect() {
  if (this.checked) {
    $("#infect4").val("Y");
    $("#infect4_oth").removeAttr("disabled");
    $("#infect_4").removeAttr("disabled");
} else {
    $("#infect4").val("N");
    $("#infect4_oth").attr("disabled", true);
    $("#infect4_oth").val("");
    $("#infect_4").attr("disabled", true);
    $("#infect_4").val("");

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

