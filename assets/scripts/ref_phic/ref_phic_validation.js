var baseURL=$('#base_url').val();


	$("#PHICTable").on("click",".ModalDeletePHIC",function(){
		var data = $(this).data();
		$('#DeletePHIC').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIdentification").val('delete');
		$("#deletecode").val(data['hphcode']);


	});

		$("#PHICTable").on("click",".ModalEditPHIC",function(){
		var data = $(this).data();
		var obj  = getPHIC(data['hphcode']);
		console.log(obj);
		
		$('#ModalAddPHIC').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('update');
		$("#code").prop('readonly', true);

		$("#code").val(obj['hphcode']);
		$("#bentype").val(obj['bentycod']);
		$("#hosptype").val(obj['htypcode']);
		$("#castype").val(obj['hphcbcode']);
		$("#classtype").val(obj['hphclscode']);
		$("#sectype").val(obj['hphsector']);
		$("#amt").val(obj['amount']);
		$("#minrvu").val(obj['minrvu']);
		$("#maxrvu").val(obj['maxrvu']);
		
		var dates = obj['hptdteas'];
		var dateasof = ((dates == "1970-01-01 00:00:00") || (dates == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dates);
		$("#dteasof").val(dateasof);

		$("#status").val(obj['phicstat']);

	});

		function AddPHIC(){
		$('#ModalAddPHIC').modal({ backdrop: 'static'}).draggable({});	;
		$("#formIden").val('insert');
		$("#dteasof").val(getTimeLocale());
		$("#code").prop('readonly', false);

		}

		function getPHIC(hphcode){
			var hphcode = encodeURIComponent(encodeURIComponent(hphcode));
        $.ajax({
            type: "POST",
            url: baseURL+"Ref_PHIC/getPHIC/"+ hphcode,
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
$('#frmPHIC').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"Ref_PHIC/savePHIC";
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
					$('#ModalAddPHIC').modal('hide');
					 PHICList();     
				}
				else if($('#formIden').val()=='update')
				{
		          toastr.success('Successfully Updated! ' ,'Success');
		          $('#ModalAddPHIC').modal('hide');
 				  PHICList();     
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

