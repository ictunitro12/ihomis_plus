	
  function availableList()
	{	
		var data = new Object();
		data.id = "availStatus";
		data.link = baseURL+"Laboratory/availabilityList/";
		data.type = "POST";
		data.coldef =[
		{
			targets:["_all"],
			className:'align-middle'
		}
		,{	
			targets: [3],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<div class="p-2 bg-success text-white text-center"><i class="fa fa-check"></i>&nbsp ACTIVE</div>'; break;
					case 'I' : return '<div class="p-2 bg-danger text-white text-center"><i class="fa fa-remove"></i>&nbsp INACTIVE</div>'; break;
					default  : return 'NONE';
				}
			},
		}];
	var avail=loadTable(data);
	
  
  avail.on('click' ,'#btnChangeStat', function(){
	 var proccode = atob($(this).attr('data-proccode'));
	 var status = atob($(this).attr('data-status'));
	 if(status=='A')
	 {
		$('#status').val('I');
		$('#proccode').val(proccode);
		$('#message').text('You want to deactivate this?');
		$('#title').text('Deactivate?').addClass('text text-danger');
		$('#content').removeClass('card-accent-success').addClass('card-accent-danger');
	 }else if(status=='I'){
		$('#status').val('A');
		$('#proccode').val(proccode);
		$('#message').text('You want to activate this?');
		$('#title').text('Activate?').addClass('text text-success');
		$('#content').removeClass('card-accent-danger').addClass('card-accent-success');
	 }else{
		$('#status').val('A');
		$('#proccode').val(proccode);
		$('#message').text('You want to activate this?');
		$('#title').text('Activate?').addClass('text text-success');
		$('#content').removeClass('card-accent-danger').addClass('card-accent-default');
	 }
	$('#modalChangeStatus').modal('show');
  });
  
	$('#frmChangeStatus').on('submit', function(e){
		$.ajax({
		type : "POST",
		url  : baseURL+"Laboratory/changeStatus",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#modalChangeStatus').modal('hide');
			avail.ajax.reload();
			toastr.success('Status Sucessfully Change! ' ,'Success');
		},
		error: function(xhr, desc, err){
			toastr.error('Error on saving ' ,xhr);
		}
		});
		return false;
   });
}