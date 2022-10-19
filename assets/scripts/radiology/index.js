  function RadiologyList(type)
  {
		var data = new Object();
		data.id = "radiologyTable";
		data.link = baseURL+"Radiology/RadiologyList/"+type;
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1,2],
			visible:false,
			orderable:false,
		},
		{	
			targets: [10],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<div class="text-success"><i class="fa fa-check"></i>&nbsp ACTIVE</div>'; break;
					case 'I' : return '<div class="text-danger"><i class="fa fa-remove"></i>&nbsp INACTIVE</div>'; break;
					default  : return 'NONE';
				}
			},
		}];
		loadTable(data);
  }
    
	function _type()
	{
		var type= $('#selType').val();
		RadiologyList(type);
		
	}

	
	
	
  