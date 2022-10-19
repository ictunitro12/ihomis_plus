function docOrdexam(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrdexam";
		data.link =  baseURL+"DoctorsOrder/Examination/"+enctr;
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
	$('#frmDischarg').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/saveExamOrder",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$('#DocOrdExamModal').modal('hide');
					docOrdexam($('#procEnccode').val());
					toastr.success('Order Successfully Saved! ' ,'Success');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
	
	function addExam(enccode,hpercode)
	{
		var form =$("#frmProc");
		$('#DocOrdExamModal').modal('show');	
		$('#procformIden').val("insert");
		$('#dateOrd').val(getTimeLocale());
		$('#datePost').val(getTimeLocale());
		$('#procEnccode').val(atob(enccode));	 
		$('#procHpercode').val(atob(hpercode));	 
		selDoctor(form);
		SelEmp();
		selExamlist(0);
	}
	
	function editExam()
	{
		
	}
	
	function deleteExam()
	{
		
	}
	
	