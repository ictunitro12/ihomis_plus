$("#frmGroup").validate({
	submitHandler: function (form) {
		alert('');
		var POSTURL = baseURL + "Auth/saveGroup";
		$.ajax({
			type: "POST",
			url: POSTURL,
			dataType: "JSON",
			cache: false,
			async: true,
			data: $(form).serialize(),
			success: function (data) {
				if ($("#grpformIden").val() == "insert") {
					toastr.success("Group Added!", "Success");
					$("#groupModal").modal("hide");
					if ($("#subID").val() == "") {
						groupList().ajax.reload();
					} else {
						subMenuList($("#subID").val());
					}
				} else if ($("#grpformIden").val() == "update") {
					toastr.success("Group Updated!", "Success");
					$("#groupModal").modal("hide");
					if ($("#subID").val() == "") {
						groupList().ajax.reload();
					} else {
						subMenuList($("#subID").val());
					}
				} else {
					toastr.error("no post", "data");
				}
			},
			error: function (data, xhr, text) {
				toastr.error(data, "data");
				toastr.error(xhr, "xhr");
				toastr.error(text, "text");
			},
		});
		return false;
		$(form).submit();
	},
	rules: {
		nameggrp: "required",
		descgrp: "required",
		link: "required",
		typegrp: "required",
		isSub : "required",
		isActive: "required",
	},
	messages: {
		nameggrp: "Enter group name!",
		descgrp: "Enter Description!",
		link: "Enter Link!",
		typegrp: "Select Type!",
		isSub: "Select with sub menu or w/o sub menu!",
		isActive: "Select Status!",
	},
	errorElement: "span",
	errorPlacement: function errorPlacement(error, element) {
		error.addClass("invalid-feedback");
		error.insertAfter(element);
	},

	highlight: function highlight(element) {
		$(element).addClass("is-invalid").removeClass("is-valid");
		if ($(element).hasClass("select2-offscreen")) {
			element = $("#s2id_" + element.attr("id") + " ul").parent();
			$(element).addClass("is-invalid").removeClass("is-valid");
		}
	},

	unhighlight: function unhighlight(element) {
		$(element).addClass("is-valid").removeClass("is-invalid");
		if ($(element).hasClass("select2-offscreen")) {
			$("#s2id_" + element.attr("id") + " ul")
				.removeClass("is-invalid")
				.addClass("is-valid");
		}
	},
});

$("#frmMenuUpload").on("submit", function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Auth/uploadMenu",
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
			$('#progress').attr('aria-valuenow', 0).css('width', 0);
			$("#text").text(0);
			toastr.success("File Uploaded! ", "Success");
			$("#modalUpload").modal("hide");
			groupList();
		},

		error: function (xhr, desc, err) {
			toastr.error(xhr, "Error");
		},
	});
	return false;
});

$('#frmMainDelete').submit('click',function(){
		$.ajax({
		type : "POST",
		url  : baseURL+"auth/deleteMenu",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response)
		{
			toastr.success('Menu Successfully delete!' ,'Deleted');
			$("#groupModalDel").modal('hide');
			groupList().ajax.reload();
		}
		});
		return false;
});


$("#btnUpload").on('click',function(){
	$("#modalUpload").modal({backdrop:true});
});

 