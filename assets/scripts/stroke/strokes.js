var Module=$('#module').val();

    function initcheck()
    {
        smoke();
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
         $("#smoke").click(smoke);
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

           $("input.ssmoke").attr("disabled", true);
           $("input.physactivity").attr("disabled", true);
           $("input.famm").attr("disabled", true);

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
         $("#symp_otherspec").attr("disabled", true);
         $("#diag_other_spec").attr("disabled", true);

         $("#prev_other").attr("disabled", true);


         $("#drink_type").attr("disabled", true);
         $("#drink_amount").attr("disabled", true);
         $("#age_alcohol").attr("disabled", true);
         $("#no_alcohol").attr("disabled", true);
         $("#unit").attr("disabled", true);
         $("#alcohol_freq").attr("disabled", true);

         $("#fam_mem").attr("disabled", true);
         $("#fam_memtype").attr("disabled", true);

          $("#symp_4a").attr("disabled", true);
         $("#symp_4b").attr("disabled", true);
         $("#symp_4c").attr("disabled", true);
         $("#symp_4d").attr("disabled", true);
         $("#diag_other_spec").attr("disabled", true);

         $("#diag_other_final").attr("disabled", true);

         $("#treat_1b_spec").attr("disabled", true);
         $("#treat_2d_spec").attr("disabled", true);
         $("#treat_other_spec").attr("disabled", true);
         $("#treat_4_spec").attr("disabled", true);


         $("#treat_1a").attr("disabled", true);
         $("#treat_1b").attr("disabled", true);
         $("#treat_2a").attr("disabled", true);
         $("#treat_2b").attr("disabled", true);
         $("#treat_2c").attr("disabled", true);
         $("#treat_2d").attr("disabled", true);

         $("#treat_3a").attr("disabled", true);
         $("#treat_3b").attr("disabled", true);
         $("#treat_3c").attr("disabled", true);
 

         $('#datedeath').attr( "disabled", true );
         $('#placedeath').attr( "disabled", true );
         $('#selFac3').attr( "disabled", true );
         $('#deathreason').attr( "disabled", true ); 

    }

        function smoke() {
          if (this.checked) {
            $("input.ssmoke").removeAttr("disabled");
            $( "#smoke" ).val("Y");
          } else {
            $("input.ssmoke").attr("disabled", true);
            $( "input.ssmoke" ).prop( "checked", false );
            $( "#smoke" ).val("Y");
            $( "#age_smoke" ).val("");
            $( "#num_smoke" ).val("");
          }
        }


        $("#less_smoke").click(function(){
            if($(this).is(":checked")){
                $("#more_smoke").attr("disabled", true);
                $("#less_smoke").val("Y");
                $("#more_smoke").val("N");
            }
            else if($(this).is(":not(:checked)")){
                $("#more_smoke").removeAttr("disabled");
                $("#more_smoke").prop("checked", false );
                $("#less_smoke").val("N");
            }
        });

          $("#more_smoke").click(function(){
            if($(this).is(":checked")){
                $("#less_smoke").attr("disabled", true);
                $("#more_smoke").val("Y");
                $("#less_smoke").val("N");
            }
            else if($(this).is(":not(:checked)")){
                $("#less_smoke").removeAttr("disabled");
                $("#less_smoke").prop( "checked", false );
                $("#more_smoke").val("N");
              
            }
        });

            $("#ref_from").click(function(){
            if($(this).is(":checked")){
                $("#ref_from").val("Y");
            }
            else if($(this).is(":not(:checked)")){
                $("#ref_from").val("N");
            }
        });

