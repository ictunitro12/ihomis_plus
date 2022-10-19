$("#Setup2Table").on("click",".ModalDeleteSetup2",function(){
  var data = $(this).data();
  console.log(data);
  $('#DeleteSetup2').modal({ backdrop: 'static'}).draggable({}); ;
  $("#formIdentification").val('delete');
  $("#deletecode").val(data['code']);

});

function getSetup(code)
    {
      $.ajax({
        type: "POST",
        url: baseURL+"Ref_Setup2/getSetup2/"+code,
        async:false,
        success: function(data,status){ 
          obj = $.parseJSON(data);
          console.log(obj);
          var dateasof = setTimeLocale(obj['sudte']);
          var timeasof = setTimeLocale(obj['scuttime']);

          $("#dateasof").val(dateasof);
          $("#cutoffbillcomp").val(timeasof);

          $("#code").val(obj['sucode']);
          $("#currency").val(obj['curcode']);
          $("#pesounit").val(obj['spval']);
          $("#anesthesia").val(obj['anesper']);
          $("#roomnotexceed").val(obj['srbmax']);
          $("#roomnotexceeddependents").val(obj['srbmaxdep']);
          
          $("#incprofbill").val(obj['incpfee']);
          $("#incaddprofbill").val(obj['incapfee']);
          $("#civilpop").val(obj['civpopu']);
          $("#retpay").val(obj['retro']);
          $("#retamt").val(obj['retamt']);
          $("#sepprof").val(obj['sseppr']);
          $("#itemcharge").val(obj['sitmrm']);
          $("#dispnamedoc").val(obj['snmdoc']);
          $("#certcorby").val(obj['scerco']);
          $("#basisroomcomp").val(obj['sbasrm']);
          $("#aggbill").val(obj['saggreg']);

          $("#hospnoedit").val(obj['sureqid']);
          $("#dispoldhosp").val(obj['supercode']);
          $("#basisrateexam").val(obj['supatcode']);
          $("#maxdelphicomp").val(obj['maxdeliver']);
          $("#maxdelphiclaimnsd").val(obj['ratedeliver']);
          $("#maxdelphiclaimprof").val(obj['ratedeliverpf']);
          $("#gpmaxpf").val(obj['gpperday']);
          $("#specmaxpf").val(obj['spperday']);
          $("#gpclassd").val(obj['senamt']);
          $("#specclassd").val(obj['smaxsgee']);
          $("#picrep").val(obj['filepath']);
          $("#sequence").val(obj['seqind']);
          $("#ftpurl").val(obj['pdfftp']);
          $("#ftpshared").val(obj['pdfshared']);
          $("#ftpuser").val(obj['ftpuserid']);
          $("#ftppass").val(obj['ftppassword']);
          $("#phicsignatory").val(obj['authsign']);
          $("#phicdesignation").val(obj['designation']);  
        },
        error: function(data,status){
          alert(data);
        }
      });

    }

$("#Setup2Table").on("click",".ModalEditSetup2",function(){
  var data = $(this).data();

  $('#ModalAddSetup2').modal({ backdrop: 'static'}).draggable({}); ;
  $("#formIden").val('update');

  getSetup(data['code']);
  

});

function AddSetup2(){
  $('#ModalAddSetup2').modal({ backdrop: 'static'}).draggable({}); ;
  $("#formIden").val('insert');
}




$('#frmAddSetup2').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Ref_Setup2/saveSetup2";
      $.ajax({
      type : "POST",
      url  : POSTURL,
	  dataType: "JSON",
	  cache:false,
	  async:true,
      data: $(form).serialize(),
      success: function(data){
       
          toastr.success('Successfully Updated! ' ,'Success');
          $('#ModalAddSetup2').modal('hide');
          Setup2List();
	  },
      error: function(data){
		  
		  alert('asd');
        toastr.error('Error on saving!','Error');
      }
      });
    return false;
   $(form).submit();
   },
    rules: {
    code:'required',
    dateasof:'required',
    roomnotexceed:'required',
    roomnotexceeddependents:'required',
    cutoffbillcomp:'required',
    incprofbill:'required',
 
  
  },  
  messages: {
    code:'required!',
    dateasof:'required!',
    roomnotexceed:'required!',
    roomnotexceeddependents:'required!',
    cutoffbillcomp:'required!',
    incprofbill:'required!',
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox')
  {
      error.insertAfter(element.parent('label'));
    }else if(element.hasClass('select2-hidden-accessible'))
  {
   element=$("#selReg" + element.attr("id") + "ul").parent();

   error.insertAfter(element);
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

