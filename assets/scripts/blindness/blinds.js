var Module=$('#module').val();

function initcheck()
{
   $("input.prev").attr("disabled", true);
   $("#prev_others_spec").attr("disabled", true);
   $("#pros_others").attr("disabled", true);
   $("input.prim").attr("disabled", true);
   $("input.sec").attr("disabled", true);
   $("#sec_others_spec").attr("disabled", true);
   $("#selFac").attr("disabled", true);         
   $("#info_ethnic_spec").attr("disabled", true);         
   $("#info_race_spec").attr("disabled", true);         
   $("#info_occup_spec").attr("disabled", true);         
   $("#info_educat_spec").attr("disabled", true);         
   $(".cataractss").attr("disabled", true);

}

    //added march 14, 2022
    $('#info_typepat2').change(function() {
        if($("#info_typepat2").val()== 'Y'){
            $('#selFac').removeAttr( "disabled" );
        } else {       
            $('#selFac').attr( "disabled", true );
            $('#selFac').empty("");
        }
    });

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

        ///////////////////////////////////////////////////////////////////Nicette Ocampo


        $('#typ_cat').change(function() {
            if( $(this).val() == 'Y' ) {
                $('input.prim').removeAttr( "disabled" );
                $("input.sec").attr("disabled", true);
                $("input.sec").prop("checked",false);
                $("#sec_others_spec").val("");
                $("#sec_others_spec").attr("disabled",true);
                $("input.sec").val("N");


            } else  if( $(this).val() == 'N' ){       
                $("input.sec").removeAttr("disabled");
                $("input.prim").attr("disabled", true);
                $("input.prim").prop("checked",false);
                $("input.prim").val("N");


            }
            else{
             $("input.prim").attr("disabled", true);
             $("input.sec").attr("disabled", true);
             $("input.prim").val("N");
             $("input.sec").val("N");
             $("input.prim").prop("checked",false);
             $("input.sec").prop("checked",false);
         }
     });

///////////////////////////////////
$("#his_con").click(function(){
    if($(this).is(":checked")){
        $("#his_con").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#his_con").val("N");

    }
});

$("#his_ac").click(function(){
    if($(this).is(":checked")){
        $("#his_ac").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#his_ac").val("N");

    }
});

$("#his_acu").click(function(){
    if($(this).is(":checked")){
        $("#his_acu").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#his_acu").val("N");

    }
});
$("#his_gra").click(function(){
    if($(this).is(":checked")){
        $("#his_gra").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#his_gra").val("N");

    }
});

$("#his_unkn").click(function(){
    if($(this).is(":checked")){
        $("#his_unkn").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#his_unkn").val("N");

    }
});

//////////////////////////////////////////
$("#can_1").click(function(){
    if($(this).is(":checked")){
        $("#can_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#can_1").val("N");

    }
});

$("#can_2").click(function(){
    if($(this).is(":checked")){
        $("#can_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#can_2").val("N");

    }
});


$("#low_1").click(function(){
    if($(this).is(":checked")){
        $("#low_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#low_1").val("N");

    }
});

$("#low_2").click(function(){
    if($(this).is(":checked")){
        $("#low_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#low_2").val("N");

    }
});


$("#blind_1").click(function(){
    if($(this).is(":checked")){
        $("#blind_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#blind_1").val("N");

    }
});

$("#blind_2").click(function(){
    if($(this).is(":checked")){
        $("#blind_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#blind_2").val("N");

    }
});


$("#cannot_1").click(function(){
    if($(this).is(":checked")){
        $("#cannot_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cannot_1").val("N");

    }
});

$("#cannot_2").click(function(){
    if($(this).is(":checked")){
        $("#cannot_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cannot_2").val("N");

    }
});


$("#cannotblind_1").click(function(){
    if($(this).is(":checked")){
        $("#cannotblind_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cannotblind_1").val("N");

    }
});

$("#cannotblind_2").click(function(){
    if($(this).is(":checked")){
        $("#cannotblind_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cannotblind_2").val("N");

    }
});


$("#ref_1").click(function(){
    if($(this).is(":checked")){
        $("#ref_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ref_1").val("N");

    }
});

$("#ref_2").click(function(){
    if($(this).is(":checked")){
        $("#ref_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ref_2").val("N");

    }
});


$("#prev_no_1").click(function(){
    if($(this).is(":checked")){
        $("#prev_no_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_no_1").val("N");

    }
});

