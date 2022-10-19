$(document).ready(function () {
	MiscellaneousList();
	SelMisc();
});

function MiscellaneousList() {

	var data = new Object();
	data.id = "MiscellaneousTable";
	data.link = baseURL + "Ref_PhicRef/PhicRef_Miscellaneous";
	data.type = "POST";
	data.coldef = [
		{
			targets: [0, 1, 2, 3],
			visible: false,
		},
		{
			targets: [6],
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

$("#MiscellaneousTable").on("click", ".ModalDeleteMiscell", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteMiscell').modal('show');
	$("#deleteIDMisc").val('delete');
	$("#deletecodemisc").val(atob(data['refintkey']));

});

$("#MiscellaneousTable").on("click", ".ModalEditMiscell", function () {
	var data = $(this).data();
	console.log(data);
	$('#ModalAddMiscellaneous').modal('show');
	$("#formIdenMiscel").val('update');
	var refintkey = atob(data['refintkey']);
	var hmcode = atob(data['refcode']);
	setMisc(hmcode);
	$("#selMisc").val(atob(data['refcode']));
	$("#refintkeymiscell").val(refintkey);
	$("#refdatemiscell").val($.datepicker.formatDate('yy-mm-dd', new Date(atob(data['refdate']))));
	$("#orinclstmisc option[value='" + atob(data['orinclst']) + "']").attr("selected", "selected");
});

function AddMiscellaneous() {
	$("#formIdenMiscel").val('insert');
	$('#ModalAddMiscellaneous').modal('show');
}
//-----Jobert 02-11-2022---->
function setMisc(hmcode) {
	SelMisc();
	var relSelect = $('#selMisc');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicRef/setMiscellaneous/' + hmcode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['hmdesc'], obj['hmcode'], true, true);
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

function SelMisc() {
	$('#selMisc').select2({
		theme: 'coreui',
		placeholder: 'miscellaneous',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicRef/searchMiscellaneous",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchMiscellaneous: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.hmcode,
						text: item.hmdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selMisc').on('change', function () {
		var data = $("#selMisc option:selected", this);
	});
}

///------end-------->

