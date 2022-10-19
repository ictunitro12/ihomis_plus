////////////////////////////Nicette Ocampo  updated - 09/27/2022////////////////////////////
function ChronicList()
{
	var data = new Object();
	data.id = "ChronicTable";
	data.link = baseURL+"Chronic/ChronicList";
	data.type = "POST";
	data.coldef =[
	{
		targets: [0],
		visible:false,
		searchable:true,
	}
	];
	
	loadTable(data);
}

$("#ChronicTable").on("click",".ModalDeleteChronic",function(){
	var data = $(this).data();
	console.log(data);
	$('#DeleteChronic').modal('show');
	$("#formIdentification").val('delete');
	var enccode = atob(data['enccode']);
	$("#deletecode").val(enccode);

});

$("#ChronicTable").on("click",".ModalChronic",function(){
	var base_url= $('#base_url').val();
	var data = $(this).data();

	$('#ModalChronic').modal('show');
	var enccode= atob(data['enccode']);
	var hpercode= atob(data['h_patient_id']);
	console.log(hpercode);

	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$("#code").val(enccode);
	$("#percode").val(hpercode);
	$('#chronicPDF').html('<embed src="'+base_url+"Chronic/ChronicForm/"+enccode+ "/" + hpercode+'" frameborder="2" width="100%" height="800px" id="chronicPDF">');

});

$('#ChronicTable').on('click','.ModalPatientInfo',function(){
	
	$('#ModalPatientInfo').modal('show');

	var code=$(this).data('enccode');
	var enccode = encodeURIComponent(encodeURIComponent(atob(code)));
	console.log(enccode);

	var obj=ChronicPatientInformation(enccode);
	console.log(obj);
	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);
	$("#copd_type").text(obj['copd_type_code']);
	$("#copd_type_oth").text(obj['copd_others_specify']);

	$("#consultdte").text(obj['consult_date']);
	$("#dtediag").text(obj['diagnosis_date']);

});


function ChronicPatientInformation(enccode) {
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Chronic/ChronicPatientInformation/" + enccode,
		data: "JSON",
		async: false,
		success: function (data) {
			obj = $.parseJSON(data);
		},
		error: function (data) {
			toastr.error('Error:' + ' ' + data.status + ' ' + data.statusText);
		}
	});
	return obj;
}
