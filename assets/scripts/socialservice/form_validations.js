
//
$('#ass_oth').change(function(){
  if(this.checked){
    $('#ass_oth').val('Y');
    $("#ass_oth_spec").removeAttr("disabled");
  }
  else
    $('#ass_oth').val('N');
});



$("#ass_owned").click(function(){
  if($(this).is(":checked")){
    $("#ass_owned").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ass_owned").val("N");

  }
});

$("#ass_rent").click(function(){
  if($(this).is(":checked")){
    $("#ass_rent").val("Y");
    
    
  }
  else if($(this).is(":not(:checked)")){
    $("#ass_rent").val("N");

  }
});

$("#ass_shared").click(function(){
  if($(this).is(":checked")){
    $("#ass_shared").val("Y");
    
  }
  else if($(this).is(":not(:checked)")){
    $("#ass_shared").val("N");

  }
});

$("#ass_ins").click(function(){
  if($(this).is(":checked")){
    $("#ass_ins").val("Y");
  }
  else if($(this).is(":not(:checked)")){
    $("#ass_ins").val("N");

  }
});

$("#ass_home").click(function(){
  if($(this).is(":checked")){
    $("#ass_home").val("Y");
    
    
  }
  else if($(this).is(":not(:checked)")){
    $("#ass_home").val("N");

  }
});

            //////////////////////////////////

            $("#ass_PhilDirect").click(function(){
              if($(this).is(":checked")){
                $("#ass_PhilDirect").val("Y");
                $("#ass_PhilIndirect").prop( "disabled", true );
                
                
              }
              else if($(this).is(":not(:checked)")){
                $("#ass_PhilDirect").val("N");
                $("#ass_PhilIndirect").prop( "disabled", false );


              }
            });


            $("#ass_PhilIndirect").click(function(){
              if($(this).is(":checked")){
                $("#ass_PhilIndirect").val("Y");
                $("#ass_PhilDirect").prop( "disabled", true );
                
                
              }
              else if($(this).is(":not(:checked)")){
                $("#ass_PhilIndirect").val("N");
                $("#ass_PhilDirect").prop( "disabled", false );


              }
            });

            $('#ass_senior').change(function(){
              if(this.checked)
                $('#ass_senior').val('Y');
              else
                $('#ass_senior').val('N');
            });

            $('#ass_brgy').change(function(){
              if(this.checked)
                $('#ass_brgy').val('Y');
              else
                $('#ass_brgy').val('N');
            });

            $('#ass_bhw').change(function(){
              if(this.checked)
                $('#ass_bhw').val('Y');
              else
                $('#ass_bhw').val('N');
            });

            $('#ass_pwd').change(function(){
              if(this.checked)
                $('#ass_pwd').val('Y');
              else
                $('#ass_pwd').val('N');
            });

            $('#ass_indig').change(function(){
              if(this.checked)
                $('#ass_indig').val('Y');
              else
                $('#ass_indig').val('N');
            });

            $('#ass_elec').change(function(){
              if(this.checked)
                $('#ass_elec').val('Y');
              else
                $('#ass_elec').val('N');
            });

            $('#ass_candle').change(function(){
              if(this.checked)
                $('#ass_candle').val('Y');
              else
                $('#ass_candle').val('N');
            });

            $('#ass_keros').change(function(){
              if(this.checked)
                $('#ass_keros').val('Y');
              else
                $('#ass_keros').val('N');
            });
            

            $('#ass_gas').change(function(){
              if(this.checked)
                $('#ass_gas').val('Y');
              else
                $('#ass_gas').val('N');
            });


            $('#ass_fire').change(function(){
              if(this.checked)
                $('#ass_fire').val('Y');
              else
                $('#ass_fire').val('N');
            });

            $('#ass_char').change(function(){
              if(this.checked)
                $('#ass_char').val('Y');
              else
                $('#ass_char').val('N');
            });   
            

            $('#ass_arte').click(function() {

             if($('input[id="ass_arte"]').is(':checked')){
              $('#ass_arte').val('Y');
              $("input.artwell").removeAttr("disabled");
            }
            

            else if($('input[id="ass_arte"]').is(':unchecked')){
              $("#ass_arte").val("N");

              $("input.artwell").attr("disabled", true);
              $("input.artwell").prop("checked", false);
              $("input.artwell").val("N");

              
            }

          });


            $('#ass_watdis').click(function() {

             if($('input[id="ass_watdis"]').is(':checked')){
              $('#ass_watdis').val('Y');  
            }
            
            else if($('input[id="ass_watdis"]').is(':unchecked')){
              $("#ass_watdis").val("N");
              
            }

          });

            
            $('#ass_watPublic').click(function() {

             if($('input[id="ass_watPublic"]').is(':checked')){
              $('#ass_watPublic').val('Y');

              $('#ass_watOwned').val('N');
              $("#ass_watOwned").attr("disabled", true);
              $("#ass_watOwned").prop("checked", false);
            }
            

            else if($('input[id="ass_watPublic"]').is(':unchecked')){
              $("#ass_watPublic").val("N");
              $("#ass_watOwned").removeAttr("disabled");
              
            }

          });

            $('#ass_watOwned').click(function() {

             if($('input[id="ass_watOwned"]').is(':checked')){
              $('#ass_watOwned').val('Y');

              $('#ass_watPublic').val('N');
              $("#ass_watPublic").attr("disabled", true);
              $("#ass_watPublic").prop("checked", false);
            }
            

            else if($('input[id="ass_watOwned"]').is(':unchecked')){
              $("#ass_watOwned").val("N");
              $("#ass_watPublic").removeAttr("disabled");
              
            }

          });

