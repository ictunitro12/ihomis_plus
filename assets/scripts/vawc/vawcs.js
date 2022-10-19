var Module=$('#module').val();

    function initcheck()
    {
         
         $("#multi_frac_sel").attr("disabled", true);

         $("#info_disability_sp").attr("disabled", true);
         $("#info_informant_sp").attr("disabled", true);

         $("#case_incidenthosp").attr("disabled", true);
         $("#case_incident_oth").attr("disabled", true);

         $("#ra_oth_sp").attr("disabled", true);

         $("#place_incident_sp").attr("disabled", true);

         $("#multi_1").attr("disabled", true);
         $("#multi_2").attr("disabled", true);
         $("#multi_site").attr("disabled", true);
         $("#multi_4").attr("disabled", true);
         $("#multi_5").attr("disabled", true);
         $("#multi_6").attr("disabled", true);
         $("#multi_7").attr("disabled", true);
         $("#multi_8").attr("disabled", true);
         $("#multi_9").attr("disabled", true);
         $("#multi_10").attr("disabled", true);

         $("#ext_5").attr("disabled", true);
         $("#ext_2").attr("disabled", true);
         $("#ext_4").attr("disabled", true);
         $("#ext_1").attr("disabled", true);
         $("#ext_drown1").attr("disabled", true);
         $("#ext_6").attr("disabled", true);
         $("#ext_burn1").attr("disabled", true);
         $("#ext_3").attr("disabled", true);
         $("#ext_fall1").attr("disabled", true);
         $("#ext_8").attr("disabled", true);
         $("#selFire").attr("disabled", true);
         $("#ext_9").attr("disabled", true);
         $("#ext_10").attr("disabled", true);

         $("#selFac").attr("disabled", true);
         $("#intervet_aid_sp").attr("disabled", true);
         $("#intervet_oth_sp").attr("disabled", true);

         $("#perp_teltoviv_sp").attr("disabled", true);
         $("#perp_occup_sp").attr("disabled", true);

         $("input.ra_vaw").attr("disabled", true);
         $('input.mult').attr("disabled", true);
    }

      $("#multi_frac").click(function(){
            if($(this).is(":checked")){
                $("#multi_frac").val("Y");
                $("#multi_frac_sel").removeAttr("disabled");
                $("#multi_frac_sp").removeAttr("disabled");
            }
            else if($(this).is(":not(:checked)")){
                $("#multi_frac").val("N");
                $("#multi_frac_sp").val("");
                $("#multi_frac_sel").val($("#multi_frac_sel option:first").val());
                $("#multi_frac_sel").attr("disabled", true);
                $("#multi_frac_sp").attr("disabled", true);

            }
            else
            {
                 $("#multi_frac_sp").val("");
            }
        });

     $('#referral').change(function() {
            if( $(this).val() == '22' ) {
                $('#case_incidenthosp').removeAttr("disabled");
            } 
            else  if( $(this).val() == '99' ) {

                $('#case_incident_oth').removeAttr("disabled");

            }else {       

                $('#case_incidenthosp').attr("disabled", true );
                $('#case_incident_oth').val("");
            }
        });

        $('#info_disability').change(function() {
            if( $(this).val() == 'Y' ) {
                $('#info_disability_sp').removeAttr("disabled");
            } else {       
                $('#info_disability_sp').attr("disabled", true );
                $('#info_disability_sp').val("");
            }
        });


        $('#info_informant').change(function() {
            if( $(this).val() == '04' ) {
                $('#info_informant_sp').removeAttr("disabled");
            } else {       
                $('#info_informant_sp').attr("disabled", true );
                $('#info_informant_sp').val("");
            }
        });

        $("#ra_vawc").click(function(){
            if($(this).is(":checked")){
                $("#ra_vawc").val("Y");
                $("input.ra_vaw").removeAttr("disabled");
               

            }
            else if($(this).is(":not(:checked)")){
                $("#ra_vawc").val("N");
                 $("input.ra_vaw").attr("disabled", true);
                 $("input.ra_vaw").val("N");
                 $("input.ra_vaw").prop("checked", false);
                  $("#ra_oth_sp").val("");
                  $("#ra_oth_sp").attr("disabled", true);

            }
        });

            $("#ra_psy").click(function(){
            if($(this).is(":checked")){
                $("#ra_psy").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_psy").val("N");
            }
        });

            $("#ra_phys").click(function(){
            if($(this).is(":checked")){
                $("#ra_phys").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_phys").val("N");
            }
        });

             $("#ra_oth").click(function(){
            if($(this).is(":checked")){
                $("#ra_oth").val("Y");
                $("#ra_oth_sp").removeAttr("disabled");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_oth").val("N");
                $("#ra_oth_sp").attr("disabled", true);
                $("#ra_oth_sp").val("");
            }
        });

              $("#ra_rape").click(function(){
            if($(this).is(":checked")){
                $("#ra_rape").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_rape").val("N");
            }
        });


              $("#ra_sexual").click(function(){
            if($(this).is(":checked")){
                $("#ra_sexual").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_sexual").val("N");
            }
        });

               $("#ra_bully").click(function(){
            if($(this).is(":checked")){
                $("#ra_bully").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_bully").val("N");
            }
        });

                $("#ra_special").click(function(){
            if($(this).is(":checked")){
                $("#ra_special").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ra_special").val("N");
            }
        });

        $('#place_incident').change(function() {
            if( $(this).val() == '88' ) {
                $('#place_incident_sp').removeAttr("disabled");
            } else {       
                $('#place_incident_sp').attr("disabled", true );
                $('#place_incident_sp').val("");
            }
        });
///////////////////////////////////////////////////////////////////////
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
/////////////////////////////////////////////////////////

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


///////////////////////////////////////////////////////////////////////
    

         $('#intervet').change(function() {
            if( $(this).val() == '10') {
                $("#intervet_aid_sp").removeAttr("disabled");
                $("#intervet_oth_sp").attr("disabled", true);
                $("#intervet_oth_sp").val("");

            } 
            else if( $(this).val() == '50') {
                $("#intervet_oth_sp").removeAttr("disabled");
                $("#intervet_aid_sp").attr("disabled", true);
                $("#intervet_aid_sp").val("");
            } 
            else  {       
                $('#intervet_aid_sp').attr("disabled", true);
                $('#intervet_oth_sp').attr("disabled", true);
                $('#intervet_aid_sp').val("");
                $('#intervet_oth_sp').attr("");
            }
        });

           $('#dispose').change(function() {
            if( $(this).val() == '50') {
                $("#selFac").removeAttr("disabled");
            } 
            else  {       
                $('#selFac').attr("disabled", true);
            }
        });

             $('#perp_teltoviv').change(function() {
            if( $(this).val() == '70') {
                $("#perp_teltoviv_sp").removeAttr("disabled");
            } 
            else  {       
                $('#perp_teltoviv_sp').attr("disabled", true);
                $('#perp_teltoviv_sp').val("");
            }
        });

               $('#perp_occup').change(function() {
            if( $(this).val() == '2') {
                $("#perp_occup_sp").removeAttr("disabled");
            } 
            else  {       
                $('#perp_occup_sp').attr("disabled", true);
                $('#perp_occup_sp').val("");
            }
        });

