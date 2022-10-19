function dmStock() {
	var data = new Object();
	data.id = "stock_tbl";
	data.link = baseURL + "Central_Supply/dm_stock";
	data.type = "POST";
	data.search = true;
	data.destroy = false;
	data.paging = true;
	data.info = true;
	data.serverside = true;
	data.data = function (d) { d.stypeDrug = $('#stypeDrug').val(); },
		data.columns = [
			{ data: "dmdcomb" },
			{ data: "hprodid" },
			{
				data: "brandname",
				render: function (data, type, row) {
					return data;
				}
			},
			{
				data: "description",
				render: function (data, type, row) {
					return "<em>" + data + "</em>";
				}
			},

			{
				data: "dmdrxot",
				render: function (data, type, row) {
					switch (data) {
						case 'RXX': return '<small class="text-center text-primary"><i class="fa fa-stethoscope"></i>&nbsp W/Pres</small>'; break;
						case 'OTC': return '<small class="text-center text-info"><i class="fa fa-medkit"></i> OTC</small>'; break;
						default: return 'N/A';
					}
				}
			},

			{
				data: "dmdstat",
				render: function (data, type, row) {
					switch (data) {
						case 'A': return '<small class="text-center text-success"><i class="fa fa-check"></i>&nbsp Active </small>'; break;
						case 'I': return '<small class="text-center text-success"><i class="fa fa-remove"></i>&nbsp Inactive </small>'; break;
						default: return '<small class="text-center text-secondary"><i clsass="fa fa-exclamation"></i>&nbsp N/A </small>';
					}
				}
			},

			{
				data: "dmdpndf",
				render: function (data, type, row) {
					switch (data) {
						case 'Y': return '<div class="text-center text-success"><i class="fa fa-check"></i>&nbsp Yes </div>'; break;
						case 'N': return '<div class="text-center text-danger"><i class="fa fa-remove"></i>&nbsp No </div>'; break;
						default: return '<div class="text-center text-secondary"><i class="fa fa-exclamation"></i>&nbsp N/A </div>';
					}
				}
			},
			{ data: "stockbal" },
			{ data: "begbal" },
			{
				data: "reorder_level",
				render: function (data, type, row) {
					if(data){
						if(row.stockbal <= data){
							return '<div class="p-1 bg-danger text-center text-white">&nbsp '+data+'(Low)</div>'; 
						}else{
							return '<div class="p-1 bg-success text-center text-white">&nbsp '+data+' </div>'; 
						}
					}else{
						return '<div class="text-center text-danger"> No reorder level </div>';
					}
				}
			},
			{
				data:null,
				render: function (data, type, row) {
					return "<div class=btn-group role=group>" +
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
						"<i class='fa fa-th-list'></i>" +
						"</button>" +
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
						"<a class='dropdown-item'  data-dmdcomb='" + row.dmdcomb + "' data-dmdctr='" + row.dmdctr + "'  data-formcode='" + row.formcode + "'  data-baldteasof='" + row.baldteasof + "' id='btnTypeAcc' href='#'><i class='fa fa-calculator'></i> &nbsp Account</a>" +
						"<a class='dropdown-item'  data-dmdcomb='" + row.dmdcomb + "' data-drugname='" + row.description + "' data-dmdctr='" + row.dmdctr + "'  data-dmsub='" + row.dmhdrsub + "' data-formcode='" + row.formcode + "'  data-baldteasof='" + row.baldteasof + "' id='btnStock_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>" +
						"</div>" +
						"</div>";
				}
			}
		],
		data.coldef = [
			{
				targets: ["_all"],
				className: 'align-middle',
			},{
				targets: [0],
				visible: false,
			}];
	var stockTable =Datatable(data);
}

$("#btnChart").on('click',function(){
	var row = $("#stock_tbl").DataTable().columns().data().toArray();
	$('#modalChart').modal('show');
	chartTable(row);
});

