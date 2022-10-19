function DiabetesList()
{
	var data = new Object();
	data.id = "DiabetesTable";
	data.link = baseURL+"Diabetes/DiabetesList";
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

$("#DiabetesTable").on("click",".ModalDeleteDiabetes",function(){
	var data = $(this).data();
	console.log(data);
	$('#DeleteDiabetes').modal('show');
	$("#formIdentification").val('delete');
	var enccode=atob(data['enccode']);

	$("#deletecode").val(enccode);

});

$("#DiabetesTable").on("click",".ModalDiabetes",function(){
	var base_url= $('#base_url').val();
	var data = $(this).data();
	console.log(data);
	$('#ModalDiabetes').modal('show');
	var enccode= atob(data['enccode']);
	enccode = encodeURIComponent(encodeURIComponent(enccode));
	$("#code").val(enccode);
	$('#DiabetesPDF').html('<embed src="'+base_url+"Diabetes/DiabetesForm/"+enccode+'" frameborder="2" width="100%" height="800px" id="DiabetesPDF">');	
});

$('#DiabetesTable').on('click','.ModalPatientInfo',function(){
	
	$('#ModalPatientInfo').modal('show');
	var enccode=atob($(this).data('enccode'));
	var enctr = encodeURIComponent(encodeURIComponent(enccode));

	var obj=DiabetesPatientInfo(enctr);
	console.log(obj);

	$("#patname").text(obj['patient']);
	$("#hpercode").text(obj['h_patient_id']);
	$("#patsex").text((obj['sexx']));
	$("#patbdate").text(obj['birthday']);;
	$("#civilstat").text(obj['patcstat']);

	$("#consultdte").text(obj['consult_date']);
	$("#dtediag").text(obj['diagnosis_date']);


/*
	
		$("#patname").text(obj['patlast'].concat(" ",obj['patmiddle']," ",obj['patlast']));
		$("#patsex").text((obj['patsex']));
		$("#patbdate").text(obj['patbdate']);;
		$("#civilstat").text(obj['stat_code']);
		$("#consultdte").text(obj['consult_date']);
		$("#dtediag").text(obj['date_diagnosis']);
		$("#type_diabet").text(obj['diab_code']);
		$("#other_type").text(obj['diab_others_specify']);
		$("#med").text(obj['trt_nutri']);
		$("#med_1").text(obj['mnt_w_educ']);
		$("#med_2").text(obj['mnt_wn_educ']);
		$("#comply").text(obj['mnt_compliance']);*/
		
	});