function lcauseER(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Hospital_Services_ER_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td></tr>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.scatdesc + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#lcauseERtable tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function lcauseNonER(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Hospital_Services_NonER_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td></tr>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.scatdesc + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#lcauseNonER_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function opdDemographic(year) {
	// var data = new Object();
	// data.id = "Demographic_Within_Province_Table";
	// data.link = baseURL+"Rep_Hfdb/Demographic_Within_Province_Dataload/"+year;
	// data.type = "POST";
	// loadTable(data);

	$.ajax({
		url: baseURL + "Rep_Hfdb/opdDemographicDataload/" + year,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			console.log(data);
			var table = $("#opdDemographicTable").dataTable({
				data: data,
				destroy: true,
				className: 'table table-sm table-striped table-borderless table-condensed table-hover',
				columns: [
					{ "data": "ctyname" },
					{ "data": "pay_non_phic" },
					{ "data": "pay_phic_member" },
					{ "data": "pay_phic_indigent" },
					{ "data": "pay_hmow" },
					{ "data": "pay_hmowo" },
					{ "data": "pay_owwa" },
					{ "data": "serv_non_phic" },
					{ "data": "serv_phic_member" },
					{ "data": "serv_phic_indigent" },
					{ "data": "serv_owwa" },
					{ "data": "total" },
					{ "data": "pgtotal" }],

				"footerCallback": function (tfoot, data, start, end, display) {
					var api = this.api();
					const table = this;

					var pageTotal = api
						.column(1, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);

					$(api.column(0).footer()).html(
						'TOTAL :'
					);
					$(api.column(1).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(2, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(2).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(3, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(3).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(4, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(4).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(5, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(5).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(6, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(6).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(7, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(7).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(8, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(8).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(9, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(9).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(10, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(10).footer()).html(
						pageTotal
					);

					var pageTotal = api
						.column(11, { page: 'current' })
						.data()
						.reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0);
					$(api.column(11).footer()).html(
						pageTotal
					);

					var total = api.column(11).data().reduce(function (a, b) {
						return (parseInt(a) + parseInt(b));
					}, 0);

					data.forEach(function (row, index) {
						var grandTotal = (parseFloat(row.total) / parseFloat(total)) * 100;
						$(table.fnGetNodes(index)).find('td').eq(12).html(parseFloat(grandTotal).toFixed(2) + '%');
					});

					$(api.column(12).footer()).html(
						'100%'
					);

					/* $(api.column(1).footer()).html(
						api.column(1).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					); 
					$(api.column(2).footer()).html(
						api.column(2).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(3).footer()).html(
						api.column(3).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(4).footer()).html(
						api.column(4).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(5).footer()).html(
						api.column(5).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(6).footer()).html(
						api.column(6).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(7).footer()).html(
						api.column(7).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(8).footer()).html(
						api.column(8).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(9).footer()).html(
						api.column(9).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(10).footer()).html(
						api.column(10).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(11).footer()).html(
						api.column(11).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);
					$(api.column(12).footer()).html(
						api.column(12).data().reduce(function (a, b) {
							return (parseInt(a) + parseInt(b));
						}, 0)
					);*/
				},


				// 	//---------------------------->
				// 	// Total over all pages
				// 	// var total = api
				// 	// 	.column( 1 )
				// 	// 	.data()
				// 	// 	.reduce( function (a, b) {
				// 	// 		return (parseInt(a)+parseInt(b));
				// 	// 	} );

				// 	// Total over this page
				// 	// var pageTotal = api
				// 	// 	.column( 1, { page: 'current'} )
				// 	// 	.data()
				// 	// 	.reduce( function (a, b) {
				// 	// 		return (parseInt(a)+parseInt(b));
				// 	// 	} );

				// 	// // Update footer
				// 	// $( api.column( 1 ).footer() ).html(
				// 	// 	pageTotal
				// 	// );

				// 	//----------------------------->

				//   },

			});
		},
		error: function (response) {
			alert("Error:Please try again!");
		}
	});
	return false;
}

function lcauseOPD(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Hospital_Services_OPD_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data.data;
			console.log(obj);
			var tr = '';
			var counter = 1;
			if (obj < 1) {
				tr += '<tr align="center"><td width="100%" colspan="37">No data available.</td></tr>';
			} else {
				$.each(obj, function (key, value) {
					tr += '<tr><td><input type="hidden" value="' + value.scatdesc + '" name ="scatdesc' + counter + '[]"><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.scatdesc + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_1 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_2 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_3 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_4 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_5 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_6 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_7 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_8 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_9 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_10 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_11 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_12 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_13 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_14 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_15 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.Male_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.FeMale_16 + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_male + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.total_female + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.cnt + '</span></td>';
					tr += '<td><span name ="scatdesc' + counter + '[]" id="ft40p"/>' + value.diagscat + '</span></td></tr>';
					counter++;
				});
			}
			$("#lcauseOPD_Table tbody").html(tr);
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function opdServiceRendered(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/serviceRenderedDataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			console.log(obj);
			//Medicine
			document.getElementById('medNew').innerHTML = 0;
			document.getElementById('medRevisit').innerHTML = 0;
			document.getElementById('medTot').innerHTML = 0;
			document.getElementById('medTotPercent').innerHTML = 0;

			//Obstetrics
			document.getElementById('obsNew').innerHTML = 0;
			document.getElementById('obsRevisit').innerHTML = 0;
			document.getElementById('obsTot').innerHTML = 0;
			document.getElementById('obsTotPercent').innerHTML = 0;

			//Gynecology
			document.getElementById('gynNew').innerHTML = 0;
			document.getElementById('gynRevisit').innerHTML = 0;
			document.getElementById('gynTot').innerHTML = 0;
			document.getElementById('gynTotPercent').innerHTML = 0;

			//Pediatrics
			document.getElementById('pedNew').innerHTML = 0;
			document.getElementById('pedRevisit').innerHTML = 0;
			document.getElementById('pedTot').innerHTML = 0;
			document.getElementById('pedTotPercent').innerHTML = 0;

			//Surgery
			document.getElementById('surgNew').innerHTML = 0;
			document.getElementById('surgRevisit').innerHTML = 0;
			document.getElementById('surgTot').innerHTML = 0;
			document.getElementById('surgTotPercent').innerHTML = 0;

			//EENT
			document.getElementById('eentNew').innerHTML = 0;
			document.getElementById('eentRevisit').innerHTML = 0;
			document.getElementById('eentTot').innerHTML = 0;
			document.getElementById('eentTotPercent').innerHTML = 0;

			//Dental
			document.getElementById('dentalNew').innerHTML = 0;
			document.getElementById('dentalRevisit').innerHTML = 0;
			document.getElementById('dentalTot').innerHTML = 0;
			document.getElementById('dentalTotPercent').innerHTML = 0;

			//Family Planning
			document.getElementById('famplanNew').innerHTML = 0;
			document.getElementById('famplanRevisit').innerHTML = 0;
			document.getElementById('famplanTot').innerHTML = 0;
			document.getElementById('famplanPercent').innerHTML = 0;

			data.forEach(data => {
				if (data.tsdesc == "MEDICAL") {
					//-----------------MEDICAL-----------------//
					$('#medNew').val(obj['newpat']);
					document.getElementById('medNew').innerHTML = data.newpat;

					$('#medRevisit').val(obj['oldpat']);
					document.getElementById('medRevisit').innerHTML = data.oldpat;

					$('#medTot').val(obj['totalpat']);
					document.getElementById('medTot').innerHTML = data.totalpat;

				} else if (data.tsdesc == "OBSTETRICS") {
					//-----------------OBSTETRICS-----------------//
					$('#obsNew').val(obj['newpat']);
					document.getElementById('obsNew').innerHTML = data.newpat;

					$('#obsRevisit').val(obj['oldpat']);
					document.getElementById('obsRevisit').innerHTML = data.oldpat;

					$('#obsTot').val(obj['totalpat']);
					document.getElementById('obsTot').innerHTML = data.totalpat;

				} else if (data.tsdesc == "GYNECOLOGY") {
					//-----------------GYNECOLOGY-----------------//
					$('#gynNew').val(obj['newpat']);
					document.getElementById('gynNew').innerHTML = data.newpat;

					$('#gynRevisit').val(obj['oldpat']);
					document.getElementById('gynRevisit').innerHTML = data.oldpat;

					$('#gynTot').val(obj['totalpat']);
					document.getElementById('gynTot').innerHTML = data.totalpat;

				} else if (data.tsdesc == "PEDIATRICS") {
					//-----------------PEDIATRICS-----------------//
					$('#pedNew').val(obj['newpat']);
					document.getElementById('pedNew').innerHTML = data.newpat;

					$('#pedRevisit').val(obj['oldpat']);
					document.getElementById('pedRevisit').innerHTML = data.oldpat;

					$('#pedTot').val(obj['totalpat']);
					document.getElementById('pedTot').innerHTML = data.totalpat;

				} else if (data.tsdesc == "SURGICAL") {
					//-----------------SURGICAL-----------------//
					$('#surgNew').val(obj['newpat']);
					document.getElementById('surgNew').innerHTML = data.newpat;

					$('#surgRevisit').val(obj['oldpat']);
					document.getElementById('surgRevisit').innerHTML = data.oldpat;

					$('#surgTot').val(obj['totalpat']);
					document.getElementById('surgTot').innerHTML = data.totalpat;
				}
			});

			//-----------------Total-----------------//
			/* var medic_recov_tot = document.getElementById('med_recov_total').value;
			var medic_impro_tot = document.getElementById('med_impro_total').value;
			var medic_unimp_tot = document.getElementById('med_unimp_total').value;
			var medic_died_tot = document.getElementById('med_total_died').value;
			var tot_med = parseInt(medic_recov_tot) + parseInt(medic_impro_tot) + parseInt(medic_unimp_tot) + parseInt(medic_died_tot);
			if (!isNaN(tot_med))
				{
					document.getElementById('medicine_total').value = tot_med;
				}
			document.getElementById('medicine_total').innerHTML = tot_med;
			
			/* var obs_recov_tot = document.getElementById('obs_recov_total').value;
			var obs_impro_tot = document.getElementById('obs_impro_total').value;
			var obs_unimp_tot = document.getElementById('obs_unimp_total').value;
			var obs_died_tot = document.getElementById('obs_total_died').value;
			var tot_obs = parseInt(obs_recov_tot) + parseInt(obs_impro_tot) + parseInt(obs_unimp_tot) + parseInt(obs_died_tot);
			if (!isNaN(tot_obs))
				{
					document.getElementById('obs_total').value = tot_obs;
				}
			document.getElementById('obs_total').innerHTML = tot_obs; */

		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}



