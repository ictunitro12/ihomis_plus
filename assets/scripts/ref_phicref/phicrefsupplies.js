$(document).ready(function () {
	SupplyList();
});
function Supply_List() {

	var data = new Object();
	data.id = "SuppliesTable";
	data.link = baseURL + "Ref_PhicRef/PhicRef_Supplies";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 1, 2],
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
$("#SuppliesTable").on("click", ".ModalDeleteSupply", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteSupply').modal('show');
	$("#deleteIDsupply").val('delete');
	$("#deletecodesupply").val(atob(data['refintkey']));

});

$("#SuppliesTable").on("click", ".ModalEditSupply", function () {
	var data = $(this).data();

	$('#ModalAddSupply').modal('show');
	$("#formIdenSupply").val('update');
	var refintkey = atob(data['refintkey']);
	var refcode = atob(data['refcode']);
	console.log(refcode);
	setSupply(refcode);
	$("#selSupply").val(atob(data['refcode']));
	$("#refintkeysupply").val(refintkey);
	$("#refdatesupply").val($.datepicker.formatDate('yy-mm-dd', new Date(atob(data['refdate']))));
	$("#compense option[value='" + atob(data['compense']) + "']").attr("selected", "selected");
	$("#orinclst option[value='" + atob(data['orinclst']) + "']").attr("selected", "selected");
});

function AddSupplies() {
	SelSupply();
	$("#formIdenSupply").val('insert');
	$('#ModalAddSupply').modal('show');
}
//-----Jobert 02-07-2022---->
function setSupply(cl2comb) {
	SelSupply();
	var relSelect = $('#selSupply');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicRef/setSupplies/' + cl2comb,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['refdesc'], obj['cl2comb'], true, true);
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

function SelSupply() {
	$('#selSupply').select2({
		theme: 'coreui',
		placeholder: 'Supplies',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicRef/searchSupplies",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchSupplies: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.cl2comb,
						text: item.refdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selSupply').on('change', function () {
		var data = $("#selSupply option:selected", this);
	});
}

///------end-------->