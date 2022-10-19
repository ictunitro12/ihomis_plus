	
	function initopd_graph(startDate,endDate)
	{
		 opdgraph(startDate,endDate);
		 $('#opdrangebview').text(startDate+'-'+endDate);
	}
	$('#opdRange').on('apply.daterangepicker', function(ev, picker) {
	var start = picker.startDate.format('YYYY-MM-D');
	var end =picker.endDate.format('YYYY-MM-D');
	$('#opdrangebview').text(picker.startDate.format('MMMM D, YYYY')+'-'+picker.endDate.format('MMMM D, YYYY'));
	admitgraph(start,end);
	});
	function opdgraph(start,end)
	{
	var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+'Dashboards/opdGraph/'+start+'/'+end;
		Obj.data = "json";
		var resp=Information(Obj);	
		var ctx = document.getElementById('opdGraph');
		var myChart = new Chart(ctx, {
		type: 'line',
		data: {
		labels:resp.label,
		datasets: [
			{
				 label: 'No of Patients',
				 data: resp.data,
			},
			
			]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				},
				x: {
					type: 'time',
					time: {
						unit: 'month'
					}
				}, 
			},	
		}
	
	});
}