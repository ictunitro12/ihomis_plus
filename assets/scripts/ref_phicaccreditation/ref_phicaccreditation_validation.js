var baseURL = $('#base_url').val();

$('#frmPhicAccre').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_PhicAccreditation/savePhicAccreditation";
		$.ajax({
			type: "POST",
			url: POSTURL,
			dataType: "JSON",
			cache: false,
			async: true,
			data: $(form).serialize(),
			success: function (data) {
				if ($('#formIden').val() == 'insert') {
					toastr.success(' Successfully Saved! ', 'Success');
					$('#ModalAddPhicAccre').modal('hide');
					PhicAccreList();
				}
				else if ($('#formIden').val() == 'update') {
					toastr.success('Successfully Updated! ', 'Success');
					$('#ModalAddPhicAccre').modal('hide');
					PhicAccreList();
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
		pfacility: 'required',
		pfacilityname: 'required',
		paccreno: 'required',
		validity: 'required',
		phospitalcode: 'required',


	},
	messages: {
		pfacility: 'Facility type is required',
		pfacilityname: 'Facility name is required',
		paccreno: 'Accreditation is required',
		validity: 'Validity is required',
		phospitalcode: 'PMCC code is required',
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