function chartTable(data)
{
const toNumbers = arr => arr.map(Number);
var table= $("#stock_tbl").DataTable();
var container = $('<div/>').insertBefore(table.table().container());

var chart = Highcharts.chart('viewChart', 
   {
	   chart: {
		   type: 'bar'
	   },
	   title: {
		   text: $('#stypeDrug').text()
	   },
	   subtitle: {	
		   text: ''
	   },
	   xAxis: {
		   name:data[9],
		   categories: data[3],
		   title: {
			   text: 'Drugs and Medicines'
		   }
	   },	
	   yAxis: {
		   min: 0,
		   value: toNumbers(data[9]),
		   title: {
			   text: 'Order level',
			   align: 'high'
		   },
		   labels: {
			   overflow: 'justify',
			   text: '',
			   style: {
				 color: 'red',
				 fontWeight: 'bold',
			   }
		   }
	   },
	   tooltip: {
		   valueSuffix: 'pcs'
	   },
	   plotOptions: {
		   bar: {
			   dataLabels: {
				   enabled: true
			   }
		   }
	   },
	   legend: {
		   layout: 'vertical',
		   align: 'right',
		   verticalAlign: 'top',
		   x: -40,
		   y: 80,
		   floating: true,
		   borderWidth: 1,
		   backgroundColor:
			   Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
		   shadow: true
	   },
	   credits: {
		   enabled: false
	   },
	   series: [
		{
			name:'Current Stock/s',
		   data:toNumbers(data[7])
		},
		{
			marker: {
			  symbol: 'c-rect',
			  lineWidth:3,
			  lineColor: Highcharts.getOptions().colors[3],
			  radius: 10
			},
			name:'Re order level',
			type: 'scatter',
			data: toNumbers(data[9])
		  }
	]
},function(chart){
        	
	$.each(chart.series[0].data,function(i,data){

		if(data.y < data.y)
			data.graphic.attr({
				fill:'red'
			});
		
	});

});


}

