    var Module = $('#module').val();

    function initMaxwizard(hpercode){
        var formType = $("#formIden_famplan").val();      
        _initWizard();
        _eventWizard(formType);
        _validateWizard();
        SelFamilyMethod();
        SelFamilyType();
        checkFamPlan(hpercode);
        $('select.med').prop('selectedIndex',  2);
        $('select.risk').prop('selectedIndex',  2);
        $('select.vaw').prop('selectedIndex',  2);
        $('select.physical').prop('selectedIndex',  1);
        $('select.preg').prop('selectedIndex',  2);
        $('#finalpreggy').val('N');
    }

    function UpdateFamilyPlanningwizard(enccode,hpercode) {
        var formType = $("#formIden_famplan").val();
        _initWizard();
        _eventWizard(formType);
        _validateWizard();
        getFamilyPlanning(enccode);
        getAssessment(enccode);
        
    };

    function checkFamPlan(hpercode) {
        var  POSTURL = baseURL+"FamilyPlanning/checkFamPlan/" + hpercode;
        $.ajax({
            type: "POST",
            url  : POSTURL,
            data: "JSON",
            success: function (data) {
                if (data > 0) {
                   MaxFamilyPlan(hpercode);
               }
               else {
               }
           },
           error: function (data) {
            alert('Please Try Again!');
        }
    });
    }

    function MaxFamilyPlan(hpercode){
        var  POSTURL = baseURL+"FamilyPlanning/MaxFamilyPlan/" + hpercode;
        var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
        $.ajax({
            url: POSTURL,
            type:"POST",
            data:"JSON",
            processData:false,
            cache:false,
            async:true,
            success: function(data,response){
               obj = $.parseJSON(data);
               getFamilyPlanning(obj['enccode']);
           },
           error: function(response){
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
        }});
    }


    function getFamilyPlanning(enccode){
        var enccode = encodeURIComponent(encodeURIComponent(enccode));    
        var  POSTURL = baseURL+"FamilyPlanning/getFamilyPlanning/" + enccode;

        $.ajax({
            type: "POST",
            url: POSTURL,
            data: "JSON",
            async:false,
            success: function(data,status){ 
                obj = $.parseJSON(data);
                var typecode= obj['typecode'];
                var method_code= obj['method_code'];
                $("#nhtss option[value='" + obj['nhts']+"']").attr("selected","selected");
                $("#forpis option[value='" + obj['fourps']+"']").attr("selected","selected");
                $("#fam_morechild option[value='" + obj['planchild']+"']").attr("selected","selected");

                $("#livechild").val(obj['living_child']);
                $("#monthincome").val(obj['monthlyincome']);
                setFamilyType(typecode);
                $("#reasonfp option[value='" + obj['reasons_fp']+"']").attr("selected","selected");
                
                $("#res_changing option[value='" + obj['reason_changing']+"']").attr("selected","selected");           

                setFamilyMethod(method_code);
                $("#fam_method_specify").val(obj['method_code_sp']);
                
                $("#med_severe option[value='" + obj['severeheadache']+"']").attr("selected","selected");
                $("#med_stroke option[value='" + obj['historystroke']+"']").attr("selected","selected");
                $("#med_nontrauma option[value='" + obj['non_traumatic']+"']").attr("selected","selected");
                $("#med_breast option[value='" + obj['breast_cancer']+"']").attr("selected","selected");
                $("#med_chest option[value='" + obj['chestpain']+"']").attr("selected","selected");
                $("#med_cough option[value='" + obj['cough14day']+"']").attr("selected","selected");
                $("#med_jaundice option[value='" + obj['jaundice']+"']").attr("selected","selected");
                $("#med_bleeding option[value='" + obj['vaginalbleed']+"']").attr("selected","selected");
                
                $("#med_discharge option[value='" + obj['vaginaldischarge']+"']").attr("selected","selected");
                $("#med_intake option[value='" + obj['phenobarbital']+"']").attr("selected","selected");
                $("#med_smoker option[value='" + obj['smoker']+"']").attr("selected","selected");
                $("#med_disability option[value='" + obj['disability']+"']").attr("selected","selected");

                if (obj['reasons_fp'] == '3') {
                    $("#reasonfp_sp").val(obj['reasons_fp_sp']);
                    $("#reasonfp_sp").removeAttr('disabled');
                }
                else{
                    $("#reasonfp_sp").attr('disabled', true);
                }

                if (obj['reason_changing'] == '5') {
                    $("#res_sideeffects_sp").val(obj['sideeffect_sp']);
                    $("#res_sideeffects_sp").removeAttr('disabled');
                }
                else{
                    $("#res_sideeffects_sp").attr('disabled', true);
                }

                if (obj['disability'] == 'Y') {
                    $("#med_disability_yes").val(obj['disability_sp']);
                    $("#med_disability_yes").removeAttr('disabled');
                }
                else{
                    $("#med_disability_yes").attr('disabled', true);
                }

                

                $("#obs_g").val(obj['gravida']);
                $("#obs_p").val(obj['parity']);
                $("#obs_full").val(obj['preterm']);
                $("#obs_premature").val(obj['premature']);
                $("#obs_abortion").val(obj['abortion']);
                $("#obs_livechild").val(obj['livebirths']);

                var deliver = obj['dtedeliver'];
                var datedeliver = ((deliver == "1970-01-01 00:00:00") || (deliver == null)) ? "0000-00-00 00:00:00" : setTimeLocale(deliver);
                $("#datedelivery").val(datedeliver);

                $("#obs_typedel option[value='" + obj['typeofdliver']+"']").attr("selected","selected");

                var last = obj['lmp'];
                var lastmens = ((last == "1970-01-01 00:00:00") || (last == null)) ? "0000-00-00 00:00:00" : setTimeLocale(last);
                $("#obs_lastmenstrual").val(lastmens);

                var prev = obj['pmp'];
                var prevmens = ((prev == "1970-01-01 00:00:00") || (prev == null)) ? "0000-00-00 00:00:00" : setTimeLocale(prev);
                $("#obs_prevmenstrual").val(prevmens);

                var report = obj['dtereport'];
                var daterep = ((report == "1970-01-01 00:00:00") || (report == null)) ? "0000-00-00 00:00:00" : setTimeLocale(report);
                $("#datereport").val(daterep);

                $("#obs_menstrualflow option[value='" + obj['menstrualflow']+"']").attr("selected","selected");


                if (obj['dysmenorrhea'] == 'Y')
                {
                    $("#obs_dysme").prop('checked', true);
                    $("#obs_dysme").val('Y');
                }
                else 
                {
                    $("#obs_dysme").prop('checked', false);
                    $("#obs_dysme").val('N');
                }

                if (obj['hydatidform'] == 'Y')
                {
                    $("#obs_hyda").prop('checked', true);
                    $("#obs_hyda").val('Y');
                }
                else 
                {
                    $("#obs_hyda").prop('checked', false);
                    $("#obs_hyda").val('N');
                }

                if (obj['ectopcpreg'] == 'Y')
                {
                    $("#obs_ecto").prop('checked', true);
                    $("#obs_ecto").val('Y');
                }
                else 
                {
                    $("#obs_ecto").prop('checked', false);
                    $("#obs_ecto").val('N');
                }

                if (obj['abnormaldischargyn'] == 'Y')
                {
                    $("#risk_abnormal_yes option[value='" + obj['ifyesgen']+"']").attr("selected","selected"); 
                    $("#risk_abnormal_yes").removeAttr('disabled');
                }
                else 
                {
                 $("#risk_abnormal_yes").attr('disabled',true);
             }

             if (obj['refferedto'] == '9')
             {
                $("#vaw_reffered_sp").val(obj['refferedto_oth']);
                $("#vaw_reffered_sp").removeAttr('disabled');
            }
            else 
            {
             $("#vaw_reffered_sp").attr('disabled',true);
         }


         $("#risk_abnormal option[value='" + obj['abnormaldischargyn']+"']").attr("selected","selected");
         $("#risk_sores option[value='" + obj['ulcer']+"']").attr("selected","selected");
         $("#risk_pain option[value='" + obj['burning_sensation']+"']").attr("selected","selected");
         $("#risk_treatment option[value='" + obj['sti']+"']").attr("selected","selected");
         $("#risk_hiv option[value='" + obj['hiv']+"']").attr("selected","selected");

         $("#vaw_unplea option[value='" + obj['domestic_violence']+"']").attr("selected","selected");
         $("#vaw_partner option[value='" + obj['upleasantrelation']+"']").attr("selected","selected");
         $("#vaw_domestic option[value='" + obj['partnernotapprove']+"']").attr("selected","selected");
         $("#vaw_reffered option[value='" + obj['refferedto']+"']").attr("selected","selected");



         $("#hwWeight").val(obj['weight']);
         $("#hwHeight").val(obj['height']);
         $("#BP").val(obj['bloodpressure']);
         $("#PR").val(obj['pulserate']);


         if (obj['pelvic'] == '39')
         {
            $("#physical_cervical option[value='" + obj['cervic_abnormal']+"']").attr("selected","selected");
            $("#physical_cervical").removeAttr('disabled');
        }
        else if (obj['pelvic'] == '40')
        {
           $("#physical_cervicalconsis option[value='" + obj['cervic_consistency']+"']").attr("selected","selected");
           $("#physical_cervicalconsis").removeAttr('disabled');
       }
       else if (obj['pelvic'] == '43')
       {
           $("#uterine_pos option[value='" + obj['uterine_position']+"']").attr("selected","selected");
           $("#uterine_pos").removeAttr('disabled');
       }
       else if (obj['pelvic'] == '44')
       {
          $("#u_depth").val(obj['uterine_depth']);
          $("#u_depth").removeAttr('disabled');
      }
      else 
      {
         $("#physical_cervicalconsis").attr('disabled',true);
         $("#physical_cervical").attr('disabled',true);
         $("#uterine_pos").attr('disabled',true);
         $("#u_depth").attr('disabled',true);
     }


     $("#physical_skin option[value='" + obj['skin']+"']").attr("selected","selected");
     $("#physical_extreme option[value='" + obj['extreme']+"']").attr("selected","selected");
     $("#physical_conjunc option[value='" + obj['conjunctiva']+"']").attr("selected","selected");
     $("#physical_neck option[value='" + obj['neck']+"']").attr("selected","selected");
     $("#physical_breast option[value='" + obj['breast']+"']").attr("selected","selected");
     $("#physical_abdomen option[value='" + obj['abdomen']+"']").attr("selected","selected");
     $("#physical_pelvic option[value='" + obj['pelvic']+"']").attr("selected","selected");


     $("#preggy1 option[value='" + obj['baby_less_six']+"']").attr("selected","selected");
     $("#preggy2 option[value='" + obj['abstain_sex']+"']").attr("selected","selected");
     $("#preggy3 option[value='" + obj['baby_four_weeks']+"']").attr("selected","selected");
     $("#preggy4 option[value='" + obj['lmp_past_seven']+"']").attr("selected","selected");
     $("#preggy5 option[value='" + obj['miscarriage']+"']").attr("selected","selected");
     $("#preggy6 option[value='" + obj['reliable_contraceptive']+"']").attr("selected","selected");
     $("#finalpreggy option[value='" + obj['final']+"']").attr("selected","selected");
 },
 error: function(data,status){
 }
});
    return obj;
}

