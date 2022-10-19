var baseURL=$('#base_url').val();

$("#form-step-1").validate({
	rules: {
		info_fullname: 'required',
		info_lname: 'required',
		info_fname: 'required',
		info_mname: 'required',
		info_sex: 'required',
		info_dob: 'required',
		info_age: 'required',
		percode: 'required',
		info_street: 'required',
		selCity: 'required',
		selProv: 'required',
		selReg: 'required',
		selBrgy: 'required',
	},
	messages: {
		info_fullname: 'required',
		info_lname: 'required',
		info_fname: 'required',
		info_mname: 'required',
		info_sex: 'required',
		info_dob: 'required',
		info_age: 'required',
		percode: 'required',
		info_street: 'required',
		selCity: 'required',
		selProv: 'required',
		selReg: 'required',
		selBrgy: 'required',
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

// $("#form-step-2").validate({
// 	rules: {
// 		FIRST: 'required',
// 		place_consult: 'required',
// 		onset_ill: 'required!',
// 		consult: 'required!',
// 	},
// 	messages: {
// 		FIRST: 'required',
// 		place_consult: 'required!',
// 		onset_ill: 'required!',
// 		consult: 'required!',
// 	},

// 	errorElement: 'span',
// 	errorPlacement: function errorPlacement(error, element) {
// 		error.addClass('invalid-feedback');

// 		if (element.prop('type') === 'checkbox') {
// 			error.insertAfter(element.parent('label'));
// 		} else if (element.hasClass('select2-coreui-hidden-accessible')) {
// 			element = $("#sel" + element.attr("id") + "ul").parent();
// 			error.insertAfter(element.parent());
// 		}
// 		else {
// 			error.insertAfter(element);
// 		}
// 	},

// 	highlight: function highlight(element) {

// 		$(element).addClass('is-invalid').removeClass('is-valid');
// 		if ($(element).hasClass('select2-offscreen')) {
// 			element = $("#s2id_" + element.attr("id") + " ul").parent();
// 			$(element).addClass('is-invalid').removeClass('is-valid');
// 		}
// 	},

// 	unhighlight: function unhighlight(element) {
// 		$(element).addClass('is-valid').removeClass('is-invalid');
// 		if ($(element).hasClass('select2-offscreen')) {
// 			$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
// 		}
// 	}
// });