$('#patstat').change(function() {
            if( $(this).val() == 'DI' ) {
                $('#datedeath').removeAttr( "disabled" );
                $('#placedeath').removeAttr( "disabled" );
                $('#selFac3').removeAttr( "disabled" );
                $('#deathreason').removeAttr( "disabled" );
            } else {       
                $('#datedeath').attr( "disabled", true );
                $('#placedeath').attr( "disabled", true );
                $('#selFac3').attr( "disabled", true );
                $('#deathreason').attr( "disabled", true );
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
              $("#prev_other").removeAttr("disabled");

            }
            else if($(this).is(":not(:checked)")){
                $("#prev_5").val("N");
                $("#prev_other").val("");
                  $("#prev_other").attr("disabled", true);
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
               $("input.numb").removeAttr("disabled");
                            
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_4").val("N");
                $("input.numb").attr("disabled", true);
                $("input.numb").prop("checked", false);
                 $("#diag_other_spec").val("");

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

             $("#symp_4a").click(function(){
            if($(this).is(":checked")){
                $("#symp_4a").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_4a").val("N");

            }
        });  

               $("#symp_4b").click(function(){
            if($(this).is(":checked")){
                $("#symp_4b").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_4b").val("N");

            }
        });  

                 $("#symp_4c").click(function(){
            if($(this).is(":checked")){
                $("#symp_4c").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_4c").val("N");

            }
        });  

         $("#symp_4d").click(function(){
            if($(this).is(":checked")){
                $("#symp_4d").val("Y");
                $("#diag_other_spec").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_4d").val("N");
                $("#diag_other_spec").attr("disabled", true);
                $("#diag_other_spec").val("");

            }
        });  

           $("#symp_8").click(function(){
            if($(this).is(":checked")){
                $("#symp_8").val("Y");
                $("#diag_other_final").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#symp_8").val("N");
                $("#diag_other_final").attr("disabled", true);
                $("#diag_other_final").val("");

            }
        });  

            $("#treat_1").click(function(){
            if($(this).is(":checked")){
                $("#treat_1").val("Y");
                $("input.acute").removeAttr("disabled");
               
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_1").val("N");
               $("input.acute").attr("disabled", true);
                $("input.acute").prop("checked", false);
                $("#treat_1b_spec").val("");

            }
        });  

                $("#treat_2").click(function(){
            if($(this).is(":checked")){
                $("#treat_2").val("Y");
                $("input.preventive").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_2").val("N");
               $("input.preventive").attr("disabled", true);
                $("input.preventive").prop("checked", false);
                $("#treat_2d_spec").val("");


            }
        });  

          $("#treat_3").click(function(){
            if($(this).is(":checked")){
                $("#treat_3").val("Y");
                $("input.hemo").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_3").val("N");
               $("input.hemo").attr("disabled", true);
                $("input.hemo").prop("checked", false);
                 $("#treat_other_spec").val("");

            }
        });  

           $("#treat_4").click(function(){
            if($(this).is(":checked")){
                $("#treat_4").val("Y");
                $("#treat_4_spec").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_4").val("N");
               $("#treat_4_spec").attr("disabled", true);
               $("#treat_other_spec").val("");

            }
        });  


      $("#treat_1a").click(function(){
            if($(this).is(":checked")){
                $("#treat_1a").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_1a").val("N");

            }
        });  

          $("#treat_1b").click(function(){
            if($(this).is(":checked")){
                $("#treat_1b").val("Y");
                $("#treat_1b_spec").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_1b").val("N");
                 $("#treat_1b_spec").attr("disabled", true);
                 $("#treat_1b_spec").val("");

            }
        });    

            $("#treat_2a").click(function(){
            if($(this).is(":checked")){
                $("#treat_2a").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_2a").val("N");

            }
        });  

              $("#treat_2b").click(function(){
            if($(this).is(":checked")){
                $("#treat_2b").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_2b").val("N");

            }
        });  

           $("#treat_2c").click(function(){
            if($(this).is(":checked")){
                $("#treat_2c").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_2c").val("N");

            }
        });    


           $("#treat_2d").click(function(){
            if($(this).is(":checked")){
                $("#treat_2d").val("Y");
                $("#treat_2d_spec").removeAttr("disabled");
                
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_2d").val("N");
                 $("#treat_2d_spec").attr("disabled", true);
                 $("#treat_2d_spec").val("");


            }
        });       

              $("#treat_3a").click(function(){
            if($(this).is(":checked")){
                $("#treat_3a").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_3a").val("N");

            }
        });  


            $("#treat_3c").click(function(){
            if($(this).is(":checked")){
                $("#treat_3c").val("Y");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_3c").val("N");

            }
        });  

             $("#treat_3b").click(function(){
            if($(this).is(":checked")){
                $("#treat_3b").val("Y");
                $("#treat_other_spec").removeAttr("disabled");
                
                
            }
            else if($(this).is(":not(:checked)")){
                $("#treat_3b").val("N");
                 $("#treat_other_spec").attr("disabled", true);
                 $("#treat_other_spec").val("");


            }
        });    

