$(document).ready(function() {
	Icd10List();
	SelIcd10();
});
function Icd10List() {
	var data = new Object();
	data.id = "Icd10Table";
	data.link = baseURL + "Ref_PhicRef/PhicRef_Icd10";
	data.type = "POST";
	data.coldef = [{
		targets: [0,5,6,7],
		visible: false,
	},
	{
		targets: [3],
		searchable: false,
		orderable:false,
		render: function(data, type, row) {
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
	}
	];
	loadTable(data);
}
$("#Icd10Table").on("click", ".ModalDeleteIcd", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteIcd10').modal('show');
	$("#formIdentification").val('delete');
	$("#deletekey").val(data['refintkey']);

});

$("#Icd10Table").on("click", ".ModalEditIcd", function () {
	var data = $(this).data();
	console.log(data);
	$('#ModalAddIcd10').modal('show');
	$("#formIden").val('update');
	var refintkey =data['refintkey'];
	var diagcode = data['refcode'];
	setIcd10(diagcode);
	$("#selIcd10").val(data['refcode']);
	$("#refintkey").val(refintkey);
	$("#refdate").val($.datepicker.formatDate('yy-mm-dd', new Date(data['refdate'])));
	$("#compense option[value='" + data['compense']+"']").attr("selected","selected");
	$("#casetype option[value='" + data['casetype']+"']").attr("selected","selected");
});

function AddICD10() {
	$('#ModalAddIcd10').modal('show');
	$("#formIden").val('insert');
	
}

//-----Jobert 02-03-2022---->
function setIcd10(diagcode) {
	SelIcd10();
	var relSelect = $('#selIcd10');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicRef/setIcd10/' + diagcode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['diagdesc'], obj['diagcode'], true, true);
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

function SelIcd10() {
	$('#selIcd10').select2({
		theme: 'coreui',
		placeholder: 'ICD 10 ',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicRef/searchIcd10",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchIcd10: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.diagcode,
						text: item.diagdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selIcd10').on('change', function () {
		var data = $("#selIcd10 option:selected", this);
	});
}

///------end-------->