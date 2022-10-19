var Module=$('#module').val();

    function initcheck()
    {
           $("#inj_othtreat").attr("disabled", true);
           $("#incident_otherspec").attr("disabled", true);
           $("#inj_dispaft").attr("disabled", true);
           $("#inj_material").attr("disabled", true);
           $("#selFac").attr("disabled", true);
           $("#selFac2").attr("disabled", true);
           $("#selFac3").attr("disabled", true);
           $("#inj_datedied").attr("disabled", true);
           $("input.typeinj").attr("disabled", true);


    }
 $('#incident_nature').change(function() {
                if( $(this).val() == '10') {
                    $('input.typeinj').removeAttr("disabled");
                    $('#incident_multipleinj').val("Y");
                } else {       
                    $('input.typeinj').attr( "disabled", true );
                    $('input.typeinj').val("N");
                    $('input.typeinj').prop("checked",false);
                    $('#incident_multipleinj').val("N");
                }
            });

     $('#inj_dispaftout').change(function() {
                if( $(this).val() == '2') {
                    $('#inj_datedied').removeAttr("disabled");
                } else {       
                    $('#inj_datedied').attr( "disabled", true );
                }
            });

      $('#inj_dispafter_adm').change(function() {
                if( $(this).val() == 'TRASH') {
                    $('#selFac3').removeAttr("disabled");
                } else {       
                    $('#selFac3').attr( "disabled", true );
                }
            });


    $('#inj_dispafter').change(function() {
                if( $(this).val() == 'REFER') {
                    $('#selFac2').removeAttr("disabled");
                } else {       
                    $('#selFac2').attr( "disabled", true );
                }
            });

      $('#incident_refer').change(function() {
                if( $(this).val() == 'Y') {
                    $('#selFac').removeAttr("disabled");
                } else {       
                    $('#selFac').attr( "disabled", true );
                    $('#selFac').val("");
                }
            });


        $('#incident_placeoccur').change(function() {
                if( $(this).val() == '4') {
                    $('#incident_otherspec').prop( "disabled", false );
                } else {       
                    $('#incident_otherspec').prop( "disabled", true );
                }
            });
          $('#inj_aware').change(function() {
                if( $(this).val() == 'Y') {
                    $('#inj_material').prop( "disabled", false );
                } else {       
                    $('#inj_material').prop( "disabled", true );
                }
            });

         $('#inj_dispafter').change(function() {
                if( $(this).val() == 'REFER') {
                    $('#inj_dispaft').prop( "disabled", false );
                } else {       
                    $('#inj_dispaft').prop( "disabled", true );
                }
            });

           $("#inj_oth_spec").click(function(){
            if($(this).is(":checked")){
              $("#inj_oth_spec").val("Y");
              $("#inj_othtreat").removeAttr("disabled");

            }
            else if($(this).is(":not(:checked)")){
                $("#inj_oth_spec").val("N");
                  $("#inj_othtreat").attr("disabled", true);
                  $("#inj_othtreat").val("");
            }
            });  

             $("#inj_withamp").click(function(){
            if($(this).is(":checked")){
                $("#inj_withamp").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_withamp").val("N");
            }
             });

              $("#inj_noamp").click(function(){
            if($(this).is(":checked")){
                $("#inj_noamp").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_noamp").val("N");
            }
             });

              $("#inj_typeeye").click(function(){
            if($(this).is(":checked")){
                $("#inj_typeeye").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_typeeye").val("N");
            }
             });

            $("#inj_head").click(function(){
            if($(this).is(":checked")){
                $("#inj_head").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_head").val("N");
            }
             });

             $("#inj_eye").click(function(){
            if($(this).is(":checked")){
                $("#inj_eye").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_eye").val("N");
            }
             });


            $("#inj_neck").click(function(){
            if($(this).is(":checked")){
                $("#inj_neck").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_neck").val("N");
            }
             });
 
            $("#inj_chest").click(function(){
            if($(this).is(":checked")){
                $("#inj_chest").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_chest").val("N");
            }
             });


            $("#inj_back").click(function(){
            if($(this).is(":checked")){
                $("#inj_back").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_back").val("N");
            }
             });
 
            $("#inj_abdomen").click(function(){
            if($(this).is(":checked")){
                $("#inj_abdomen").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_abdomen").val("N");
            }
             });
  
            $("#inj_pelvis").click(function(){
            if($(this).is(":checked")){
                $("#inj_pelvis").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_pelvis").val("N");
            }
             });
  
            $("#inj_thigh").click(function(){
            if($(this).is(":checked")){
                $("#inj_thigh").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_thigh").val("N");
            }
             });

            $("#inj_buttocks").click(function(){
            if($(this).is(":checked")){
                $("#inj_buttocks").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_buttocks").val("N");
            }
             });

            $("#inj_legs").click(function(){
            if($(this).is(":checked")){
                $("#inj_legs").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_legs").val("N");
            }
             });

            $("#inj_knee").click(function(){
            if($(this).is(":checked")){
                $("#inj_knee").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_knee").val("N");
            }
             });

            $("#inj_foot").click(function(){
            if($(this).is(":checked")){
                $("#inj_foot").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_foot").val("N");
            }
             });

            $("#inj_arm").click(function(){
            if($(this).is(":checked")){
                $("#inj_arm").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_arm").val("N");
            }
             });


            $("#inj_hand").click(function(){
            if($(this).is(":checked")){
                $("#inj_hand").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_hand").val("N");
            }
             });

             $("#inj_ats").click(function(){
            if($(this).is(":checked")){
                $("#inj_ats").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_ats").val("N");
            }
             });

              $("#inj_toxoid").click(function(){
            if($(this).is(":checked")){
                $("#inj_toxoid").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_toxoid").val("N");
            }
             });

               $("#inj_none").click(function(){
            if($(this).is(":checked")){
                $("#inj_none").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#inj_none").val("N");
            }
             });


   