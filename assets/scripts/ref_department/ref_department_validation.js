function AddDepartment() {
	$('#ModalAddDepartment').modal({ backdrop: 'static' }).draggable({});;
	$("#formIden").val('insert');
	$('#status option[value="A"]').prop("selected", true);
	$("#code").prop('readonly', false);
}

$("#DepartmentTable").on("click", ".ModalEditDepartment", function () {
	var data = $(this).data();

	$('#ModalAddDepartment').modal({ backdrop: 'static' }).draggable({});;
	$("#formIden").val('update');
	$("#code").val(data['deptcode']);
	$("#name").val(data['deptname']);
	$("#abbr").val(data['deptabb']);
	$("#rema").val(data['deptrem']);
	$('#status option[value="' + data['deptstat'] + '"]').prop("selected", true);
	$("#code").prop('readonly', true);
});

$("#DepartmentTable").on("click", ".ModalDeleteDepartment", function () {
	var data = $(this).data();

	$('#DeleteDepartment').modal({ backdrop: 'static' }).draggable({});;
	$("#formIdentification").val('delete');
	$("#deletecode").val(data['deptcode']);
	$("#department").text(data['deptname']);
});

$('#frmDepartment').validate({
	submitHandler: function (form) {
		var POSTURL = baseURL + "Ref_Department/saveDepartment";
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
					$('#ModalAddDepartment').modal('hide');
					DepartmentList();
				}
				else if ($('#formIden').val() == 'update') {
					toastr.success('Record successfully updated.', 'Success');
					$('#ModalAddDepartment').modal('hide');
					DepartmentList();
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

