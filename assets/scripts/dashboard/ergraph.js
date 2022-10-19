	
	function initer_graph(startDate,endDate)
	{
		 ergraph(startDate,endDate);
		 $('#errangebview').text(startDate+'-'+endDate);
	}
	$('#erRange').on('apply.daterangepicker', function(ev, picker) {
	var start = picker.startDate.format('YYYY-MM-D');
	var end =picker.endDate.format('YYYY-MM-D');
	$('#errangebview').text(picker.startDate.format('MMMM D, YYYY')+'-'+picker.endDate.format('MMMM D, YYYY'));
	ergraph(start,end);
	});
	
	function ergraph(start,end)
	{
	var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+'Dashboards/erGraph/'+start+'/'+end;
		Obj.data = "json";
		var resp=Information(Obj);	
		var ctx = document.getElementById('erGraph');
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