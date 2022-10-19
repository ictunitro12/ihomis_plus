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