$("#prev_ass").click(function(){
    if($(this).is(":checked")){
        $("#prev_ass").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_ass").val("N");

    }
});


$("#prev_type").click(function(){
    if($(this).is(":checked")){
        $("#prev_type").val("Y");
        $("input.prev").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_type").val("N");
        $("input.prev").attr("disabled", true);
        $("input.prev").prop("checked", false);
        $("#prev_others_spec").attr("disabled", true);                
        $("#prev_others_spec").val("");
        $("input.prev").val("N");

    }
});

$("#prev_eyelid").click(function(){
    if($(this).is(":checked")){
        $("#prev_eyelid").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_eyelid").val("N");

    }
});

$("#prev_cataract").click(function(){
    if($(this).is(":checked")){
        $("#prev_cataract").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_cataract").val("N");

    }
});

$("#prev_glaucoma").click(function(){
    if($(this).is(":checked")){
        $("#prev_glaucoma").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_glaucoma").val("N");

    }
});

$("#prev_couching").click(function(){
    if($(this).is(":checked")){
        $("#prev_couching").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_couching").val("N");

    }
});

$("#prev_others").click(function(){
    if($(this).is(":checked")){
        $("#prev_others").val("Y");
        $("#prev_others_spec").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#prev_others").val("N");
        $("#prev_others_spec").attr("disabled", true);
        $("#prev_others_spec").val("");
    }
});



///////////////////////////////////////////////////

$("#under_no_1").click(function(){
    if($(this).is(":checked")){
        $("#under_no_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_no_1").val("N");

    }
});

$("#under_no_2").click(function(){
    if($(this).is(":checked")){
        $("#under_no_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_no_2").val("N");

    }
});


$("#under_cong_1").click(function(){
    if($(this).is(":checked")){
        $("#under_cong_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_cong_1").val("N");

    }
});

$("#under_cong_2").click(function(){
    if($(this).is(":checked")){
        $("#under_cong_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_cong_2").val("N");

    }
});


$("#under_oncho_1").click(function(){
    if($(this).is(":checked")){
        $("#under_oncho_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_oncho_1").val("N");

    }
});

$("#under_oncho_2").click(function(){
    if($(this).is(":checked")){
        $("#under_oncho_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_oncho_2").val("N");

    }
});


$("#under_measles_1").click(function(){
    if($(this).is(":checked")){
        $("#under_measles_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_measles_1").val("N");

    }
});

$("#under_measles_2").click(function(){
    if($(this).is(":checked")){
        $("#under_measles_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_measles_2").val("N");

    }
});


$("#under_surg_1").click(function(){
    if($(this).is(":checked")){
        $("#under_surg_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_surg_1").val("N");

    }
});

$("#under_surg_2").click(function(){
    if($(this).is(":checked")){
        $("#under_surg_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_surg_2").val("N");

    }
});


$("#under_trach_1").click(function(){
    if($(this).is(":checked")){
        $("#under_trach_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_trach_1").val("N");

    }
});

$("#under_trach_2").click(function(){
    if($(this).is(":checked")){
        $("#under_trach_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_trach_2").val("N");

    }
});


$("#under_diab_1").click(function(){
    if($(this).is(":checked")){
        $("#under_diab_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_diab_1").val("N");

    }
});

$("#under_diab_2").click(function(){
    if($(this).is(":checked")){
        $("#under_diab_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_diab_2").val("N");

    }
});


$("#under_infect_1").click(function(){
    if($(this).is(":checked")){
        $("#under_infect_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_infect_1").val("N");

    }
});

$("#under_infect_2").click(function(){
    if($(this).is(":checked")){
        $("#under_infect_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_infect_2").val("N");

    }
});


$("#under_carci_1").click(function(){
    if($(this).is(":checked")){
        $("#under_carci_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_carci_1").val("N");

    }
});

$("#under_carci_2").click(function(){
    if($(this).is(":checked")){
        $("#under_carci_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_carci_2").val("N");

    }
});


$("#under_retino_1").click(function(){
    if($(this).is(":checked")){
        $("#under_retino_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_retino_1").val("N");

    }
});

$("#under_retino_2").click(function(){
    if($(this).is(":checked")){
        $("#under_retino_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_retino_2").val("N");

    }
});


$("#under_premature_1").click(function(){
    if($(this).is(":checked")){
        $("#under_premature_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_premature_1").val("N");

    }
});

