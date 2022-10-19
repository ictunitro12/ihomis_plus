function schedules(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		data.id = "sched";
		data.link = baseURL+"Opera/Schedules/"+enctr;
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1,2],
				visible:false,
				orderable:false,
			}
			
		],
		loadTable(data);
	}