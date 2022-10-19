$(document).ready(function () {
  const enccode = $("#enccode").val();
  const hpercode = $("#hpercode").val();

  getPresentIllnessHistoryData = function (enccode) {
    $.ajax({
      url: baseURI + "present-illness-history/" + enccode + "/get/",
      type: "GET",
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        bindPresentIllnessHistoryData(data.data);
      },
    });
  };

  bindPresentIllnessHistoryData = function (data) {
    $("#present_illness_history").val(data.history);

    //uppercase();
  };

  $("#present_illness_history_form").submit(function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    formData.append("hpercode", hpercode);
    formData.append("enccode", enccode);

    submitPresentIllnessHistory(formData, enccode);
  });

  submitPresentIllnessHistory = function (formData, enccode, loadData = false) {
    $.ajax({
      url: baseURI + "present-illness-history/" + enccode + "/save/",
      type: "POST",
      data: formData,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        toastr.success(data.message, "Success");

        if (loadData) {
          getPresentIllnessHistoryData(data.data.enccode);
        }
      },
    });
  };

  /* deletePresentIllnessHistory = function (enccode, dateLog) {
        $.ajax({
			url: baseURI + "present-illness-history/" + enccode + "/delete/",
			type: "POST",
			data: jQuery.param({
				enccode: enccode,
				datelog: dateLog,
			}),
			dataType: "JSON",
			success: function (data, response) {
				toastr.success(data.message, "Success");
				getPresentIllnessHistoryData(enccode);
			},
		});
    }; */

  /* $("#presentIllnessHistory").on("click", ".clearIllnessHistory", function () {
		$(".illness_history").val("");
	}); */

  /* $("#presentIllnessHistory").on("click", ".addIllnessHistory", function () {
		let formData = new FormData();

		const illnessHistory = $("#presentIllnessHistory .illness_history").val();

		if (illnessHistory !== "") {
			formData.append("history", illnessHistory);
			formData.append("hpercode", hpercode);
			formData.append("enccode", enccode);

			$.ajax({
				url: baseURI + "present-illness-history/" + enccode + "/store/",
				type: "POST",
				data: formData,
				dataType: "JSON",
				processData: false,
				contentType: false,
				success: function (data, response) {
					toastr.success(data.message, "Success");
                    getPresentIllnessHistoryData(enccode);
				},
			});
		}
	}); */

  /* $("#presentIllnessHistory").on("click", ".editIllnessHistory", function () {
		const dateLog = $(this).attr('data-date');
        let parent = $(this).parentsUntil("tbody");
        //const oldParent = parent;
        const value = parent.children('tr td:nth-child(1)').text();

        html = `
            <td>
                <div class="input-group">
                    <input class="form-control form-control-sm edit_illness_history" type="text" name="history" value="`+value+`" placeholder="Enter Illness History">
                </div>
            </td>
            <td>
                <span class="btn btn-success updateIllnessHistory" data-date="`+dateLog+`"><i class="fa fa-save" aria-hidden="true"></i></span>&nbsp;<span class="btn btn-secondary cancelIllnessHistory"><i class="fa-times fa fa-undo" aria-hidden="true"></i></span>
            </td>
        `;

        parent.html(html);
        //console.log(parent.child);
        uppercase();
	}); */

  /* $("#presentIllnessHistory").on("click", ".updateIllnessHistory", function () {
        let formData = new FormData();
        const dateLog = $(this).attr('data-date');

		const illnessHistory = $("#presentIllnessHistory .edit_illness_history").val();

		if (illnessHistory !== "") {
			formData.append("history", illnessHistory);
			formData.append("hpercode", hpercode);
			formData.append("enccode", enccode);
            formData.append("datelog", dateLog);

			$.ajax({
				url: baseURI + "present-illness-history/" + enccode + "/update/",
				type: "POST",
				data: formData,
				dataType: "JSON",
				processData: false,
				contentType: false,
				success: function (data, response) {
					toastr.success(data.message, "Success");
                    getPresentIllnessHistoryData(enccode);
				},
			});
		}
    }); */

  /* $("#presentIllnessHistory").on("click", ".removeIllnessHistory", function () {
        const dateLog = $(this).attr('data-date');

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
				deletePresentIllnessHistory(enccode, dateLog);
			}
		});
	}); */
});
