function Demo_Data_Within_Province(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Demographic_Within_Province_Dataload/" + year,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			console.log(data);
			var table = $("#Demographic_Within_Province_Table").dataTable({
				data: data,
				destroy: true,
				paging: false,
				info: false,
				searching: false,
				columns: [
					{ "data": "ctyname", orderable: true },
					{ "data": "pay_non_phic", className: 'text-right', orderable: true },
					{ "data": "pay_phic_member", className: 'text-right', orderable: true },
					{ "data": "pay_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "pay_hmow", className: 'text-right', orderable: false },
					{ "data": "pay_hmowo", className: 'text-right', orderable: false },
					{ "data": "pay_owwa", className: 'text-right', orderable: false },
					{ "data": "serv_non_phic", className: 'text-right', orderable: true },
					{ "data": "serv_phic_member", className: 'text-right', orderable: true },
					{ "data": "serv_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "serv_owwa", className: 'text-right', orderable: false },
					{ "data": "total", className: 'text-right', orderable: true },
					{ "data": "pgtotal", className: 'text-right', orderable: false }],

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
						'Grand Total'
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

					if (total == 0) {
						var per = '0%'
					} else {
						var per = '100%'
					}

					$(api.column(12).footer()).html(
						per
					);
				},
			});
		},
		error: function (response) {
			alert("Error : Please try again.");
		}
	});
	return false;
}

function Demo_Data_Within_Region(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Demographic_Within_Region_Dataload/" + year,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			console.log(data);
			var table = $("#Demographic_Within_Region_Table").dataTable({
				data: data,
				destroy: true,
				paging: false,
				info: false,
				searching: false,
				columns: [
					{ "data": "ctyname", orderable: true },
					{ "data": "pay_non_phic", className: 'text-right', orderable: true },
					{ "data": "pay_phic_member", className: 'text-right', orderable: true },
					{ "data": "pay_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "pay_hmow", className: 'text-right', orderable: false },
					{ "data": "pay_hmowo", className: 'text-right', orderable: false },
					{ "data": "pay_owwa", className: 'text-right', orderable: false },
					{ "data": "serv_non_phic", className: 'text-right', orderable: true },
					{ "data": "serv_phic_member", className: 'text-right', orderable: true },
					{ "data": "serv_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "serv_owwa", className: 'text-right', orderable: false },
					{ "data": "total", className: 'text-right', orderable: true },
					{ "data": "pgtotal", className: 'text-right', orderable: false }],

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
						'Grand Total'
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

					if (total == 0) {
						var per = '0%'
					} else {
						var per = '100%'
					}

					$(api.column(12).footer()).html(
						per
					);
				}
			});
		},
		error: function (response) {
			alert("Error : Please try again.");
		}
	});
	return false;
}

function Demo_Data_Congressional(year) {
	$.ajax({
		url: baseURL + "Rep_Hfdb/Demographic_Congressional_Dataload/" + year,
		type: "POST",
		data: new FormData,
		dataType: "JSON",
		processData: false,
		contentType: false,
		cache: false,
		async: true,
		success: function (data, response) {
			console.log(data);
			var table = $("#Demographic_Congressional_Table").dataTable({
				data: data,
				destroy: true,
				paging: false,
				info: false,
				searching: false,
				columns: [
					{ "data": "ctyname", orderable: true },
					{ "data": "pay_non_phic", className: 'text-right', orderable: true },
					{ "data": "pay_phic_member", className: 'text-right', orderable: true },
					{ "data": "pay_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "pay_hmow", className: 'text-right', orderable: false },
					{ "data": "pay_hmowo", className: 'text-right', orderable: false },
					{ "data": "pay_owwa", className: 'text-right', orderable: false },
					{ "data": "serv_non_phic", className: 'text-right', orderable: true },
					{ "data": "serv_phic_member", className: 'text-right', orderable: true },
					{ "data": "serv_phic_indigent", className: 'text-right', orderable: true },
					{ "data": "serv_owwa", className: 'text-right', orderable: false },
					{ "data": "total", className: 'text-right', orderable: true },
					{ "data": "pgtotal", className: 'text-right', orderable: false }],

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
						'Grand Total'
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

					if (total == 0) {
						var per = '0%'
					} else {
						var per = '100%'
					}

					$(api.column(12).footer()).html(
						per
					);
				}
			});
		},
		error: function (response) {
			alert("Error : Please try again.");
		}
	});
	return false;
}