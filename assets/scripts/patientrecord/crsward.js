	/*
	function name :  BMI
	param : str|enccode 
	description :generate list of Body Mass Index
	*/
function crsWardList(enccode)
	{
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "courseTbl";
		data.link = baseURL+"PatientRecords/courseWardList/"+enctr;
		data.type = "POST";
		data.coldef =[
						{
                        "orderable": false, 
                        "targets": [0], 
                        "searchable":false,
                        "visible": false
						}
					];
		loadTable(data);
	}
	
	$('#courseTbl').on('click','#btnEditcrsWard',function(){
		$('#crsWardModal').modal('show');
		uppercase();
		var enccode=atob($(this).data('enccode'));
		var datelog=atob($(this).data('datelog'));
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var log = encodeURIComponent(encodeURIComponent(datelog));
		$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/courseWardInfo/"+enctr+'/'+log,
		data: "JSON",
		async:false,
		success: function(data)
		{
			var now= new Date();
			obj = $.parseJSON(data);
			$('#crsWrdformIden').val('update');
			$('#crsWrdDateLog').val(setTimeLocale(obj['dtetake']));
			$('#crsWrdEnccode').val(enccode);
			$('#crsWrdHpercode').val(hpercode);
			$('#crsWrdDesc').val(obj['crseward']);
		},
		error: function(data)
		{
			alert("Error: Fetching Patient BMI!");
		}
		});
	});
	


$('#frmcrsWard').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"PatientRecords/saveCourseWard";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#crsWrdformIden').val()=='insert'){
					$("#crsWardModal").modal('hide');
					toastr.success('Data successfully saved!' ,'Success');
					crsWardList(enccode);
				}else if($('#crsWrdformIden').val()=='update'){
					toastr.success('Data successfully updated!' ,'Success');
					$("#crsWardModal").modal('hide');
					crsWardList(enccode);
				}else if($('#crsWrdformIden').val()=='delete'){
					
				}else{
					toastr.error('no post','data');
				}

			},
			error: function(data,xhr,text){
			
				toastr.error(data,'data');
				toastr.error(xhr,'xhr');
				toastr.error(text,'text');
			}
			});
		return false;
	 $(form).submit();
   },
  rules: {
    crsWrdDateLog:'required',
    crsWrdDesc:'required'
  },	
  messages: {
	crsWrdDateLog: 'Enter Date log!',
	crsWrdDesc: 'Enter course in the ward!'
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');
      error.insertAfter(element);
    
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
   
   function addcrsWard(enccode,hpercode)
	{
		uppercase();
		 $('#crsWardModal').modal('show');	
		 $('#crsWrdformIden').val("insert");
		 $('#crsWrdDateLog').val(getTimeLocale());
		 $('#crsWrdEnccode').val(atob(enccode));	 
		 $('#crsWrdHpercode').val(atob(hpercode));		 		 
	}
	
	$('#courseTbl').on('click','#btnDeletecrsWard',function(){
		
		var enccode=atob($(this).data('enccode'));
		var datelog=atob($(this).data('datelog'));
		$("#deletecrsWrdModal").modal('show');
		$("#delcrsWrdEnccode").val(enccode);
		$("#delcrsWrddatelog").val(datelog);
		$("#crsWrdformIdenDelete").val("delete");
	});
	
	$('#frmDeletecrsWard').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"PatientRecords/saveCourseWard",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#deletecrsWrdModal').modal('hide');
			toastr.success('Successfully Deleted! ' ,'Success');
			crsWardList(enccode);
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
	
	