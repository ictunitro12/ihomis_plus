	
	function nopatient()
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+'Dashboards/noPatient';
		Obj.data = "JSON";
		var resp=Information(Obj);
		 if(resp){
			 $("#nopatients").text(resp);
		 }else{
			 $("#nopatients").text('0');
		 }
	}
	
	function DailyTotalPatients()
	{
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+'Dashboards/countTotalPatients';
		Obj.data = "JSON";
		var resp=Information(Obj);
		$("#noadmit").text(resp['admission']);
		$("#noopd").text(resp['outpatient']);
		$("#noer").text(resp['emergency']);
	}
	
	function  datepicker()
	{
		$('input[name="datefilter"]').daterangepicker({
		"showWeekNumbers": true,
		"autoApply": true,
		ranges: {
			'Today': [moment().startDate.format('YYYY-MM-D'),moment().startDate.format('YYYY-MM-D')],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		"alwaysShowCalendars": true,
		"startDate":moment().startDate.format('YYYY-MM-D'),
		"endDate":moment().startDate.format('YYYY-MM-D'),
		"opens": "left",
		"drops": "auto",
		"opens": 'left',
		"buttonClasses": ['btn btn-default'],
		"applyClass": 'btn-sm btn-primary',
		"cancelClass": 'btn-sm',
		
		"separator": ' to ',
		"locale": {
		"applyLabel": 'Submit',
		"cancelLabel": 'Clear',
		"fromLabel": 'From',
		"toLabel": 'To',
		"customRangeLabel": 'Custom',
		"daysOfWeek": ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
		"monthNames": ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		"firstDay": 1
		}
		});
	}