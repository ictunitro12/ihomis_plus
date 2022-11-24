function orderDiet(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrddiet";
		data.link =  baseURL+"DoctorsOrder/orderExamination/"+enctr;
		data.type = "POST";
		data.coldef =[
				{
				targets: [0,1],
				visible:false,
				orderable:false,
				},
					{
					targets : [4],
					searchable:false,
						render: function ( data, type, row ) 
						{
							switch(data) 
							{
								case 'STAT' : return '<div class="text-danger">URGENT</span>'; break;
								case 'ROUTIN' : return '<div class="text-warning">ROUTINE</span>'; break;
								case 'UNKNO' : return '<div class="text-primary">UNKNOWN</span>'; break;
								default  : return '<div class="text-default"></span>';
							}
						},
					},
					];
		loadTable(data);
	}
	
	/*[Doctors Order] (Procedure  Examination)*/
	$('#frmDietOrder').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/saveDietary",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$('#DocOrdDietModal').modal('hide');
					
					toastr.success('Order Successfully Saved! ' ,'Success');
					$("#docOrdDiet").DataTable().ajax.reload();
					orderDiet($('#procEnccode').val());
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
	
	$("#btnAddDiet").on('click',function(){
		var form =$("#frmDietOrder");
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		SelDiet();
		$('#DocOrdDietModal').modal('show');	
		$('#dateDietOrd').val(getTimeLocale());
		$('#dateDietPost').val(getTimeLocale());
		$('#dietformIden').val("insert");
		$('#dietEnccode').val((enccode));	 
		$('#dietHpercode').val((hpercode));	 
		selDoctor(form);
		SelEmployees();		
	});
		
	
	function editExam()
	{
		
	}
	
	function deleteExam()
	{
		
	}
	
/* 	$('#selDiet').select2({
		theme: 'coreui',
		placeholder: 'Select Diet',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "Ref_Diet/dietaryList",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchDepartment: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.deptcode,
						text: item.deptname
					});
				});
				return {
					results: results
				}
			}
		}
	}); */
	$('#selDepartment').on('change', function () {
		var data = $("#selDepartment option:selected", this);
		var rmcode = $("#selDepartment").val(this.value);
	});

	function setDoctor(licno)
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
	selDoctor($('#frmDietOrder'));
}

	$("#docOrdDiet").on("click", ".ModalEditDiet", function () {
		var data = $(this).data();
		var dodate = (data['dodate']);
		var dotime = (data['dotime']);
		var licno = (data['licno']);
		var dietcode = (data['dietcode']);
		var enccode = (data['enccode']);
		var hpercode= (data['hpercode']);
		var docointkey = (data['docointkey']);
		var verby = (data['verby']);

		console.log(data);
	
		$('#dietformIden').val('update');
		$('#DocOrdDietModal').modal({ backdrop: 'static' }).draggable({});
		
		$("#dateDietOrd").val(dodate);
		$("#dateDietPost").val(dotime);
		$("#docointkey").val(docointkey);
		$("#dietEnccode").val(enccode);
		$("#dietHpercode").val(hpercode);
		setDoctor(licno);
		setDiet(dietcode);
		setEmployees(verby);
	});

	$('#docOrdDiet').on('click','.ModalDeleteDiet',function(){
		$('#DeleteDiet').modal('show');
		var key=$(this).data('docointkey');
		var diet=$(this).data('dietdesc');
		$('#deletekey').val(key);
		$('#dietformIden').val('delete');
		/* $('#diet').text(diet); */
	});

	$('#frmDeleteDiet').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/deleteDiet",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$('#DeleteDiet').modal('hide');
					toastr.success('Order Successfully Deleted!' ,'Success');
					$("#docOrdDiet").DataTable().ajax.reload();
					orderDiet($('#procEnccode').val());
					
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
	});