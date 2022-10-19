function BySex(from,to){
	// $.ajax({
	// 	url: baseURL + "Rep_AdmAggregate/by_sexList/"+from+"/"+to,
	// 	type:"POST",
	// 	dataType:"JSON",
	// 	processData:true,
	// 	cache:false,
	// 	async:true,
	// 	success: function(data,response){
	// 		var obj = data.data;
	// 		var tr = '';
	// 		var counter = 1;
	// 		if(obj < 1){
	// 			tr += '<tr align="center"><td width="100%" colspan="3">No data available.</td>';
	// 		} else {
	// 			$.each(obj, function(key, value){
	// 				tr += '<tr>';
	// 				tr += '<td align = "center"><span name ="Male_1'+counter+'[]" id="Male_1"/>'+value.Male_1+'</span></td>';
	// 				tr += '<td align = "center"><span name ="Female_1'+counter+'[]" id="Female_1"/>'+value.Female_1+'</span></td></tr>';
	// 				counter++;
	// 			});
	// 		}
	// 		$("#SexTbl tbody").html(tr);
	// 	},
	// 	error: function(response) {
	// 		toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
	// 	}
	// });

	$.ajax({
		url: baseURL + "Rep_AdmAggregate/by_sexList/" + from + "/" + to,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var table = $("#SexTbl").dataTable({
				data: data,
				destroy: true,
				className: 'table table-sm table-condensed table-bordered',
				columns: [
					{ "data": "patsex" },
					{ "data": "totalgen" }],

					"footerCallback": function( tfoot, data, start, end, display ) {
						var api = this.api();
			
						$( api.column( 1 ).footer() ).html(
								api.column( 1 ).data().reduce( function ( a,b ) {
									return (parseInt(a)+parseInt(b));
								},)
							);
						$(api.column(0).footer()).html('GRAND TOTAL');
						//----------------------------->

					  },

			});
		},
		error: function (response) {
			// alert("Error:Please try again!");
		}
	});
	return false; 


}
