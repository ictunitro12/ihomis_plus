var baseURL=$('#base_url').val();

$("#form-step-1").validate({
	rules: {
		_selFamilyType: 'required'
	},
	messages: {
		_selFamilyType: 'Required!'
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


$("#form-step-2").validate({
	rules: {
		nextvisit: 'required',
		selEmployees: 'required',
		client_selFamilyType: 'required',
		assess_selFamilyMethod: 'required',
	},
	messages: {
		nextvisit: 'Required!',
		selEmployees: 'Required!!',
		client_selFamilyType: 'Required!',
		assess_selFamilyMethod: 'Required!',
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
