function ByAttendingPhys(from,to){

	// var data = new Object();
	// 	data.id = "byAttendPhysTbl";
	// 	data.link =baseURL + "Rep_AdmAggregate/by_AttendingPhysicList/"+from+"/"+to;
	// 	data.type = "POST";
	// 	loadTable(data);
		$.ajax({
			url: baseURL + "Rep_AdmAggregate/by_AttendingPhysicList/" + from + "/" + to,
			type: "POST",
			data: new FormData,
			dataType: "JSON",
			processData: false,
			contentType: false,
			cache: false,
			async: true,
			success: function (data, response) {
				var table = $("#byAttendPhysTbl").dataTable({
					data: data,
					destroy: true,
					className: 'table table-sm table-condensed table-bordered',
					columns: [
						{ "data": "physician_name" },
						{ "data": "no_of_patients" }],
	
				});
			},
			error: function (response) {
				// alert("Error:Please try again!");
			}
		});
		return false;
}
