var Module=$('#module').val();

	function initOpera(enccode,hpercode)
	{
	
		PatientData(hpercode);
		CaseInformation(enccode);
		schedules(enccode);
		_tabOpera(enccode,hpercode);
	}
	
	function _tabOpera(enccode,hpercode)
	{
		$('a[data-toggle="tab"]').on('click', function (e){
			var tab = e.target.id;
				switch(tab) 
				{
				  case "sched-tab":
					schedules(enccode);
					break;
				  case "result-tab":
					Discounts(enccode,hpercode);
					break;
				  default:
				}
			});
	}
	
	$('#btnPatientSearch').on('click', function (){
		$.session.remove('Operaenccode'); 
		$.session.remove('Operahpercode'); 
		location.reload();
	});
	
	
	
	

	

	
	