$("#under_premature_2").click(function(){
    if($(this).is(":checked")){
        $("#under_premature_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_premature_2").val("N");

    }
});


$("#underlying_others_1").click(function(){
    if($(this).is(":checked")){
        $("#underlying_others_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#underlying_others_1").val("N");

    }
});

$("#underlying_others_2").click(function(){
    if($(this).is(":checked")){
        $("#underlying_others_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#underlying_others_2").val("N");

    }
});



  ////////////////////////////////////////  
  $("#myo_1").click(function(){
    if($(this).is(":checked")){
        $("#myo_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#myo_1").val("N");

    }
});

  $("#myo_2").click(function(){
    if($(this).is(":checked")){
        $("#myo_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#myo_2").val("N");

    }
});


  $("#hyper_1").click(function(){
    if($(this).is(":checked")){
        $("#hyper_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#hyper_1").val("N");

    }
});

  $("#hyper_2").click(function(){
    if($(this).is(":checked")){
        $("#hyper_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#hyper_2").val("N");

    }
});



  $("#astig_1").click(function(){
    if($(this).is(":checked")){
        $("#astig_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#astig_1").val("N");

    }
});

  $("#astig_2").click(function(){
    if($(this).is(":checked")){
        $("#astig_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#astig_2").val("N");

    }
});

  $("#mix_1").click(function(){
    if($(this).is(":checked")){
        $("#mix_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#mix_1").val("N");

    }
});

  $("#mix_2").click(function(){
    if($(this).is(":checked")){
        $("#mix_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#mix_2").val("N");

    }
});


  $("#pres_1").click(function(){
    if($(this).is(":checked")){
        $("#pres_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pres_1").val("N");

    }
});

  $("#pres_2").click(function(){
    if($(this).is(":checked")){
        $("#pres_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pres_2").val("N");

    }
});
  $("#amby_1").click(function(){
    if($(this).is(":checked")){
        $("#amby_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#amby_1").val("N");

    }
});

  $("#amby_2").click(function(){
    if($(this).is(":checked")){
        $("#amby_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#amby_2").val("N");

    }
});

////////////////////////////////////////
$("#physical_1").click(function(){
    if($(this).is(":checked")){
        $("#physical_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#physical_1").val("N");

    }
});

$("#physical_2").click(function(){
    if($(this).is(":checked")){
        $("#physical_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#physical_2").val("N");

    }
});

$("#cataract_1").click(function(){
    if($(this).is(":checked")){
        $("#cataract_1").val("Y");

        $(".noncataract").val("N");
        $("#dis_others_spec").val("");
        $(".noncataract").attr("disabled", true);
        $(".noncataract").prop("checked", false);

        $(".cataractss").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#cataract_1").val("N");
        
        $(".noncataract").removeAttr("disabled");

        $(".sec").attr("disabled", true);
        $(".sec").prop("checked", false);

        $(".prim").attr("disabled", true);
        $(".prim").prop("checked", false);

        $(".cataractss").attr("disabled", true);
        $(".cataractss").prop("checked", false);

        $("#typ_cat").val("");
        $("#sec_others_spec").val("");
        $("#vis_right").val("");
        $("#vis_left").val("");
        $("#name_surg").val("");
        $("#comp_surg").val("");
        $("#opera_dte").val("0000-00-00 00:00:00");
    }
});

$("#cataract_2").click(function(){
    if($(this).is(":checked")){
        $("#cataract_2").val("Y");

        $(".noncataract").val("N");
        $("#dis_others_spec").val("");
        $(".noncataract").attr("disabled", true);
        $(".noncataract").prop("checked", false);

        $(".cataractss").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#cataract_2").val("N");

        $(".noncataract").removeAttr("disabled");

        $(".sec").attr("disabled", true);
        $(".sec").prop("checked", false);

        $(".prim").attr("disabled", true);
        $(".prim").prop("checked", false);

        $(".cataractss").attr("disabled", true);
        $(".cataractss").prop("checked", false);

        $("#typ_cat").val("");
        $("#sec_others_spec").val("");
        $("#vis_right").val("");
        $("#vis_left").val("");
        $("#name_surg").val("");
        $("#comp_surg").val("");
        $("#opera_dte").val("0000-00-00 00:00:00");
    }
});

$("#uncorrect_1").click(function(){
    if($(this).is(":checked")){
        $("#uncorrect_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#uncorrect_1").val("N");

    }
});