function getAssessment(enccode){
    var enccode = encodeURIComponent(encodeURIComponent(enccode));

    $.ajax({
        type: "POST",
        url: baseURL+"FamilyPlanning/getAssessment/" + enccode,
        data: "JSON",
        async:false,
        success: function(data,status){ 
            obj = $.parseJSON(data);
            var method_code= obj['method_code'];
            var personnel_code= obj['personnel'];
            var typecode= obj['typecode'];
            setFamilyType2(typecode)
            setFamilyMethod2(method_code);
            setEmployees(personnel_code);
            $("#assess_method_specify").val(obj['method_code_sp']);

            var assess = obj['dteassess'];
            var dateassess = ((assess == "1970-01-01 00:00:00") || (assess == null)) ? "0000-00-00 00:00:00" : setTimeLocale(assess);
            $("#dateassess").val(dateassess);

            var sched = obj['schedvisit'];
            var schedvisits = ((sched == "1970-01-01 00:00:00") || (sched == null)) ? "0000-00-00 00:00:00" : setTimeLocale(sched);
            $("#nextvisit").val(schedvisits);

            $("#source option[value='" + obj['source']+"']").attr("selected","selected");
            $("#givedeworm option[value='" + obj['givendeworm']+"']").attr("selected","selected");

            var deworm = obj['dtedeworm'];
            var datedeworms = ((deworm == "1970-01-01 00:00:00") || (deworm == null)) ? "0000-00-00 00:00:00" : setTimeLocale(deworm);
            $("#datedeworm").val(datedeworms);   

            $("#remarks").val(obj['remark']);

            $("#typecl").val(obj['typepatient']);

        },
        error: function(data,status){
        }
    });
    return obj;
}

