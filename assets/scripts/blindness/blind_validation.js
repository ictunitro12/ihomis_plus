var baseURL=$('#base_url').val();
$("#form-step-1").validate({
	rules: {
		info_educat: 'required',
		info_hosppat_idno: 'required',
	},
	messages: {
		info_educat: 'required!',
		info_hosppat_idno: 'required',
	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');
		if (element.prop('type') === 'checkbox') {
			error.insertAfter(element.parent('label'));
		} else if (element.hasClass('select2-coreui-hidden-accessible')) {
			element = $("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
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


$("#form-step-4").validate({
	rules: {
		consult_lname: 'required',
	},
	messages: {
		consult_lname: 'Required!',
	},

	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');

		if (element.prop('type') === 'checkbox') {
			error.insertAfter(element.parent('label'));
		} else if (element.hasClass('select2-coreui-hidden-accessible')) {
			element = $("#sel" + element.attr("id") + "ul").parent();
			error.insertAfter(element.parent());
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

