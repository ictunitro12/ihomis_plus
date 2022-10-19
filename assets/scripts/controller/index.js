var table= $("#ControllerTable");
	
	function ControllerList()
	{
		var data = new Object();
		data.id = "ControllerTable";
		data.link = baseURL+"Controller/ControllerList";
		data.type = "POST";
		data.coldef =[
		{
			targets: [0],
			visible:false,
			orderable:false,
		},
		{	
			targets: [2,3],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<i class="text text-success fa fa-check"></i>&nbsp <span class="text text-success">Active</span>'; break;
					case 'I' : return '<i class="text text-danger fa fa-remove"></i>&nbsp <span class="text text-danger">Inactive</span>'; break;
					case 'TRANS' : return '<i class="text text-success fa fa-share-alt"></i>&nbsp <span class="text text-success"> TRANSACTION</span>'; break;
					case 'REP' : return '<i class="text text-danger fa fa-files-o"></i>&nbsp <span class="text text-danger">REPORT </span>'; break;	
					case 'LIB' : return '<i class="text text-info fa fa-indent"></i>&nbsp <span class="text text-info">LIBRARY </span>'; break;
					case 'ADMIN' : return '<i class="text text-primary fa fa-cogs"></i>&nbsp <span class="text text-primary">SYSTEM ADMINISTRATION </span>'; break;
					default  : return 'N/A';
				}
			},
		}];
		loadTable(data);
	}
	

	table.on('click','.delete',function(){
     $.ajax({
        url: baseURL+'/Controller/Delete/'+$(this).data('id'),
      
      
        success: function(response){
          console.log(response.status);
			
				ControllerList();
           
        
        },
		error: function(data,textStatus,xhre)
		{
				console.log(xhre);
					toastr.error('<small>'+xhre+'</small>','Error!');
		}
     });
	});
	
	