function _initWizard() {

    var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
    .text('Done')
    .addClass('btn btn-info btn-ladda')
    .on('click', function () {

        if ($('#form-step-2').valid()) {
            var data = new FormData($('#form-step-1')[0]);

            var step2 = $('#form-step-2').serializeArray();
            step2.forEach((item) => {
                data.append(item.name, item.value)
            });

            $.ajax({
                type: "POST",
                url: baseURL + "FamilyPlanning/saveFamilyPlanning",
                data: data,
                processData: false,
                contentType: false,
                success: function (data, response) {
                 var hpercode= $("#hpercodee").val();
                 var enccode= $("#encountercode").val();
                 toastr.success('Successfully Saved! ', 'Success');
                 window.location.replace(baseURL+"FamilyPlanning");
                 initWomenHealth(enccode, hpercode);
             },
             error: function (xhr, desc, err) {
                toastr.error(xhr, 'Error');
            }
        });
        } else {
            return false
        }
    });

    var btnCancel = $('<button></button>').text('Reset')
    .addClass('btn btn-danger btn-ladda')
    .on('click', function () {
        $('#smartwizard')
        .smartWizard("reset");
    });

    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'circles',
        transitionEffect: 'fade',
        showStepURLhash: false,
        transitionSpeed: '1500',
        toolbarSettings:
        {
            toolbarPosition: 'top',
            toolbarExtraButtons: [btnFinish, btnCancel]
        }
    });
}

