
function CADList()
{
	var data = new Object();
	data.id = "CadTable";
	data.link = baseURL+"CAD/CADList";
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

$("#CadTable").on("click",".ModalDeleteCAD",function(){
	var data = $(this).data();
	console.log(data);
	var code= data['enccode'];
	var enccode = atob(code);
	$('#DeleteCad').modal('show');
	$("#formIdentification").val('delete');
	$("#deletecode").val(enccode);

});

$("#CadTable").on("click",".ModalCAD",function(){
	var base_url= $('#base_url').val();
	var data = $(this).data();

	$('#ModalCad').modal('show');
	var enccode= atob(data['enccode']);
	var hpercode= atob(data['h_patient_id']);
	console.log(hpercode);

	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$("#code").val(enccode);
	$("#percode").val(hpercode);
	$('#CadPDF').html('<embed src="'+base_url+"CAD/CADForm/"+enccode+ "/" + hpercode+'" frameborder="2" width="100%" height="800px" id="CadPDF">');
});

$('#CadTable').on('click','.ModalPatientInfo',function(){
	$('#ModalPatientInfo').modal('show');
	var enccode=atob($(this).data('enccode'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));

	var obj=CadPatientInfo(enctr);
	console.log(obj);
	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);

	$("#consultdte").text(obj['consult_date']);
	$("#dtediag").text(obj['diagnosis_date']);
	$("#findag").text(obj['final_diagnosis']);
});

function CadPatientInfo(enccode) {
	
	var obj = "";
	$.ajax({
		type: "POST",
		url: baseURL + "Cad/CadPatientInformation/" + enccode,
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
