function Doctor(enccode) {
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	var data = new Object();
	data.id = "doctorList";
	data.link = baseURL+"PatientRecords/Doctorspatient/"+enctr;
	data.type = "POST";
/* 	data.paging = false; */
	data.coldef = [
	{
		targets: [0, 1,3],
		visible: false,
	},
	{	
		targets : 5,
		searchable:false,
		render: function ( data, type, row ) 
		{
			switch(data) 
			{
				case 'ATTEN' : return '<div class="text-success">ATTENDING</span>'; break;
				case 'CONSU' : return '<div class="text-success">CONSULTING</span>'; break;
				case 'ADMIT' : return '<div class="text-success">ADMITTING</span>'; break;
				default  : return '<div class="text-default"></span>';
			}
		},
	}
	];
	loadTable(data);
}

function addDoctor(enccode,hpercode)
{

	$('#doctorsModal').modal('show');	
	$('#docformIden').val("insert");
	$('#docEnccode').val(atob(enccode));	 
	$('#docHpercode').val(atob(hpercode));
	$('#docTime').val(getTimeLocale());
	selDoctor($("#frmDoctor"));
}

$('#doctorList').on('click','#btnEditdoc',function(){
	$('#doctorsModal').modal('show');
	var enccode=atob($(this).data('enccode'));
	var licno=atob($(this).data('licno'));
	var hpercode=atob($(this).data('hpercode'));
	var type=atob($(this).data('doctype'));
	/* var time=atob($(this).data('acodatemod')); */
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
	setDoc(licno);
	$("#up_doc_doc").val(licno);
	$("#up_doctype").val(type);
	$("#docEnccode").val(enccode);
	$("#docHpercode").val(hpercode);
/* 	$("#doctype option[value="+type+ "").prop('selected', true); */
	$('#doctype option[value="' + type + '"]').prop("selected", true);
	$("#docformIden").val('update');
	selDoctor($("#frmDoctor"));
	/* $("#docTime").val(setTimeLocale(time)); */
	
});

$('#doctorList').on('click','#btnDeletedoc',function(){	
	var enccode=atob($(this).data('enccode'));
	var doctype=atob($(this).data('doctype'));
	var licno=atob($(this).data('licno'));
	$('#deleteDoctorModal').modal('show');
	$("#del_docEnccode").val(enccode);
	$("#del_doctype").val(doctype);
	$("#del_doc").val(licno);
	$("#docformIdenDelete").val("delete");
});

function setDoc(licno)
{
	var selTos = 	$('[name $="_doc"]');
	selTos.prop('readonly', true);
	$.ajax({
		type: 'POST',
		url: baseURL+'/PatientRecords/setDoctor/'+licno,
	}).then(function (data) {
		var obj=$.parseJSON(data);
		var option = new Option(obj['name'], obj['licno'], true, true);
		selTos.append(option).trigger('change');
		selTos.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
	selDoctor($('#frmDiagnosis'));
}

$('#doctorList').on('click','#btnDeleteVitals',function(){

	var enccode=atob($(this).data('enccode'));
	var datelog=atob($(this).data('datelog'));
	var now= new Date();
	var LogDate=new Date(datelog);
	var val =new Date(LogDate.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
	$("#deleteVitalModal").modal('show');
	$("#delvitalenccode").val(enccode);
	$("#delvitaldatelog").val(datelog);
	$("#vsformIden").val("delete");
});

$('#frmDoctor').validate({
	submitHandler: function (form) {
		var  POSTURL = baseURL+"PatientRecords/saveDoctor";
		$.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#docformIden').val()=='insert'){
					toastr.success('Doctor Successfully Saved! ' ,'Success');
					$("#doctorsModal").modal('hide');
					Doctor(enccode);
				}else if($('#docformIden').val()=='update'){
					toastr.success('Doctor Updated! ' ,'Success');
					$("#doctorsModal").modal('hide');
					Doctor(enccode);
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
		doc_doc:'required',
		doctype:'required',
	},	
	messages: {
		doc_doc: 'Doctor is required!',
		doctype: 'Select type!'
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


$('#frmDeleteDoctor').on('submit', function(e){
	var form = this;
	$.ajax({
		type : "POST",
		url  : baseURL+"PatientRecords/saveDoctor",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			toastr.success('Successfully Deleted! ' ,'Success');
			$('#deleteDoctorModal').modal('hide');
			Doctor(enccode);
		},

		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
	});
	return false;
}); 