function _eventWizard(type) {
    $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        if (stepPosition === 'first') {
            $('#btnDone').prop('disabled', true);
            $("#prev-btn").addClass('disabled');
            $("#prev-btn").addClass('disabled');
        }
        else if (stepPosition === 'final') {
            $("#next-btn").addClass('disabled');
            $('#btnDone').prop('disabled', false);
        }
        else {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
            $('#btnDone').prop('disabled', true);
        }
    });
}

function _validateWizard() {
    $("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {
        switch (stepNumber) {
            case 0:
            if ($('#form-step-1').valid()) {
                return true;
            } else {
                return false;
            }
            break;
            case 1:
            if ($('#form-step-2').valid()) {
                return true;
            } else {
                return false;
            }
            break;
        }
    });
}





var Module=$('#module').val();


$('#_selFamilyType').change(function() {
    if( $(this).val() == "NA") {
        $('#reasonfp').removeAttr("disabled");
        $('#res_changing').attr("disabled",true);
        $("#res_changing").val("");    
        $("#res_sideeffects_sp").val("");
        $("#res_sideeffects_sp").attr("disabled",true);
    } 
    else if( $(this).val() == "CM") {
        $('#res_changing').removeAttr("disabled");
        $('#reasonfp').attr("disabled",true);
        $("#reasonfp").val("");    
        $("#reasonfp_sp").val("");
        $("#reasonfp_sp").attr("disabled",true);
    } 
    else {       
        $('#reasonfp').attr( "disabled", true );
        $('#res_changing').attr( "disabled", true );
        $("#reasonfp").val("");  
        $("#res_changing").val("");  
        $("#reasonfp_sp").val("");
        $("#reasonfp_sp").attr("disabled",true);
        $("#res_sideeffects_sp").val("");
        $("#res_sideeffects_sp").attr("disabled",true);
    }
});

