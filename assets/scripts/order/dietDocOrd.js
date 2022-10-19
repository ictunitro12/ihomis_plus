function orderDiet(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrddiet";
		data.link =  baseURL+"DoctorsOrder/orderExamination/"+enctr;
		data.type = "POST";
		data.coldef =[
				{
				targets: 0,
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
					$('#DocOrdExamModal').modal('hide');
					orderDiet($('#procEnccode').val());
					toastr.success('Order Successfully Saved! ' ,'Success');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
	
	$("#btnAddDiet").on('click',function(){
		var form =$("#frmDietOrder");
		$('#DocOrdDietModal').modal('show');	
		$('#dateDietOrd').val(getTimeLocale());
		$('#dateDietPost').val(getTimeLocale());
		$('#dietformIden').val("insert");
		$('#dietEnccode').val(atob(enccode));	 
		$('#dietHpercode').val(atob(hpercode));	 
		selDoctor(form);
		selEmp();
	});
		
	
	function editExam()
	{
		
	}
	
	function deleteExam()
	{
		
	}
	
	$('#selDiet').select2({
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
	});
	$('#selDepartment').on('change', function () {
		var data = $("#selDepartment option:selected", this);
		var rmcode = $("#selDepartment").val(this.value);
	});