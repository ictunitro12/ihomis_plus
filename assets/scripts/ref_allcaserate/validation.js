var baseURL = $('#base_url').val();

$('#frmAllCaseRate').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_AllCaseRate/saveAllCaseRate";
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
					$('#ModalAddAllCaseRate').modal('hide');
					AllCaseRateList();
				}
				else if ($('#addID').val() == 'update') {
					toastr.success('Record successfully updated.', 'Success');
					$('#ModalAddAllCaseRate').modal('hide');
					AllCaseRateList();
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
		cdesc: 'required',
		ctype: 'required',
		frate: 'required',
		fpf: 'required',
		fhosp: 'required',
	},

	messages: {
		key: 'Case code is required!',
		cdesc: 'Case description is required!',
		ctype: 'Case type is required!',
		frate: 'First case rate is required',
		fpf: 'First case PF share is required',
		fhosp: 'First case hospital share is required',
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