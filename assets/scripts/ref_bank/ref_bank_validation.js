function AddBank() {
	$('#ModalAddBank').modal({ backdrop: 'static' }).draggable({});
	$("#formIden").val('insert');
	$('#status option[value="A"]').prop("selected", true);
	$("#code").prop('readonly', false);
}

$("#BankTable").on("click", ".ModalEditBank", function () {
	var data = $(this).data();
	var bnkcode = atob(data['bnkcode']);
	var bnkname = atob(data['bnkname']);
	var bnkstat = atob(data['bnkstat']);
	var bnkabbrev = atob(data['bnkabbrev']);

	$('#ModalAddBank').modal({ backdrop: 'static' }).draggable({});
	$("#formIden").val('update');
	$("#code").val(bnkcode);
	$("#name").val(bnkname);
	$("#abbrv").val(bnkabbrev);
	$('#status option[value="' + bnkstat + '"]').prop("selected", true);
	$("#code").prop('readonly', true);
});

$("#BankTable").on("click", ".ModalDeleteBank", function () {
	var data = $(this).data();
	var bnkcode = atob(data['bnkcode']);
	var bnkname = atob(data['bnkname']);

	$('#DeleteBank').modal({ backdrop: 'static' }).draggable({});
	$("#formIdentification").val('delete');
	$("#deletecode").val(bnkcode);
	$("#bank").text(bnkname);
});


$('#frmBank').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_Bank/saveBank";
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
					$('#ModalAddBank').modal('hide');
					BankList();
				}
				else if ($('#formIden').val() == 'update') {
					toastr.success('Record successfully updated.', 'Success');
					$('#ModalAddBank').modal('hide');
					BankList();
				}
			},
			error: function (data) {
				toastr.error('Error on saving!', 'Error');
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