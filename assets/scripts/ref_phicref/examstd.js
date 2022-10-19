$(document).ready(function () {
	ExamStdList();
	SelExamStd();
});

function ExamStdList() {
	var data = new Object();
	data.id = "ExamStdTable";
	data.link = baseURL + "Ref_PhicRef/PhicRef_Exam";
	data.type = "POST";
	data.coldef = [{
		targets: [4],
		searchable: false,
		orderable: false,
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
	},
	{
		targets: [0, 1, 5, 6],
		visible: false,
	},
	];
	loadTable(data);
}
$("#ExamStdTable").on("click", ".ModalDeleteExamstd", function () {
	var data = $(this).data();
	console.log(data);
	$('#DeleteExamstd').modal('show');
	$("#deleteIDexam").val('delete');
	$("#deletecodeexam").val(data['refintkey']);

});

$("#ExamStdTable").on("click", ".ModalEditExam", function () {
	var data = $(this).data();
	console.log(data);
	$('#ModalAddExam').modal('show');
	$("#formIdenexam").val('update');
	var refintkey = data['refintkey'];
	var proccode = data['refcode'];
	setExamstd(proccode);
	$("#selExamstd").val(data['refcode']);
	$("#refintkeys").val(refintkey);
	$("#refdates").val($.datepicker.formatDate('yy-mm-dd', new Date(data['refdate'])));
	$("#compense option[value='" + data['compense'] + "']").attr("selected", "selected");
});

function AddExamStd() {
	$("#formIdenexam").val('insert');
	$('#ModalAddExam').modal('show');
}
//-----Jobert 02-07-2022---->
function setExamstd(proccode) {
	SelExamStd();
	var relSelect = $('#selExamstd');
	$.ajax({
		type: 'POST',
		url: baseURL + 'Ref_PhicRef/setExamstd/' + proccode,
	}).then(function (data) {
		var obj = $.parseJSON(data);
		var option = new Option(obj['procdesc'], obj['proccode'], true, true);
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

function SelExamStd() {
	$('#selExamstd').select2({
		theme: 'coreui',
		placeholder: 'Exam - Std',
		allowClear: true,
		encryption: true,
		ajax: {
			url: baseURL + "/Ref_PhicRef/searchExamstd",
			dataType: "json",
			type: "POST",
			delay: 250,
			data: function (params) {
				return {
					searchExamstd: params.term
				};
			},
			processResults: function (data) {
				var results = [];
				$.each(data, function (index, item) {
					results.push({
						id: item.proccode,
						text: item.procdesc
					});
				});
				return {
					results: results
				}
			}
		}
	});
	$('#selExamstd').on('change', function () {
		var data = $("#selExamstd option:selected", this);
	});
}

///------end-------->