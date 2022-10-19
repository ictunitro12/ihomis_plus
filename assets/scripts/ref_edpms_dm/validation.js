var baseURL = $('#base_url').val();

$('#frmEDPMS_DM').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_EDPMS_DM/saveEDPMS_DM";
		$.ajax({
			type: "POST",
			url: POSTURL,
			dataType: "JSON",
			cache: false,
			async: true,
			data: $(form).serialize(),
			success: function (data) {
				if ($('#addID').val() == 'insert') {
					toastr.success('Status successfully changed.', 'Success');
					$('#ModalAddEDPMS_DM').modal('hide');
					EDPMS_DMList();
				}
				else if ($('#addID').val() == 'update') {
					toastr.success('Successfully Updated! ', 'Success');
					$('#ModalAddEDPMS_DM').modal('hide');
					EDPMS_DMList();
				}
			},
			error: function (data) {
				toastr.error('Error on saving!', 'Error');
			}
		});
		return false;
		$(form).submit();
	},

	rules: {
		key: 'required',
		pdd: 'required',
		selGeneric: 'required',
		selSalt: 'required',
		selStrength: 'required',
		selForms: 'required',
		selPackaging: 'required',
	},

	messages: {
		key: 'Code is required!',
		pdd: 'Description is required!',
		selGeneric: 'Generic is required!',
		selSalt: 'Salt is required!',
		selStrength: 'Strength is required!',
		selForms: 'Form is required!',
		selPackaging: 'Packaging is required!',
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