$('#reasonfp').change(function() {

 if( $(this).val() == '3') {    
    $("#reasonfp_sp").removeAttr("disabled");
}
else{
    $("#reasonfp_sp").val("");
    $("#reasonfp_sp").attr("disabled",true);
}
});

$('#res_changing').change(function() {

 if( $(this).val() == '5') {    
    $("#res_sideeffects_sp").removeAttr("disabled");
}
else{
    $("#res_sideeffects_sp").val("");
    $("#res_sideeffects_sp").attr("disabled",true);
}
});


$('#_selFamilyMethod').change(function() {
 var method1 = $("#_selFamilyMethod ").find(":selected").val();
 if( method1 == "OM") {
    $('#fam_method_specify').removeAttr("disabled");
} 
else {       
    $('#fam_method_specify').attr( "disabled", true );
    $("#fam_method_specify").val("");  
}
});



////////////////////////////////////////////

$("#all_med").change(function (e) {
    if( $(this).val() == 'Y') {

        $(".med").val($("#all_med").val());
        $("#med_disability_yes").removeAttr("disabled");
        
    }  
    else  if( $(this).val() == 'N') {            
        $(".med").val($("#all_med").val());
        $("#med_disability_yes").attr("disabled", true);
        $("#med_disability_yes").val("");
    }   
    else{
        $(".med").val($(".med option:first").val());  
        $("#med_disability_yes").attr("disabled", true);
        $("#med_disability_yes").val("");            
    } 
});

$("#all_risk").change(function (e) {
    if( $(this).val() == 'Y') {

        $(".risk").val($("#all_risk").val());
        $("#risk_abnormal_yes").removeAttr("disabled");
        
    }  
    else  if( $(this).val() == 'N') {            
        $(".risk").val($("#all_risk").val());
        $("#risk_abnormal_yes").attr("disabled", true);
        $("#risk_abnormal_yes").val($("#risk_abnormal_yes option:first").val());  
    }   
    else{
        $(".risk").val($(".risk option:first").val());    
        $("#risk_abnormal_yes").attr("disabled", true);
        $("#risk_abnormal_yes").val($("#risk_abnormal_yes option:first").val());            
    } 
});

$("#all_preg").change(function (e) {
    if( $(this).val() == 'Y') {

        $(".preg").val($("#all_preg").val());
        
    }  
    else  if( $(this).val() == 'N') {            
        $(".preg").val($("#all_preg").val()); 

    }   
    else{
        $(".preg").val($(".preg option:first").val());              
    }
});

function Pregnant() {
  var p1 = document.getElementById("preggy1").value;
  var p2= document.getElementById("preggy2").value;
  var p3= document.getElementById("preggy3").value;
  var p4= document.getElementById("preggy4").value;
  var p5= document.getElementById("preggy5").value;
  var p6= document.getElementById("preggy6").value;

  if(p1 == "Y" || p2 == "Y" || p3 == "Y"|| p4 == "Y"|| p5 == "Y"|| p6 == "Y"){
     $("#finalpreggy").val("Y");
 }
 else{
    $("#finalpreggy").val("N");
}
}


$("#res_oth").click(function(){
    if($(this).is(":checked")){
        $("#res_oth").val("Y");
        $("#res_oth_sp").removeAttr("disabled");

        $("#res_limiting").val("N");
        $("#res_spacing").val("N");

        $("#res_limiting").attr("disabled", true);
        $("#res_spacing").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#res_oth").val("N");
        $("#res_oth_sp").val("");
        $("#res_limiting").removeAttr("disabled");
        $("#res_spacing").removeAttr("disabled");
        $("#res_oth_sp").attr("disabled", true);
    }
});


