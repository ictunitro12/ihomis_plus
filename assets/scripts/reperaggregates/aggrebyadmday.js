function ByDayOfAdmission(from, to) {

	// var data = new Object();
	// 	data.id = "byAdmDayTbl";
	// 	data.link =baseURL + "Rep_ER/by_DaysofAdmList/"+from+"/"+to;
	// 	data.type = "POST";
	// 	  loadTable(data);
	$.ajax({
		url: baseURL + "Rep_AdmAggregate/by_DaysofAdmList/" + from + "/" + to,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var table = $("#byAdmDayTbl").dataTable({
				data: data,
				destroy: true,
				className: 'table table-sm table-condensed table-bordered',
				columns: [
					{ "data": "no_days" },
					{ "data": "no_of_pat" }],

			});
		},
		error: function (response) {
			// alert("Error:Please try again!");
		}
	});
	return false;
}