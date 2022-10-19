	function initResultList(enccode,hpercode)
	{
		PatientData(hpercode);
		PatientDemographics(hpercode);
		CaseInformation(enccode);
		resultList(enccode);
		_tabResults(enccode);
	}

	function _tabResults(enccode)
	{
		$('a[data-toggle="tab"]').on('click', function (e){
		var tab = e.target.id;
			switch(tab) {
			  case "home-tab":
					resultList(enccode);
				break;
			  case "pres-tab":
					prescResult(enccode);
				break;
			  case "histo-tab":
					History(enccode);
				break;
			  case "phyexam-tab":
					Physical(enccode);
				break;
			  case "system-tab":
					systemReview(enccode);
				break;
			  case "diag-tab":
					Diagnosis(enccode);
				break;
			  case "doctor-tab":
					Doctor(enccode);
				break;
			  default:
				break;
			}
		});
	}
	
	function resultList(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));	
		var data = new Object();
		data.id = "examList";
		data.link = baseURL+"Nurse/resultList/"+enctr;
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,2],
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
		{	
			targets: [6,7],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'LABOR' : return '<div class="text-success"><i class="fa fa-flask"></i>LABORATORY</div>'; break;
					case 'RADIO' : return '<div class="text-success"><i class="fa fa-check"></i>RADIOLOGY</div>'; break;
					case 'S' : return '<div class="text-success"><i class="fa fa-check"></i>SERVED</div>'; break;
					case 'P' : return '<div class="text-success"><i class="fa fa-check"></i>PARTIAL</div>'; break;
					default  : return '<div class="text-warning"><i class="fa fa-exclamation"></i>PENDING</div>';
				}
			},
		}];
		
	
		loadTable(data);
	}
	
	function prescResult(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));	
		var data = new Object();
		data.id = "prescList";
		data.link = baseURL+"Nurse/prescResult/"+enctr;
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1,2],
			visible:false,
			orderable:false,
		},
		{	
			targets: [7],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'S' : return '<div class="text-success"><i class="fa fa-check"></i>SERVED</div>'; break;
					case 'P' : return '<div class="text-success"><i class="fa fa-check"></i>PARTIAL</div>'; break;
					default  : return '<div class="text-warning"><i class="fa fa-exclamation"></i>PARTIAL</div>';
				}
			},
		}];

	data.order= [ 3, 'DESC' ];
	loadTableAdv(data);
	}