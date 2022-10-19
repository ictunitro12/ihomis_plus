var baseURL = $('#base_url').val();

$('#frmMiscellaneous').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_Miscellaneous/saveMiscellaneous";
		$.ajax({
			type: "POST",
			url: POSTURL,
			dataType: "JSON",
			cache: false,
			async: true,
			data: $(form).serialize(),
			success: function (data) {
				if ($('#addID').val() == 'insert') {
					toastr.success('Record successfully saved.', 'Success');
					$('#ModalAddMiscellaneous').modal('hide');
					MiscellaneousList();
				}
				else if ($('#addID').val() == 'update') {
					toastr.success('Record successfully updated.', 'Success');
					$('#ModalAddMiscellaneous').modal('hide');
					MiscellaneousList();
				}
			},
			error: function (data) {
				toastr.error('Code already exist!', 'Error');
			}
		});
		return false;
		$(form).submit();
	},

	rules: {
		key: 'required',
		mdesc: 'required',
		ma: 'required',
		mdao: 'required',
	},

	messages: {
		key: 'Code is required!',
		mdesc: 'Description is required!',
		ma: 'Rate is required!',
		mdao: 'Date as of is required!',
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