$(document).ready(function () {
	DrugsMedsList();
	SelDrugsmeds();
});

function DrugsMedsList() {

	var data = new Object();
	data.id = "DrugsMedTable";
	data.link = baseURL + "Ref_PhicRef/PhicRef_DrugsMed";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 1, 2,7],
			visible: false,
		},
		{
			targets: [5, 6],
			searchable: false,
			render: function (data, type, row) {
				switch (data) {
					case 'Y':
						return '<center><input type="checkbox" value="Y" readonly checked></center>';
						break;
					case 'N':
						return '<center><input type="checkbox" value="N" readonly unchecked></center>';
						break;
					default:
						return '<center><input type="checkbox" value="" readonly unchecked></center>';
				}

			},
		}];
	loadTable(data);
}
$("#DrugsMedTable").on("click", ".ModalDeleteDrugs", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteDrugsMeds').modal('show');
	$("#deleteIDdrugs").val('delete');
	$("#deletecodedrugs").val(atob(data['refintkey']));

});

$("#DrugsMedTable").on("click", ".ModalEditDrugs", function () {
	var data = $(this).data();
	console.log(data);
	$('#ModalAddDrugs').modal('show');
	$("#formIdenDrugs").val('update');
	var refintkey = atob(data['refintkey']);
	var dmdcomb = atob(data['refcode']);
	setDrugsMeds(dmdcomb);
	$("#selDrugs").val(atob(data['refcode']));
	$("#refintkeydrugs").val(refintkey);
	$("#refdatedrugs").val($.datepicker.formatDate('yy-mm-dd', new Date(atob(data['refdate']))));
	$("#compense option[value='" + atob(data['compense']) + "']").attr("selected", "selected");
	$("#mulcom option[value='" + atob(data['mulcom']) + "']").attr("selected", "selected");
});

function AddDrugsMed() {
	$("#formIdenDrugs").val('insert');
	$('#ModalAddDrugs').modal('show');
}


//-----Jobert 02-08-2022---->
function setDrugsMeds(dmdcomb) {
	SelDrugsmeds();
	var relSelect = $('#selDrugs');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicRef/setDrugsMeds/' + dmdcomb,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['refdescription'], obj['dmdcomb'], true, true);
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

function SelDrugsmeds() {
	$('#selDrugs').select2({
		theme: 'coreui',
		placeholder: 'Drugs and Medicines',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicRef/searchDrugsMeds",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchDrugsMeds: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.dmdcomb,
						text: item.refdescription
						
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selDrugs').on('change', function () {
		var data = $("#selDrugs option:selected", this);
	});
}

///------end-------->