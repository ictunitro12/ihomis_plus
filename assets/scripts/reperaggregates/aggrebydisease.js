function ByDisease(from,to){

	// var data = new Object();
	// 	data.id = "ByDiseaseTbl";
	// 	data.link =baseURL + "Rep_AdmAggregate/by_DiseaseList/"+from+"/"+to;
	// 	data.type = "POST";
	// 	  loadTable(data);

		  $.ajax({
			url: baseURL + "Rep_ER/by_DiseaseList/" + from + "/" + to,
			type: "POST",
			data: new FormData,
			dataType: "JSON",
			processData: false,
			contentType: false,
			cache: false,
			async: true,
			success: function (data, response) {
				var table = $("#ByDiseaseTbl").dataTable({
					data: data,
					destroy: true,
					className: 'table table-sm table-condensed table-bordered',
					columns: [
						{ "data": "diagdesc" },
						{ "data": "no_of_patients" }],

						"footerCallback": function( tfoot, data, start, end, display ) {
							var api = this.api();
							//---------------------------->
							// Total over all pages
							// var total = api
							// 	.column( 1 )
							// 	.data()
							// 	.reduce( function (a, b) {
							// 		return (parseInt(a)+parseInt(b));
							// 	} );
				 
							// Total over this page
							

							var pageTotal = api
								.column( 1, { page: 'current'} )
								.data()
								.reduce( function (a, b) {
									return (parseInt(a)+parseInt(b));
								} );
				 
							// Update footer
							$( api.column( 1 ).footer() ).html(
								pageTotal
							);
							$( api.column( 0 ).footer() ).html(
								'Total'
							);
							
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