function  patientList(data)
	{
		 $('#csvTable').DataTable({
			"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
			"serverside":true,
			"processing":true,
			"data":data,
			"responsive": true,
			"destroy":true,
			"searching":true,
			"paging":true,
			"columns" : [
				{"data":PATIENTNO},
				{"data":LASTNAME},
				{"data":FIRSTNAME},
				{"data":MIDDLENAME},
				{"data":SEX},
				{"data":DBIRTH},
				{"data":BPLACE},
				{"data":PROVINCE},
				{"data":ADDRESS},
				{"data":BARANGAY},
				{"data":MUNICIPALITY},
				{"data":ZIPCODE},
			]});
	}


	$("#frmMenuUpload").on("submit", function (e) {
		var form = this;
		$.ajax({
			type: "POST",
			url: baseURL + "Importer/importbiz",
			data: new FormData(this),
			processData: false,
			contentType: false,
			xhr: function() {
			var xhr = $.ajaxSettings.xhr();
			xhr.upload.onprogress = function(e) {
				var progress=Math.floor(e.loaded / e.total *100) + '%';
				$("#progress").css("width",progress);
				$('#progress').attr('aria-valuenow', progress).css('width', progress);
				$("#text").text(progress);
			};
			return xhr;
			},
			success: function (data, response) {
				console(data);
				$('#progress').attr('aria-valuenow', 0).css('width', 0);
				$("#text").text(0);
				toastr.success("File Uploaded! ", "Success");
				$("#modalUpload").modal("hide");
		 		 patientList(data);
			},
	
			error: function (xhr, desc, err) {
				toastr.error(xhr, "Error");
			},
		});
		return false;
	});