$("#res_spacing").click(function(){
    if($(this).is(":checked")){
        $("#res_spacing").val("Y");

        $("#res_limiting").val("N");
        $("#res_oth").val("N");
        $("#res_oth_sp").val("");

        $("#res_limiting").attr("disabled", true);
        $("#res_oth").attr("disabled", true);
        $("#res_oth_sp").attr("disabled", true);
    }

    else if($(this).is(":not(:checked)")){
        $("#res_spacing").val("N");
        $("#res_limiting").removeAttr("disabled");
        $("#res_oth").removeAttr("disabled");
        $("#res_oth_sp").removeAttr("disabled");
    }
});

$("#res_limiting").click(function(){
    if($(this).is(":checked")){
        $("#res_limiting").val("Y");

        $("#res_spacing").val("N");
        $("#res_oth").val("N");
        $("#res_oth_sp").val("");

        $("#res_spacing").attr("disabled", true);
        $("#res_oth").attr("disabled", true);
        $("#res_oth_sp").attr("disabled", true);


    }
    else if($(this).is(":not(:checked)")){
        $("#res_limiting").val("N");

        $("#res_spacing").removeAttr("disabled");
        $("#res_oth").removeAttr("disabled");
    }
});
////////////////////////////////////////
$("#res_side").click(function(){
    if($(this).is(":checked")){
        $("#res_side").val("Y");
        $("#res_side_sp").removeAttr("disabled");

        $("#res_medical").val("N");

        $("#res_medical").attr("disabled", true);
    }
    else if($(this).is(":not(:checked)")){
        $("#res_side").val("N");
        $("#res_side_sp").val("");
        $("#res_medical").removeAttr("disabled");
        $("#res_side_sp").attr("disabled", true);
    }
});

$("#res_medical").click(function(){
    if($(this).is(":checked")){
        $("#res_medical").val("Y");

        $("#res_side").val("N");
        $("#res_side_sp").val("");

        $("#res_side").attr("disabled", true);
        $("#res_side_sp").attr("disabled", true);

    }
    else if($(this).is(":not(:checked)")){
        $("#res_medical").val("N");

        $("#res_side").removeAttr("disabled");
        $("#res_side_sp").removeAttr("disabled");
    }
});





////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////
$('#med_disability').change(function() {
    if( $(this).val() == 'Y') {
        $('#med_disability_yes').removeAttr("disabled");
    } 
    else {       
        $('#med_disability_yes').attr( "disabled", true );
        $("#med_disability_yes").val("");  
    }
});
//////////////////////////////////////////////////////////          
$("#obs_dysme").click(function(){
    if($(this).is(":checked")){
        $("#obs_dysme").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#obs_dysme").val("N");
    }
});

$("#obs_hyda").click(function(){
    if($(this).is(":checked")){
        $("#obs_hyda").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#obs_hyda").val("N");
    }
});

$("#obs_ecto").click(function(){
    if($(this).is(":checked")){
        $("#obs_ecto").val("Y");
    }
    else if($(this).is(":not(:checked)")){
        $("#obs_ecto").val("N");
    }
});