//end 1st -step



$('#ass_IOE').change(function(){
  if(this.checked)
    $('#ass_IOE').val('Y');
  else
    $('#ass_IOE').val('N');
});

$('#ass_OldPat').change(function(){
  if(this.checked)
    $('#ass_OldPat').val('Y');
  else
    $('#ass_OldPat').val('N');
});

$('#ass_NewPat').change(function(){
  if(this.checked)
    $('#ass_NewPat').val('Y');
  else
    $('#ass_NewPat').val('N');
});

$('#ass_caseFor').change(function(){
  if(this.checked)
    $('#ass_caseFor').val('Y');
  else
    $('#ass_caseFor').val('N');
});

$('#ass_closedCase').change(function(){
  if(this.checked)
    $('#ass_closedCase').val('Y');
  else
    $('#ass_closedCase').val('N');
});

  //hidden in 1st step 
  //step 3


$("#all_parent_tsi").change(function (e) {

  $(".socialinter").val($("#all_parent_tsi").val());

});


$("#all_parent_si").change(function (e) {

  $(".sevindex").val($("#all_parent_si").val());

});

$("#all_parent_di").change(function (e) {

  $(".durabindex").val($("#all_parent_di").val());

});

$("#all_parent_ci").change(function (e) {

  $(".copindex").val($("#all_parent_ci").val());

});
//

//step 4
$("#all_prob_si").change(function (e) {

  $(".probsevere").val($("#all_prob_si").val());

});
$("#all_prob_di").change(function (e) {

  $(".probdura").val($("#all_prob_di").val());

});

  

  $('.categ').click(function() {
    $('.categ').not(this).prop('checked', false);
  });

  $("#ass_watPublic").attr("disabled", true);
  $("#ass_watOwned").attr("disabled", true);
  


  $("#form-step-1").validate({
   rules: {
     source_refname:'required',
     
   },
   messages:{
     source_refname:'required',
     
   },
   
   errorElement: 'span',
   errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
    {
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-coreui-hidden-accessible'))
    {
     element=$("#sel" + element.attr("id") + "ul").parent();
     error.insertAfter(element.parent());
   }
   else 
   {
    error.insertAfter(element);
  }
},

highlight: function highlight(element) {
  
  $(element).addClass('is-invalid').removeClass('is-valid');
  if( $(element).hasClass('select2-offscreen'))
  {
    element=$("#s2id_" + element.attr("id") + " ul").parent();
    $(element).addClass('is-invalid').removeClass('is-valid');
  }
},

unhighlight: function unhighlight(element) {
  $(element).addClass('is-valid').removeClass('is-invalid');
  if( $(element).hasClass('select2-offscreen'))
  {
   $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
 }
}  
});

  

  $("#form-step-4").validate({
   rules: {
     prob_fan_lackreg_si:'required',
     prob_fan_lackreg_di:'required',
   },
   messages:{
     prob_fan_lackreg_si: 'required!',
     prob_fan_lackreg_di:'required',

   },
   
   errorElement: 'span',
   errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
    {
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-coreui-hidden-accessible'))
    {
      element=$("#sel" + element.attr("id") + "ul").parent();
      error.insertAfter(element.parent());
    }
    else 
    {
      error.insertAfter(element);
    }
  },

  highlight: function highlight(element) {
   
    $(element).addClass('is-invalid').removeClass('is-valid');
    if( $(element).hasClass('select2-offscreen'))
    {
      element=$("#s2id_" + element.attr("id") + " ul").parent();
      $(element).addClass('is-invalid').removeClass('is-valid');
    }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
    if( $(element).hasClass('select2-offscreen'))
    {
     $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
   }
 }	 
});