$("#stypeDrug").on('change', function () {
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/dm_stock",
		data: $("#frmFilter").serialize(),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#stock_tbl").DataTable().ajax.reload();
			$("#modalSelectAccount").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

function drugData() {
	var data = new Object();
	data.id = "drugData";
	data.link = baseURL + "Central_Supply/drugdata";
	data.select = {
		select: true,
		style: 'single',
	},
	data.type = "POST";
	data.search = true;
	data.destroy = true;
	data.paging = true;
	data.info = true;
	data.columns = [
		{ data: "dmdcomb" },
		{ data: "dmdctr" },
		{ data: "drugs" }];
	data.coldef[]
	Datatable(data);
}



$("#drugData").on('click', 'tbody>tr', function () {
	$(this).toggleClass("table-success selected");
	var rowData = $("#drugData").DataTable().row('.selected').data();
	$('#drugcomb').val(rowData['dmdcomb']);
	$('#drugctr').val(rowData['dmdctr']);
	$('#drug').val(rowData['drugs']);
	$('#formcode').val(rowData['formcode']);
	$('#modaldrugData').modal('hide');
});

$('#btnSearchDrug').on('click', function (e) {
	drugData();
	$("#modaldrugData").modal('show');
});

$('#btnAccount').on('click', function (e) {
	$("#modalSelectAccount").modal('show');
});

function drugSelect() {
	$('#drugSelect').select2({
		placeholder: 'DRUGS AND MEDICINE',
		allowClear: true,
		theme: 'coreui',
		ajax: {
			url: baseURL + "/Drugs/searchDrugs",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchDrugs: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.dmdcomb,
						text: item.drugs,
						ctr: item.dmdctr,
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#drugSelect').on('change', function () {
		$("#drugSelect option:selected", this);
		$("#dmdcomb").val(this.value);
	});
}


function chargeDrug() {
	$('#chrgDrug').select2({
		placeholder: 'Type of charge ',
		minimumInputLength:3, 
		allowClear: false,
		theme: 'coreui',
		ajax: {
			url: baseURL + "/searchdrugAccount",
			dataType: "json",
			type: "POST",
			data: function (params) {
				return {
					searchdrugAccount: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.chrgcode,
						text: item.chrgdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
}


function setchrgdrug(id) {
	$.ajax({
		type: 'POST',
		url: baseURL + 'Pharmacy/searchdrugAccountInfo/' + id,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['SALTDESC'], obj['saltcode'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function setCharge(id) {
	chargeDrug();
	var relSelect = $('#chrgDrug');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Pharmacy/searchdrugAccountInfo/' + id,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['chrgdesc'], obj['chrgcode'], true, true);
		relSelect.append(option).trigger('change');
		relSelect.trigger({
			theme: 'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

//
$('#btnDrug').on('click', function (e) {
	chargeDrug();
	$("#formIdenDrug").val('insert');
	$("#modalDrug").modal('show');
});



$('#stock_tbl').on('click', '#btnTypeAcc', function (e) {
	var lotno = $(this).data('lotno');
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmsub');
	var formcode = $(this).data('formcode');
	var baldteasof = $(this).data('baldteasof');
	accountDrug(dmdcomb, dmdctr);
	druginfo(dmdcomb, dmdctr, URLencode(baldteasof));
	$("#modalDrugAccount").modal('show');
});


$('#stock_tbl').on('click', '#btnStock_Edit', function (e) {
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmsub');
	var drugname = $(this).data('drugname');
	var formcode = $(this).data('formcode');
	var baldteasof = $(this).data('baldteasof');

	$("#drugcomb").val(dmdcomb);
	$("#drugctr").val(dmdctr);
	$("#drug").val(drugname);
	setCharge(dmsub);
	$("#formIdenDrug").val('update');
	$("#baldteasof").val(baldteasof);
	$("#btnSearchDrug").prop('disabled',true);
	$("#modalDrug").modal('show');
});



$('#btnAddDrug').on('click', function (e) {
	setForm($("#formcode").val());
	$("#comb").val($("#dmdcomb").val());
	$("#ctr").val($("#dmdctr").val());
	$("#sub").val($("#dmhdrsub").val());
	$("#unitcode").val($("#formcode").val());
	$("#formiden").val('insert');
	$("#modalAddDrug").modal('show');
});

$('#frmItemAccount').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/saveSupPrice",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalItemAcc").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

$('#frmDrug').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/saveHmdhdrSub",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#stock_tbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalDrug").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error('Duplicate Entry', 'Warning!');
		}
	});
	return false;
});

$('#frmDeleteAccount').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/savedmprice",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			$("#modalDeleteAccount").modal('hide');
			toastr.success('Record deleted!', 'Success!');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});



$('#modalAddDrug').on('hidden.coreui.modal', function (event) {
	$(this).find("input,textarea,select").val('').end();
	$(this).find("input,textarea,select").removeClass('is-valid');
	$(this).find("input,textarea,select").removeClass('is-invalid');
});


$('#modalDrugAccount').on('hidden.coreui.modal', function (event) {
	$("#stock_tbl").DataTable().ajax.reload();
});


function druginfo(dmdcomb, dmdctr) {
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/getdrugInfo/" + dmdcomb + "/" + dmdctr,

		success: function (data, response) {
			var obj = $.parseJSON(data);
			$("#drgname").text(obj['description']);
			$("#begin").text(obj['begbal']);
			$("#stock").text(obj['stockbal']);
			$("#code").text(obj['dmdcomb']);
			$("#formcode").val(obj['formcode']);
			$("#dmdcomb").val(obj['dmdcomb']);
			$("#dmdctr").val(obj['dmdctr']);
			$("#dmhdrsub").val(obj['dmhdrsub']);
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
}


function druginfoprice(lotno, date) {
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/druginfo",
		data: { lotno: lotno, date: date },
		success: function (data, response) {
			var obj = $.parseJSON(data);
			setForm(obj['unitcode']);
			$("#formiden").val('update');
			$("#comb").val(obj['dmdcomb']);
			$("#ctr").val(obj['dmdctr']);
			$("#sub").val(obj['dmhdrsub']);
			$("#unitprice").val(obj['dmduprice']);
			$("#selling").val(obj['dmselprice']);
			if (obj['unitcode'] == 'VIAL') {
				$("#serveno").val(obj['serve_no']);
				$("#priceserve").val(obj['serve_price']);
				$("#serveno").prop('disabled', false);
				$("#priceserve").prop('disabled', false);
			} else {
				$("#serveno").val('');
				$("#priceserve").val('');
				$("#serveno").prop('disabled', true);
				$("#priceserve").prop('disabled', true);
			}
			$("#lotno").val(obj['lotno']);
			$("#expiry").val(obj['expiry']);
			$("#remarks").val(obj['dmdrem']);
			$("#dmdprdte").val(obj['dmdprdte']);
			$("#dmhdrsub").val(obj['dmhdrsub']);
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
}


function accountDrug(dmdcomb, dmdctr) {
	var data = new Object();
	data.id = "drugaccTbl";
	data.link = baseURL + "Pharmacy/getdrugList/" + dmdcomb + "/" + dmdctr;
	data.type = "GET";
	data.search = true;
	data.destroy = true;
	data.columns = [
		{ data: "dmdprdte" },
		{ data: "lotno" },
		{ data: "dmduprice" },
		{
			data: "dmselprice",
			render: function (data, type, row) {
				if (row.dmselprice == null) {
					return '<div class="text-danger">No price</div>';
				} else {
					return '<div class="text-danger">' + data + '</div>';
				}
			}
		},
		{ data: "stockbal" },
		{ data: "begbal" },
		{ data: "expiry" },
		{ data: "dmdrem" },
		{
			render: function (data, type, row) {
				return "<a class='dropdown-item' data-lotno='" + row.lotno + "' data-dmdcomb='" + row.dmdcomb + "' data-dmdsub='" + row.dmhdrsub + "' data-dmdctr='" + row.dmdctr + "' data-dmdprdte='" + row.dmdprdte + "' id='btnEditAcc' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>";
			}
		}
	];
	data.coldef = [
		{
			targets: ["_all"],
			className: "align-middle"
		}];

	return Datatable(data);
}


$('#drugaccTbl').on('click', '#btnEditAcc', function (e) {
	$("#modalAddDrug").modal('show');
	var lotno = $(this).data('lotno');
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmdsub');
	var date = $(this).data('dmdprdte');
	var stock = $(this).data('stock');
	var begbal = $(this).data('begbal');
	druginfoprice(lotno, date);
});

$('#drugaccTbl').on('click', '#btnDeleteAcc', function (e) {
	$("#modalDeleteAccount").modal('show');
	var lotno = $(this).data('lotno');
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmdsub');
	var date = $(this).data('dmdprdte');
	var stock = $(this).data('stock');
	var begbal = $(this).data('begbal');
	$("#delcomb").val(dmdcomb);
	$("#delctr").val(dmdctr);
	$("#delsub").val(dmsub);
	$("#delstock").val(stock);
	$("#delbeg").val(begbal);
	$("#date").val(date);

});

function typeofCharge() {
	$('#stypeDrug').select2({
		placeholder: 'Type of charge',
		allowClear: false,
		theme: 'coreui',
		ajax: {
			url: baseURL + "Pharmacy/searchdrugAccount",
			dataType: "json",
			type: "POST",
			data: function (params) {
				return {
					searchdrugAccount: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.chrgcode,
						text: item.chrgdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
}




$("#serveno").on('change', function () {
	var sprice = $("#selling").val();
	var noserve = $("#serveno").val();
	var perserve = sprice / noserve;
	$("#priceserve").val(perserve);
});