$("#uncorrect_2").click(function(){
    if($(this).is(":checked")){
        $("#uncorrect_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#uncorrect_2").val("N");

    }
});


$("#cornea_1").click(function(){
    if($(this).is(":checked")){
        $("#cornea_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cornea_1").val("N");

    }
});

$("#cornea_2").click(function(){
    if($(this).is(":checked")){
        $("#cornea_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#cornea_2").val("N");

    }
});

$("#anterior_1").click(function(){
    if($(this).is(":checked")){
        $("#anterior_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#anterior_1").val("N");

    }
});

$("#anterior_2").click(function(){
    if($(this).is(":checked")){
        $("#anterior_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#anterior_2").val("N");

    }
});
$("#glaucoma_1").click(function(){
    if($(this).is(":checked")){
        $("#glaucoma_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#glaucoma_1").val("N");

    }
});

$("#glaucoma_2").click(function(){
    if($(this).is(":checked")){
        $("#glaucoma_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#glaucoma_2").val("N");

    }
});

$("#optic_1").click(function(){
    if($(this).is(":checked")){
        $("#optic_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#optic_1").val("N");

    }
});

$("#optic_2").click(function(){
    if($(this).is(":checked")){
        $("#optic_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#optic_2").val("N");

    }
});

$("#retinopat_1").click(function(){
    if($(this).is(":checked")){
        $("#retinopat_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#retinopat_1").val("N");

    }
});

$("#retinopat_2").click(function(){
    if($(this).is(":checked")){
        $("#retinopat_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#retinopat_2").val("N");

    }
});

$("#chorio_1").click(function(){
    if($(this).is(":checked")){
        $("#chorio_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#chorio_1").val("N");

    }
});

$("#chorio_2").click(function(){
    if($(this).is(":checked")){
        $("#chorio_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#chorio_2").val("N");

    }
});


$("#macular_1").click(function(){
    if($(this).is(":checked")){
        $("#macular_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#macular_1").val("N");

    }
});

$("#macular_2").click(function(){
    if($(this).is(":checked")){
        $("#macular_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#macular_2").val("N");

    }
});


$("#retinal_1").click(function(){
    if($(this).is(":checked")){
        $("#retinal_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#retinal_1").val("N");

    }
});

$("#retinal_2").click(function(){
    if($(this).is(":checked")){
        $("#retinal_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#retinal_2").val("N");

    }
});

$("#tumor_1").click(function(){
    if($(this).is(":checked")){
        $("#tumor_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#tumor_1").val("N");

    }
});

$("#tumor_2").click(function(){
    if($(this).is(":checked")){
        $("#tumor_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#tumor_2").val("N");

    }
});

$("#notexam_1").click(function(){
    if($(this).is(":checked")){
        $("#notexam_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#notexam_1").val("N");

    }
});

$("#notexam_2").click(function(){
    if($(this).is(":checked")){
        $("#notexam_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#notexam_2").val("N");

    }
});

$("#dis_others_1").click(function(){
    if($(this).is(":checked")){
        $("#dis_others_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#dis_others_1").val("N");

    }
});

$("#dis_others_2").click(function(){
    if($(this).is(":checked")){
        $("#dis_others_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#dis_others_2").val("N");

    }
});
/////////////////////////////////////////////

$("#treat").click(function(){
    if($(this).is(":checked")){
        $("#treat").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#treat").val("N");

    }
});

$("#guard").click(function(){
    if($(this).is(":checked")){
        $("#guard").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#guard").val("N");

    }
});

$("#untreat").click(function(){
    if($(this).is(":checked")){
        $("#untreat").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#untreat").val("N");

    }
});

$("#unk").click(function(){
    if($(this).is(":checked")){
        $("#unk").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#unk").val("N");

    }
});
/////////////////////////////////////////////

$("#pros_eye").click(function(){
    if($(this).is(":checked")){
        $("#pros_eye").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pros_eye").val("N");

    }
});

$("#pros_contact").click(function(){
    if($(this).is(":checked")){
        $("#pros_contact").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pros_contact").val("N");

    }
});

$("#pros_eyees").click(function(){
    if($(this).is(":checked")){
        $("#pros_eyees").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#pros_eyees").val("N");

    }
});

$("#pros_other").click(function(){
    if($(this).is(":checked")){
        $("#pros_other").val("Y");
        $("#pros_others").removeAttr("disabled");

    }
    else if($(this).is(":not(:checked)")){
        $("#pros_other").val("N");
        $("#pros_others").attr("disabled", true);
        $("#pros_others").val("");


    }
});
/////////////////////////////////////////////

