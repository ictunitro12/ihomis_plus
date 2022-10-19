function statusTo()
	{
		var data = new Object();
		data.id = "statusTable";
		data.link = baseURL+"Referral/statusTo";
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,7,8,9,10],
			orderable:false,
			visible:false
		},
		{	
			targets: [6],
			searchable:false,
			orderable:false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'NOEQP' : return 'No equipment available'; break;
					case 'NODOC' : return 'No available doctor'; break;
					case 'NOPRO' : return 'No procedure available'; break;
					case 'NOLAB' : return 'No laboratory available'; break;
					case 'NOROM' : return 'No room available'; break;
					case 'SEASO' : return 'Seek advise/second opiniion'; break;
					case 'SESPE' : return 'Seek specialized evaluation'; break;
					case 'SEFTA' : return 'Seek futher treatment appropriate to the case'; break;
					case 'DOCTO' : return 'Doctor'; break;
					case 'POLIT' : return 'Politician'; break;
					case 'NDOCT' : return 'Non-Medical'; break;
					case 'AGENC' : return 'Hospital or Agency'; break;
					default  : return 'N/A';
				}
			},
		}
		];
		loadTable(data);
	}

	$("#statusTable").on('click',"#",function(){


	});