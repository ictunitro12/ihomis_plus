function ByAttendingPhys(from,to){

	// var data = new Object();
	// 	data.id = "byAttendPhysTbl";
	// 	data.link =baseURL + "Rep_ER/by_AttendingPhysicList/"+from+"/"+to;
	// 	data.type = "POST";
	// 	loadTable(data);

	$.ajax({
		url: baseURL + "Rep_ER/by_AttendingPhysicList/"+ from + "/" + to,
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
				className:'table table-sm table-striped table-borderless table-condensed table-hover',
				columns: [
					{ "data": "physician_name" },
					{ "data": "no_of_patients" }],

					"footerCallback": function( tfoot, data, start, end, display ) {
						// var api = this.api();
						// var total = api
						// $( api.column( 1 ).footer() ).html(
						// 	api.column( 1 ).data().reduce( function ( a,b ) {
						// 		return (parseInt(a)+parseInt(b));
						// 	},0)
						// );	
						var api = this.api();
			
						$( api.column( 1 ).footer() ).html(
								api.column( 1 ).data().reduce( function ( a,b ) {
									return (parseInt(a)+parseInt(b));
								},0)
							);
						$(api.column(0).footer()).html('GRAND TOTAL :');
					  },

			});
		},
		error: function (response) {
			// alert("Error:Please try again!");
		}
	});
	return false; 

}
