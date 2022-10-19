function StrokeList()
{
	var data = new Object();
	data.id = "StrokeTable";
	data.link = baseURL+"Stroke/StrokeList";
	data.type = "POST";
	data.coldef =[
	{
		targets: [0,],
		visible:false,
		searchable:true,
	}
	];
	
	loadTable(data);
}

$("#StrokeTable").on("click",".ModalDeleteStroke",function(){
	var data = $(this).data();
	console.log(data);
	var enccode = atob(data['enccode']);
	$('#DeleteStroke').modal('show');
	$("#formIdentification").val('delete');
	$("#deletecode").val(enccode);
});

$("#StrokeTable").on("click",".ModalStroke",function(){
	var base_url= $('#base_url').val();
	var data = $(this).data();
	console.log(data);
	$('#ModalStroke').modal('show');
	var enccode= atob(data['enccode']);

	enccode = encodeURIComponent(encodeURIComponent(enccode));
	$("#code").val(enccode);
	$('#StrokePDF').html('<embed src="'+base_url+"Stroke/StrokeForm/"+enccode+'" frameborder="2" width="100%" height="800px" id="StrokePDF">');
});

$('#StrokeTable').on('click','.ModalPatientInfo',function(){
	$('#ModalPatientInfo').modal('show');
	var enccode=atob($(this).data('enccode'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));

	var obj=StrokePatientInfo(enctr);
	console.log(obj);
	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);

	$("#consultdte").text(obj['consult_date']);
	$("#dtediag").text(obj['diagnosis_date']);
	$("#type_stroke").text(obj['stroke_type_code']);
});