//////////////////////////////////////////////////////////
$('#risk_abnormal').change(function() {
    if( $(this).val() == 'Y') {
        $('#risk_abnormal_yes').removeAttr("disabled");
    } 
    else {       
        $('#risk_abnormal_yes').attr( "disabled", true );
        $("#risk_abnormal_yes").val($("#physical_cervical option:first").val());  

    }
});  
 //////////////////////////////////////////////////////////
 $('#vaw_reffered').change(function() {
    if( $(this).val() == '04') {
        $('#vaw_reffered_sp').removeAttr("disabled");
    } 
    else {       
        $('#vaw_reffered_sp').attr( "disabled", true );
        $("#vaw_reffered_sp").val("");  
    }
});            
 ////////////////////////////////////////////////////////////////////


 $('#physical_pelvic').change(function() {
    if( $(this).val() == '39') {
        $('#physical_cervical').removeAttr("disabled");

        $('#physical_cervicalconsis').attr( "disabled", true );
        $('#uterine_pos').attr( "disabled", true );
        $('#u_depth').attr( "disabled", true );

        $("#physical_cervicalconsis").val($("#physical_cervical option:first").val());  
        $("#uterine_pos").val($("#physical_cervical option:first").val());  
        $("#u_depth").val(""); 


    } 
    else  if( $(this).val() == '40') {
        $('#physical_cervicalconsis').removeAttr("disabled");

        $('#physical_cervical').attr( "disabled", true );
        $('#uterine_pos').attr( "disabled", true );
        $('#u_depth').attr( "disabled", true );

        $("#physical_cervical").val($("#physical_cervical option:first").val());  
        $("#uterine_pos").val($("#physical_cervical option:first").val());  
        $("#u_depth").val(""); 

    } 
    else  if( $(this).val() == '43') {
        $('#uterine_pos').removeAttr("disabled");

        $('#physical_cervical').attr( "disabled", true );
        $('#physical_cervicalconsis').attr( "disabled", true );
        $('#u_depth').attr( "disabled", true );

        $("#physical_cervical").val($("#physical_cervical option:first").val());  
        $("#physical_cervicalconsis").val($("#physical_cervical option:first").val());  
        $("#u_depth").val("");  


    } 
    else  if( $(this).val() == '44') {
        $('#u_depth').removeAttr("disabled");

        $('#physical_cervical').attr( "disabled", true );
        $('#physical_cervicalconsis').attr( "disabled", true );
        $('#uterine_pos').attr( "disabled", true );

        $("#physical_cervical").val($("#physical_cervical option:first").val());  
        $("#physical_cervicalconsis").val($("#physical_cervical option:first").val());  
        $("#uterine_pos").val($("#physical_cervical option:first").val());  

    } 
    else {       
       $('#physical_cervical').attr( "disabled", true );
       $('#physical_cervicalconsis').attr( "disabled", true );
       $('#uterine_pos').attr( "disabled", true ); 
       $('#u_depth').attr( "disabled", true );

       $("#physical_cervical").val($("#physical_cervical option:first").val());  
       $("#physical_cervicalconsis").val($("#physical_cervicalconsis option:first").val());  
       $("#uterine_pos").val($("#uterine_pos option:first").val());  
       $("#u_depth").val("");  
   }
});       

////////////////////////////////////////////////////////////



$('#givedeworm').change(function() {
    if( $(this).val() == 'Y') {           
        $('#datedeworm').removeAttr("disabled");
        $('#wormdose').removeAttr("disabled");
        $('#datedeworm').val(getTimeLocale());
    } 
    else {       
        $('#datedeworm').val("0000-00-00 00:00:00");
        $('#datedeworm').attr( "disabled", true );
        $('#wormdose').attr( "disabled", true );
        $("#wormdose").val($("#dewormdose option:first").val());  
    }
});

$('#assess_selFamilyMethod').change(function() {
 var method2 = $("#assess_selFamilyMethod ").find(":selected").val();

 if (method2== 'PILLS-COC' || method2== 'PILLS-POP' || method2== 'IMP' || method2== 'CON' || method2== 'NFP-CMM' || method2== 'NFP-BBT' || method2== 'NFP-STM' || method2== 'NFP-SDM' || method2== 'NFP-LAM') {
    let month = 1;
    let now = new Date();
    now.setMonth(now.getMonth() + month * 1);

    var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
    

    $("#nextvisit").val(time);
}
else if (method2== 'IUD-I' || method2== 'IUD-PP') {
    let month = 1;
    let now = new Date();
    now.setMonth(now.getMonth() + month * 12);

    var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
    

    $("#nextvisit").val(time);
}
else if (method2== 'INJ') {
    let month = 1;
    let now = new Date();
    now.setMonth(now.getMonth() + month * 3);

    var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
    

    $("#nextvisit").val(time);
}

else  if (method2 == 'OM') {
    $("#assess_method_specify").removeAttr("disabled");
}
else{
    $("#assess_method_specify").val("");
    $("#assess_method_specify").attr("disabled",true);
}
});





$('#vaw_reffered').change(function() {

 if( $(this).val() == '9') {    
    $("#vaw_reffered_sp").removeAttr("disabled");
}
else{
    $("#vaw_reffered_sp").val("");
    $("#vaw_reffered_sp").attr("disabled",true);
}
});





