function CancerList()
{
	var data = new Object();
	data.id = "CancerTable";
	data.link = baseURL+"Cancer/CancerList";
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

$("#CancerTable").on("click",".ModalDeleteCancer",function(){
	var data = $(this).data();
	console.log(data);
	var enccode = atob(data['enccode']);
	$('#DeleteCancer').modal('show');
	$("#formIdentification").val('delete');
	$("#deletecode").val(enccode);

});

$("#CancerTable").on("click",".ModalCancer",function(){
	var base_url= $('#base_url').val();
	var data = $(this).data();

	$('#ModalCancer').modal('show');
	var enccode= atob(data['enccode']);
	var hpercode= atob(data['h_patient_id']);
	console.log(hpercode);

	enccode = encodeURIComponent(encodeURIComponent(enccode));
	hpercode = encodeURIComponent(encodeURIComponent(hpercode));

	$("#code").val(enccode);
	$("#percode").val(hpercode);
	$('#CancerPDF').html('<embed src="'+base_url+"Cancer/CancerForm/"+enccode+ "/" + hpercode+'" frameborder="2" width="100%" height="800px" id="CancerPDF">');

});

$('#CancerTable').on('click','.ModalPatientInfo',function(){
	$('#ModalPatientInfo').modal('show');
	var enccode=atob($(this).data('enccode'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));

	var obj=CancerPatientInfo(enctr);
	console.log(obj);
	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);

	$("#consultdte").text(obj['consult_date']);
	$("#dtediag").text(obj['diagnosis_date']);


});
