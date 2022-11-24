//Created by JDV5/13/2022
var datesRanges = '';

function initReport() {
	$("#btnDocord").removeClass('active');
	$("#btnOTC").removeClass('active');
	$("#btnWard").removeClass('active');
	$("#btnStk").removeClass('active');
	$("#btnDeliv").removeClass('active');
	$("#btnPurchase").removeClass('active');
	$("#btnRep").addClass('active');
}
function initReport1() {
	$("#btnRepNonDrugs").addClass('active');
	$("#btnRepNonDrugs").removeClass('rounded-pill');
	$("#btnRepNonDrugs").addClass('box-pill');
	$("#btnRepDrugs").removeClass('active');
	$("#btnRepDrugs").addClass('rounded-pill');
	$("#btnRepDrugs").removeClass('box-pill');
	$("#btnRepStocks").removeClass('active');
}
function initReport2() {
	$("#btnRepNonDrugs").removeClass('active');
	$("#btnRepNonDrugs").removeClass('box-pill');
	$("#btnRepNonDrugs").addClass('rounded-pill');
	$("#btnRepDrugs").addClass('active');
	$("#btnRepDrugs").removeClass('rounded-pill');
	$("#btnRepDrugs").addClass('box-pill');
	$("#btnRepStocks").removeClass('active');

}
function initReport3() {
	$("#btnRepNonDrugs").removeClass('active');
	$("#btnRepDrugs").removeClass('active');
	$("#btnRepNonDrugs").removeClass('box-pill');
	$("#btnRepNonDrugs").addClass('rounded-pill');
	$("#btnRepDrugs").removeClass('box-pill');
	$("#btnRepDrugs").addClass('rounded-pill');
	$("#btnRepStocks").addClass('active');
}
$("#btnRep").click(function () {
	$("#container").load(baseURL + "Rep_Pharmacy/viewRepbutton", function () {
		initReport();
	});
});

$("#btnRepNonDrugs").click(function () {
	$('#rep1input').val('On');
	$('#rep2input').val('Off');
	$('#drugs_range').attr('class','collapse in');
	initReport1();
});

$("#btnRepDrugs").click(function () {
	$('#rep1input').val('Off');
	$('#rep2input').val('On');
	$('#nonDrugs_range').attr('class','collapse in');
	initReport2();
});

$("#btnRepStocks").click(function () {
	$('#rep1input').val('Off');
	$('#rep2input').val('Off');
	$('#Repmodal').modal({ backdrop: 'static' }).draggable();
		var x = document.getElementById("pdfReport").src = baseURL + "Rep_Pharmacy_stocks/PharmacyStocksPdf";
	initReport3();
});

//'On' and 'Off' are historical.

$('#dateRangeNDrugs').submit('click', function () {
	$('#DateSearch').modal('hide');
	var from = $('#from').val();
	var to = $('#to').val();
	if($("#rep1input").val() == 'On') {
		$('#Repmodal').modal({ backdrop: 'static' }).draggable();
		var x = document.getElementById("pdfReport").src = baseURL + "Rep_Pharmacy/IssuedNonDrug/" + from + "/" + to;
	}
	return false;
});

$('#dateRangeDrugs').submit('click', function () {
	$('#DateSearch').modal('hide');
	var from = $('#fromDrugs').val();
	var to = $('#toDrugs').val();
	if($("#rep2input").val() == 'On'){
		$('#Repmodal').modal({ backdrop: 'static' }).draggable();
		var x = document.getElementById("pdfReport").src = baseURL + "Rep_Pharmacy/IssuedDrugsandMeds/" + from + "/" + to;
	}
	return false;
});


$("#btnStockCard").click(function () {
	$("#stockCardModal").modal('show');
	stockcard();
	chargeDrug();
});



$("#stockCardModal").on('hidden.coreui.modal', function(event) {
	$(this).find("input,textarea,select").val('').end();
	$(this).find("checkbox,radio").prop('checked',false);
	$(this).find("radio").removeAttr('checked');
	$(this).find("input,textarea,select").removeClass('is-valid'); 
	$(this).find("input,textarea,select").removeClass('is-invalid');
	$(this).find("select").val('').trigger('change');
	$('#stockcardtbl tbody').clear().draw();
});

function stockcard()
{		
	var drugsAndMeds_tbl = $('#stockcardtbl').DataTable({
		 "aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		 ajax:{
			"url": baseURL+"Pharmacy/stockcard",
		 	"type": "POST",
		 	"data": {
			chrgDrug: $('#chrgDrug').val(),
			drugcomb: $('#drugcomb').val(),
			drugctr: $('#drugctr').val(),
			 }
		},
		 "serverside":true,
		 "processing":true,
		 "responsive": true,
		 "destroy":true,
		 "searching":true,
		 "paging":true,
		 "destroy":true,
		 "columns" : [
			{data : "baldteasof",
				render: function(data, type, row,meta)
				{	
					return data;
				}
			},
			{ data : "refno"},
			{ data : "description",
				render: function(data, type, row,meta)
				{	
					return data;
				}
			},
			{ data : "rcv_qty",
				render: function(data, type, row,meta)
				{	
					return parseInt(data);
				}
		
			},
			{ data : "rcv_unitcost" },
			{ data : null,
				render: function(data, type, row,meta)
				{	
					return parseFloat(row.rcv_qty) * parseFloat(row.rcv_unitcost);
				}
			},
			{ data : "issue_qty" ,
		
			render: function(data, type, row,meta)
			{	
				return parseInt(data);
			}
		
			},
			{ data : "issue_unitcost"},
			{ data : null,
				render: function(data, type, row,meta)
				{	
					return parseFloat(row.issue_qty) * parseFloat(row.issue_unitcost);
				}
			},
			
			],

			"columnDef":[
				{
					targets:['_all'],
					className:"text-middle"
				}

			]
			

	});
}


	
function drugData() 
{
	var data = new Object();
	data.id = "drugData";
	data.link = baseURL + "Drugs/drugdata";
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
		{ data: "drugs" }];
	Datatable(data);
}



$("#drugData").on('click', 'tbody>tr', function () {
	$(this).toggleClass("table-success selected");
	var rowData = $("#drugData").DataTable().row('.selected').data();
	console.log(rowData);
	$('#drugcomb').val(rowData['dmdcomb']);
	$('#drugctr').val(rowData['dmdctr']);
	$('#drug').val(rowData['drugs']);
	$('#formcode').val(rowData['formcode']);

	$('#drugcode').text(rowData['dmdcomb']);
	$('#drugname').text(rowData['drugs']);
	$('#drugunits').text(rowData['formcode']);
	$('#modaldrugData').modal('hide');
});

$('#btnSearchDrug').on('click', function (e) {
	drugData();
	$("#modaldrugData").modal('show');
});

$('#btnAccount').on('click', function (e) {
	$("#modalSelectAccount").modal('show');
});

function chargeDrug() {
	$('#chrgDrug').select2({
		placeholder: 'Type of charge ',
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