$("#prim_dev").click(function(){
    if($(this).is(":checked")){
        $("#prim_dev").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prim_dev").val("N");

    }
});

$("#prim_sen").click(function(){
    if($(this).is(":checked")){
        $("#prim_sen").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prim_sen").val("N");

    }
});

$("#prim_con").click(function(){
    if($(this).is(":checked")){
        $("#prim_con").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#prim_con").val("N");

    }
});
/////////////////////////////////////////////
$("#sec_tra").click(function(){
    if($(this).is(":checked")){
        $("#sec_tra").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sec_tra").val("N");
    }
});

$("#sec_infect").click(function(){
    if($(this).is(":checked")){
        $("#sec_infect").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sec_infect").val("N");
    }
});

$("#sec_surg").click(function(){
    if($(this).is(":checked")){
        $("#sec_surg").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sec_surg").val("N");
    }
});

$("#sec_glau").click(function(){
    if($(this).is(":checked")){
        $("#sec_glau").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sec_glau").val("N");
    }
});
$("#sec_other").click(function(){
    if($(this).is(":checked")){
        $("#sec_other").val("Y");
        $("#sec_others_spec").removeAttr("disabled");
    }
    else if($(this).is(":not(:checked)")){
        $("#sec_other").val("N");
        $("#sec_others_spec").attr("disabled", true);
        $("#sec_others_spec").val("");

    }
});
/////////////////////////////////////////////
$("#opera_right").click(function(){
    if($(this).is(":checked")){
        $("#opera_right").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#opera_right").val("N");
    }
});

$("#opera_left").click(function(){
    if($(this).is(":checked")){
        $("#opera_left").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#opera_left").val("N");
    }
});

$("#opera_both").click(function(){
    if($(this).is(":checked")){
        $("#opera_both").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#opera_both").val("N");
    }
});
/////////////////////////////////////////////
$("#icce_1").click(function(){
    if($(this).is(":checked")){
        $("#icce_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#icce_1").val("N");
    }
});
$("#icce_2").click(function(){
    if($(this).is(":checked")){
        $("#icce_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#icce_2").val("N");
    }
});
$("#icce_3").click(function(){
    if($(this).is(":checked")){
        $("#icce_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#icce_3").val("N");
    }
});
$("#icce_4").click(function(){
    if($(this).is(":checked")){
        $("#icce_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#icce_4").val("N");
    }
});

$("#ecce_1").click(function(){
    if($(this).is(":checked")){
        $("#ecce_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ecce_1").val("N");
    }
});
$("#ecce_2").click(function(){
    if($(this).is(":checked")){
        $("#ecce_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ecce_2").val("N");
    }
});

$("#ecce_3").click(function(){
    if($(this).is(":checked")){
        $("#ecce_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ecce_3").val("N");
    }
});
$("#ecce_4").click(function(){
    if($(this).is(":checked")){
        $("#ecce_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#ecce_4").val("N");
    }
});

$("#sics_1").click(function(){
    if($(this).is(":checked")){
        $("#sics_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sics_1").val("N");
    }
});
$("#sics_2").click(function(){
    if($(this).is(":checked")){
        $("#sics_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sics_2").val("N");
    }
});

$("#sics_3").click(function(){
    if($(this).is(":checked")){
        $("#sics_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sics_3").val("N");
    }
});
$("#sics_4").click(function(){
    if($(this).is(":checked")){
        $("#sics_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#sics_4").val("N");
    }
});

$("#phaco_1").click(function(){
    if($(this).is(":checked")){
        $("#phaco_1").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#phaco_1").val("N");
    }
});
$("#phaco_2").click(function(){
    if($(this).is(":checked")){
        $("#phaco_2").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#phaco_2").val("N");
    }
});

$("#phaco_3").click(function(){
    if($(this).is(":checked")){
        $("#phaco_3").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#phaco_3").val("N");
    }
});
$("#phaco_4").click(function(){
    if($(this).is(":checked")){
        $("#phaco_4").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#phaco_4").val("N");
    }
});


//additional
$("#under_diab_trac").click(function(){
    if($(this).is(":checked")){
        $("#under_diab_trac").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_diab_trac").val("N");

    }
});

$("#under_diab_tb").click(function(){
    if($(this).is(":checked")){
        $("#under_diab_tb").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#under_diab_tb").val("N");

    }
});








