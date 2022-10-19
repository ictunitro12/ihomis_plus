$("#ProcedureTable").on("click",".ModalDeleteProcedures",function(){
      var data = $(this).data();
      $('#DeleteProcedures').modal({ backdrop: 'static'}).draggable({});	;
      $("#formIdentification").val('delete');
      var code = atob(data['proccode']);
      $("#deletecode").val(code);


    });

    $("#ProcedureTable").on("click",".ModalEditProcedures",function(){
      var data = $(this).data();
      var now= new Date();
      var proccode= atob(data['proccode']);
      var chrgcode= atob(data['prmapto']);
      var tempcode= atob(data['restemplate']);

      $('#ModalAddProcedures').modal({ backdrop: 'static'}).draggable({});	;
      $("#formIden").val('update');
      var obj = getProcedures(proccode);
      SelCharge();
      SelTemplate();
      setCharge(chrgcode);
      setTemplate(tempcode);
      $("#code").prop('readonly', true);

      $("#code").val(obj['proccode']);
      $("#name").val(obj['procdesc']);
      $("#rvu").val(obj['rvu']);
      $("#testresult").val(obj['procreslt']);
      $("#bentype").val(obj['altpcode']);
      $("#cost").val(obj['costcenter']);
      $("#ident").val(obj['priden']);
      $("#seclabgrp").val(obj['prsect']);
      $("#secdetail").val(obj['prdetsec']);
      $("#odosor").val(obj['prvfa']);
      $("#region").val(obj['prregn']);
      $("#extype").val(obj['prextyp']);
      $("#specialextype").val(obj['prspeco']);
      $("#operatype").val(obj['optycode']);
      $("#proctype").val(obj['protcode']);
      $("#note").val(obj['procrem']);
      $("#status").val(obj['procstat']);

      

    });

    function AddProcedures(){
      $('#ModalAddProcedures').modal({ backdrop: 'static'}).draggable({});	;
      $("#formIden").val('insert');
      SelCharge();
      SelTemplate();
      $("#code").prop('readonly', false);

    }

    function getProcedures(proccode,prmapto,restemplate){
      var proccode = encodeURIComponent(encodeURIComponent(proccode));
      var prmapto = encodeURIComponent(encodeURIComponent(prmapto));
      var restemplate = encodeURIComponent(encodeURIComponent(restemplate));
      $.ajax({
        type: "POST",
        url: baseURL+"Ref_Procedures/getProcedures/"+ proccode + "/"+prmapto+ "/" + restemplate  ,
        data: "JSON",
        async:false,
        success: function(data,status){ 
          obj = $.parseJSON(data);
        },
        error: function(data,status){
        }
      });
      return obj;
    }
    


var baseURL=$('#base_url').val();

$('#frmProcedures').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Ref_Procedures/saveProcedures";
$.ajax({
      type : "POST",
      url  : POSTURL,
      dataType: "JSON",
      cache:false,
      async:true,
      data: $(form).serialize(),
      success: function(data){
        if($('#formIden').val()=='insert')
        {
          toastr.success(' Successfully Saved! ' ,'Success');
          $('#ModalAddProcedures').modal('hide');
           ProceduresList();     
        }
        else if($('#formIden').val()=='update')
        {
              toastr.success('Successfully Updated! ' ,'Success');
              $('#ModalAddProcedures').modal('hide');
          ProceduresList();     
            }
      },
      error: function(data){
        toastr.error('Dont change the code!','Error');
      }
      });
    return false;
   $(form).submit();
   },
  rules: {
    code:'required',
    name:'required',
    status:'required',
  
  
  },  
  messages: {
  code:'Code is required!',
    name:'Description is required!',
    status:'Status is required',
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

