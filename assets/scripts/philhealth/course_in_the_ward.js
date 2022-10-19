$(document).ready(function () {
	const enccode = $("#enccode").val();
	const hpercode = $("#hpercode").val();

	$(".addDoctorsOrder").on("click", function () {
		$("#addDoctorsOrderModal .modal-title").html("Add Doctor's Order");
		$("#doctors_order_type").val("add");
		$("#addDoctorsOrderModal").modal("show");
	});

	$("#addDoctorsOrderModal .close-modal").on("click", function () {
		$("#addDoctorsOrderModal").modal("hide");
		$("#doctorsOrderForm").trigger("reset");
	});

	$("#doctorsOrderForm").submit(function (e) {
		e.preventDefault();

		const type = $("#doctors_order_type").val();
		let formData = new FormData(this);

		formData.append("hpercode", hpercode);
		formData.append("enccode", enccode);

		var admdate = $("#admissiondate").text();
		var disdate = $("#dischargeddate").text();

		formData.append("admdate", admdate);
		formData.append("disdate", disdate);

		if (type === "add") {
			saveDoctorsOrder(formData, enccode);
		}

		if (type === "edit") {
            const oldDate = $("#old_date").val();
            const oldTime = $("#old_time").val();

            formData.append("old_date", oldDate);
			formData.append("old_time", oldTime);
			updateDoctorsOrder(formData, enccode);
		}
	});

	$("#courseInTheWardTable").on("click", ".edit", function () {
		const date = $(this).attr("data-date");
		const time = $(this).attr("data-time");

		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/get/",
			type: "GET",
			data: jQuery.param({
				enccode: enccode,
				dtetake: date,
				tmetake: time,
			}),
			dataType: "JSON",
			success: function (data, response) {
                $("#old_date").val(date);
                $("#old_time").val(time);

				$("#dtetake").val(data.data.dtetake);
				/*$("#tmetake").val( "18:01:07" );*/
				$("#tmetake").val(data.data.tmetake);
				$("#crseward").val(data.data.crseward);

				$("#addDoctorsOrderModal .modal-title").html("Edit Doctor's Order");
				$("#doctors_order_type").val("edit");
				$("#addDoctorsOrderModal").modal("show");
			},
		});
	});

	$("#courseInTheWardTable").on("click", ".delete", function () {
		const date = $(this).attr("data-date");
		const time = $(this).attr("data-time");

		Swal.fire({
			title: "Are you sure you want to delete this record?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Yes",
			allowOutsideClick: false,
		}).then((result) => {
			if (result.isConfirmed) {
				deleteDoctorsOrder(enccode, date, time);
			}
		});
	});

	deleteDoctorsOrder = function (enccode, date, time) {
		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/delete/",
			type: "POST",
			data: jQuery.param({
				enccode: enccode,
				dtetake: date,
				tmetake: time,
			}),
			dataType: "JSON",
			success: function (data, response) {
				toastr.success(data.message, "Success");
				$("#addDoctorsOrderModal").modal("hide");
				/*getCourseInTheWardData(enccode);*/
				getCourseInTheWardAllData(enccode);
			},
		});
	};

	saveDoctorsOrder = function (formData, enccode) {
		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/store/",
			type: "POST",
			data: formData,
			dataType: "JSON",
			processData: false,
			contentType: false,
			success: function (data, response) {
				toastr.success(data.message, "Success");
				$("#addDoctorsOrderModal").modal("hide");
				$("#doctorsOrderForm").trigger("reset");
				getCourseInTheWardAllData(enccode);
			},
		});
	};

	updateDoctorsOrder = function (formData, enccode) {
		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/update/",
			type: "POST",
			data: formData,
			dataType: "JSON",
			processData: false,
			contentType: false,
			success: function (data, response) {
				toastr.success(data.message, "Success");
				$("#addDoctorsOrderModal").modal("hide");
				$("#doctorsOrderForm").trigger("reset");
				getCourseInTheWardAllData(enccode);
			},
		});
	};

	getCourseInTheWardAllData = function (enccode) {
		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/get-all/",
			type: "GET",
			dataType: "JSON",
			processData: false,
			contentType: false,
			success: function (data, response) {
				loadCourseInTheWardDatatable(data.data);
			},
		});
	};

	getCourseInTheWardSingleData = function (enccode, date, time) {
		$.ajax({
			url: baseURI + "course-in-the-ward/" + enccode + "/get/",
			type: "POST",
			data: jQuery.param({
				enccode: enccode,
				dtetake: date,
				tmetake: time,
			}),
			dataType: "JSON",
			success: function (data, response) {},
		});
	};

	loadCourseInTheWardDatatable = function (data) {
		$("#courseInTheWardTable").DataTable({
			oLanguage: {
				sProcessing:
					'<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
			},
			data: data,
			destroy: true,
			processing: true,
			columns: [
				{
					data: "dtetake",
				},
				{
					data: "time",
				},
				{
					data: "crseward",
				},
				{
					data: null,
					orderable: false,
					render: function (data, type, row, meta) {
						return (
							`<div class="btn-group btn-ladda btn-sm" data-layout="zoom-in">
								<button type="button" data-enccode="` +
							data.enccode +
							`" data-date="` +
							data.dtetake +
							`" data-time="` +
							data.tmetake +
							`" class="btn btn-success btn-sm edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil fa-xs"></i></button>
							</div>`
						);
					},
				},
				{
					data: null,
					orderable: false,
					render: function (data, type, row, meta) {
						return (
							`<div class="btn-group btn-ladda btn-sm" data-layout="zoom-in">
								<button type="button" data-enccode="` +
							data.enccode +
							`" data-date="` +
							data.dtetake +
							`" data-time="` +
							data.tmetake +
							`" class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash fa-xs"></i></button>
							</div>`
						);
					},
				},
			],
		});
	};
});
