	function initRoles() 
	{
		$("#btnGroup").removeClass("active", true);
		$("#btnRoles").addClass("active", true);
		$("#btnModules").removeClass("active", true);
		$("#content").load(baseURL+"Auth/view_roles",function(){
			 roleList();
		});
	}

	$("#frmRoles").validate({
		submitHandler: function (form){
			var POSTURL = baseURL + "Auth/saveRole";
			$.ajax({
				type: "POST",
				url: POSTURL,
				dataType: "JSON",
				cache: false,
				async: true,
				data: $(form).serialize(),
				success: function (data) {
					if ($("#roleFormIden").val() == "insert") {
						toastr.success("Role Added!", "Success");
						roleList();
						$("#modalRoles").modal("hide");
					} else if ($("#roleFormIden").val() == "update") {
						toastr.success("Role Updated!", "Success");
						roleList();
						$("#modalRoles").modal("hide");
					} else{
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
			roleName: "required",
			roleDesc: "required",
			roleStatus: "required",
		},
		messages: {
			roleName: "Enter Role name!",
			roleDesc: "Enter Description!",
			roleStatus: "Status is required!",
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


	

	function roleList() {
		var roleTable = $("#roleTbl").DataTable({
			ajax: baseURL + "Auth/rolesList",
			aLengthMenu: [
				[15, 20, 50, 75, -1],
				[15, 20, 50, 75, "All"],
			],
			serverSide: false,
			destroy: true,
			columns: [
				{ data: "roleID" },
				{ data: "roleName" },
				{
					data : "roleStat",
					render: function (data,type,row) 
					{
						switch(data)
						{
							case 'A' : return '<div class="p-2  bg-success text-white text-center"><i class="fa fa-check"></i> Active </div>'; break;
							case 'I' : return '<div class="p-2  bg-danger text-white text-center"><i class="fa fa-close"></i> Inactive </div>'; break;
							default  : return 'N/A';
						}
					}
				},
				{ 
					data : "roleID" ,
					render: function(data, type, row){
					return "<div class=btn-group role=group>"+
							"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
							"<i class='fa fa-th-list'></i>"+
							"</button>"+
							"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
								"<a class='dropdown-item' data-id='"+data+"' id='btnRole_Func' href='#'><i class='fa fa-list-ol'></i> &nbsp Functions</a>"+
								"<a class='dropdown-item' data-id='"+data+"' id='btnRole_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>"+
								"<a class='dropdown-item' data-id='"+data+"' id='btnRole_Delete' href='#'><i class='fa fa-trash'></i> &nbsp Delete</a>"+
							"</div>"+
						  "</div>";
				}	
				}
				
				
			],
		});
	roleTable.on('click','#btnRole_Edit',function(){
		var roleID= $(this).data('id');
		$.ajax({
		type: "POST",
		url: baseURL+"Auth/roleInfo/"+roleID,
		data: "JSON",
		success: function(data,status)
		{   
			var obj = $.parseJSON(data);
			$("#roleID").val(obj['roleID']);
			$("#roleName").val(obj['roleName']);
			$("#roleDesc").val(obj['roleDesc']);
			$("#roleStatus option[value=" + obj['roleStat'] + "]").prop('selected', true);
		}
		});
		$("#modalRoles").modal({backdrop:'static',show:true});
		$("#roleFormIden").val('update');
		$('#roleName').css('textTransform', 'capitalize');
	});
	
	roleTable.on('click','#btnRole_Func',function(){
		$('[name=roleID]').val($(this).data('id'));
		accessLevel();
		$("#modalAssign").modal({backdrop:'static',show:true});
	});
	
	
	}
	$("#btnAddRoles").on('click',function(){
		$("#modalRoles").modal({backdrop:'static',show:true});
		$("#roleFormIden").val('insert');
		$('#roleName').css('textTransform', 'capitalize');
	});

	$('#modalRoles').on('hidden.coreui.modal', function(event) {
		$(this).find("input,textarea,select").val('').end();
		$(this).find("input,textarea,select").removeClass('is-valid'); 
		$(this).find("input,textarea,select").removeClass('is-invalid');
		$(this).find("select").val('').trigger('change');;
	});


	$('#frmAssign').submit('click',function(){
		$.post(baseURL+"auth/deleteAssign/" + $('[name=roleID]').val());
		var formData = new FormData(this); 
		var roleTable = $("#accessRow").DataTable();
		var checkbox = $("#frmAssign").find("input[type=checkbox]");
		$.each(checkbox, function(key, val) {
			if($(val).is(':checked')==true)
			{
				var groupID= $(val).val();
				var roleID = $('[name=roleID]').val();
				var dataString = 'groupID='+groupID+'&roleID='+roleID;
					$.ajax({
						type : "POST",
						url  : baseURL+"auth/saveAssign",
						data :dataString,
						success: function(data,response){
							toastr.success('Success' ,'Success');
					},
					error: function(xhr, desc, err){
						toastr.error(xhr ,'Error');
					}
				});
			}
		});
		return false;
	});