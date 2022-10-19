function PatientLogList()
	{
	var data = new Object();
	data.id = "OneissTable";
	data.link = baseURL+"Oneiss/InjuryList";
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

	$("#OneissTable").on("click",".ModalDeleteInjury",function(){
		var data = $(this).data();
		console.log(data);
		$('#DeleteInjury').modal('show');
		$("#formIdentification").val('delete');
		var enccode = atob(data['enccode']);
		$("#deletecode").val(enccode);

	});

	$("#OneissTable").on("click",".ModalInjury",function(){
		var base_url= $('#base_url').val();
		var data = $(this).data();
		console.log(data);
		$('#ModalInjury').modal('show');
		var enccode = atob(data['enccode']);
		enccode = encodeURIComponent(encodeURIComponent(enccode));
		$("#code").val(enccode);
		console.log(enccode);

		$('#InjuryPDF').html('<embed src="'+base_url+"Oneiss/OneissForm/"+enccode+'" frameborder="2" width="100%" height="800px" id="InjuryPDF">');
	});

	$('#OneissTable').on('click','.ModalPatientInfo',function(){

		$("#PatientPicInfo").prop('src', baseURL+'assets/img/avatars/none.png');
		$('#ModalPatientInfo').modal('show');
		var enccode=atob($(this).data('enccode'));
		enccode = encodeURIComponent(encodeURIComponent(enccode));
		var obj=InjuryPatientInfo(enccode);
		console.log(obj);

		$("#patname").text(obj['patlast'].concat(" ",obj['patmiddle']," ",obj['patlast']));
		$("#patsex").text((obj['patsex']));
		$("#birthdate").text(obj['birthdate']);
		$("#injurydate").text(obj['inj_date']);

		$("#place_occur").text(obj['poc_code']);
		$("#workoccur_other").text(obj['poc_wp_spec']);
		$("#occur_other").text(obj['poc_etc_spec']);
		
		 
	});
