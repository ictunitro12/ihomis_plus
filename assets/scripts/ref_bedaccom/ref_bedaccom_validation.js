function AddBedAccom() {
	$('#ModalAddBedAccom').modal({ backdrop: 'static' }).draggable({});;
	$("#formIden").val('insert');
	$("#rmasof").val(getTimeLocale());
	$('#currency option[value="PESO"]').prop("selected", true);
	$('#wpay option[value="Y"]').prop("selected", true);
	$('#status option[value="A"]').prop("selected", true);
	$("#code").prop('readonly', false);

	SelUnitMeasure();
}

$("#BedAccomTable").on("click", ".ModalEditBedAccom", function () {
	var data = $(this).data();
	var uomcode = $(this).data('bccode');
	var obj = getBedAccom(data['rmacccod'], data['rmaccdesc'], data['bccode']);
	var now = new Date();
	var uom = btoa(uomcode);

	$('#ModalAddBedAccom').modal({ backdrop: 'static' }).draggable({});;
	$("#formIden").val('update');
	$("#code").prop('readonly', true);
	$("#code").val(obj['rmacccod']);
	$("#name").val(obj['rmaccdesc']);
	$("#rmrate").val(obj['rmrate']);
	var dateasof = setTimeLocale(obj['rmrteasof']);
	$("#dteasof").val(dateasof);
	$("#rmasof").val(dateasof);
	$("#intkey").val(obj['rmaccikey']);
	$('#currency option[value="' + obj['curcode'] + '"]').prop("selected", true);
	$('#wpay option[value="' + obj['rmwpay'] + '"]').prop("selected", true);
	$('#status option[value="' + obj['rmstat'] + '"]').prop("selected", true);

	SelUnitMeasure();
	setUnitMeasure(uom);
});

$("#BedAccomTable").on("click", ".ModalDeleteBedAccom", function () {
	var data = $(this).data();

	$('#DeleteBedAccom').modal({ backdrop: 'static' }).draggable({});;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['rmacccod']);
	$("#desc").text(data['rmaccdesc']);
});

function getBedAccom(rmacccod, rmaccdesc, bccode) {
	var rmacccod = encodeURIComponent(encodeURIComponent(rmacccod));
	var rmaccdesc = encodeURIComponent(encodeURIComponent(rmaccdesc));
	var bccode = encodeURIComponent(encodeURIComponent(bccode));
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_BedAccom/getBedAccom/" + rmacccod + "/" + rmaccdesc + "/" + bccode,
		data: "JSON",
		async: false,
		success: function (data, status) {
			obj = $.parseJSON(data);
		},
		error: function (data, status) {
		}
	});
	return obj;
}

function intrmkey() {
	var date = new Date($('#rmasof').val());
	var dao = (zeroFill((date.getMonth() + 1)) + '' + zeroFill((date.getDate())) + '' + date.getFullYear());
	
	$('#intkey').val($('#code').val() + dao);
}

$('#frmBedAccom').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_BedAccom/saveBedAccom";
		$.ajax({
			type: "POST",
			url: POSTURL,
			dataType: "JSON",
			cache: false,
			async: true,
			data: $(form).serialize(),
			success: function (data) {
				if ($('#formIden').val() == 'insert') {
					toastr.success('Record successfully saved.', 'Success');
					$('#ModalAddBedAccom').modal('hide');
					$("#ProcDetailsTable").DataTable().ajax.reload();
				}
				else if ($('#formIden').val() == 'update') {
					toastr.success('Record successfully updated.', 'Success');
					$('#ModalAddBedAccom').modal('hide');
					$("#ProcDetailsTable").DataTable().ajax.reload();
				}
			},
			error: function (data) {
				toastr.error('Dont change the code!', 'Error');
			}
		});
		return false;
		$(form).submit();
	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox') {
			error.insertAfter(element.parent('label'));
		} else if (element.hasClass('select2-hidden-accessible')) {
			element = $("#selReg" + element.attr("id") + "ul").parent();

			error.insertAfter(element);
		}
		else {
			error.insertAfter(element);
		}
	},

	highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		if ($(element).hasClass('select2-offscreen')) {
			element = $("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass('is-invalid').removeClass('is-valid');
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass('is-valid').removeClass('is-invalid');
		if ($(element).hasClass('select2-offscreen')) {
			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
		}
	}
});

