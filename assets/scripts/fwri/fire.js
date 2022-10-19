	function PatientLogList()
	{
	var data = new Object();
	data.id = "FWRITable";
	data.link = baseURL+"FWRI/FWRIList";
	data.type = "POST";
	data.coldef =[
	{
	targets: [0,1,2,3,4],
	visible:false,
	searchable:true,
	}
	];
	
	loadTable(data);
	}

	$("#FWRITable").on("click",".ModalDeleteFWRI",function(){
		var data = $(this).data();
		console.log(data);
		$('#DeleteFWRI').modal('show');
		$("#formIdentification").val('delete');
		var enccode = atob(data['enccode']);
		$("#deletecode").val(enccode);

	});

	$("#FWRITable").on("click",".ModalFWRI",function(){
		var base_url= $('#base_url').val();
		var data = $(this).data();
		
		$('#ModalFWRI').modal('show');
		var enccode= atob(data['enccode']);

		enccode = encodeURIComponent(encodeURIComponent(enccode));

		console.log(enccode);
		$("#code").val(enccode);
		$('#FWRIPDF').html('<embed src="'+base_url+"FWRI/FWRIForm/"+enccode+'" frameborder="2" width="100%" height="800px" id="StrokePDF">');

	});

	$('#FWRITable').on('click','.ModalPatientInfo',function(){
		$("#PatientPicInfo").prop('src', baseURL+'assets/img/avatars/none.png');

		$('#ModalPatientInfo').modal('show');
		var enccode=atob($(this).data('enccode'));
		enccode = encodeURIComponent(encodeURIComponent(enccode));
		var obj=FWRIPatientInfo(enccode);
		console.log(obj);
		$("#patname").text(obj['patlast'].concat(" ",obj['patmiddle']," ",obj['patlast']));
		$("#patsex").text((obj['patsex']));
		$("#bdate").text(obj['patbdate']);;

		$("#dteinjury").text(obj['injdate']);;
		$("#type_involve").text(obj['involve']);;
		$("#place_occur").text(obj['placeoccur']);;
		$("#place_occur_other").text(obj['place_of_occurence_others']);;
		$("#natinjury").text(obj['nature']);;
		 
	});