$(function(){
	initGroup();
});

function initGroup() 
{
	$("#btnGroup").addClass("active", true);
	$("#btnRoles").removeClass("active", true);
	$("#btnModules").removeClass("active", true);
	$("#content").load(baseURL+"Auth/view_groups",function(){
		 groupList();
	});
}

function groupList() {
		var data = new Object();
		data.id="group_tbl";
		data.link=baseURL+"Auth/groupList",
		data.type="POST";
		data.destroy=true;
		data.paging=true;
		data.stateSave=false;
		data.info=true;
		data.searching=true;
		data.rowsGroup=[2,3];
		data.columns=[
			{ data: "name" },
			{ data: "description" },
			{
				data: "typegrp",
				render: function (data, type, row, meta) {
					switch (data) {
						case "trans":
							return '<div class="p-1 bg-primary  text-white">Transaction</span>';
							break;
						case "lib":
							return '<div class="p-1 bg-warning text-white">Library</span>';
							break;
						case "rep":
							return '<div class="p-1 bg-danger text-white">Reports</span>';
							break;
						case "admin":
							return '<div class="p-1 bg-info text-white">Administrator</span>';
							break;
						default:
							return "N/A";
					}
				},
			},
			{
				data: "isSub",
				render: function (data, type, row, meta) {
					switch (data) {
						case "Y":
							return '<div class="p-1 bg-success text-white">w/ Sub</div>';
							break;
						case "N":
							return '<div class="p-1 bg-info text-white">w/o Sub</div>';
							break;

						default:
							return "N/A";
					}
				},
			},
			{
				data: "isActive",
				render: function (data, type, row, meta) {
					switch (data) {
						case "A":
							return '<span class=" text-success"> Active</span>';
							break;
						case "I":
							return '<span class=" text-danger"><i class="fa fa-warning"></i> Inactive</span>';
							break;
						default:
							return "N/A";
					}
				},
			},
			{
				render: function (data, type, row) {
					if (row.isSub == "N") {
						return (
							"<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>" +
							"<i class='fa fa-th-list'></i>" +
							"</button>" +
							"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
							"<a class='dropdown-item' id='btnEditgrp' onclick ='groupEdit(" +
							row.id +
							")';  href='#'><i class='fa fa-pencil'></i>&nbsp Edit</a>" +
							"<a class='dropdown-item' id='btnDeletegrp' onclick ='groupDelete(" +
							row.id +
							")'; href='#'><i class='fa fa-trash'></i>&nbsp Delete</a></div>" +
							"</div>"
						);
					} else if ((row.isSub = "N")) {
						return (
							"<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>" +
							"<i class='fa fa-th-list'></i>" +
							"</button>" +
							"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
							"<a class='dropdown-item' id='btnEditgrp' onclick ='subMenuList(" +
							row.id +
							")';  href='#'><i class='fa fa-th-list'></i>&nbsp Sub menu</a>" +
							"<a class='dropdown-item' id='btnEditgrp' onclick ='groupEdit(" +
							row.id +
							")';  href='#'><i class='fa fa-pencil'></i>&nbsp Edit</a>" +
							"<a class='dropdown-item' id='btnDeletegrp' onclick ='groupDelete(" +
							row.id +
							")'; href='#'><i class='fa fa-trash'></i>&nbsp Delete</a></div>" +
							"</div>"
						);
					}
				},
			}];
		data.coldef = [{
					 targets:"_all",
					 className:"align-middle",
					  }];
	return  groupData = Datatable(data);
}

$("#subModal").on("hidden.coreui.modal", function () {
	$("#sub_tbl").DataTable().clear();
	$("#sub_tbl").DataTable().destroy();
	$("#subIDtemp").val("");
});

function subMenuList(param) {
	$("#subModal").modal("show");
	$("#subIDtemp").val(param);

	$("#sub_tbl").DataTable({
		ajax: baseURL + "Auth/submenuList/" + param,
		aLengthMenu: [
			[15, 20, 50, 75, -1],
			[15, 20, 50, 75, "All"],
		],
		serverSide: false,
		destroy: true,
		columns: [
			{ data: "name" },
			{ data: "description" },
			{
				data: "isActive",
				render: function (data, type, row, meta) {
					switch (data) {
						case "A":
							return '<span class="text text-success"> Active</span>';
							break;
						case "I":
							return '<span class="text text-danger"><i class="fa fa-warning"></i> Inactive</span>';
							break;
						default:
							return "N/A";
					}
				},
			},

			{
				data: "id",

				render: function (data, type, row) {
					return (
						"<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>" +
						"<i class='fa fa-th-list'></i>" +
						"</button>" +
						"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>" +
						"<a class='dropdown-item dropdown-item-sm' id='btnEditgrp' onclick ='groupEdit(" +
						data +
						")';  href='#'><i class='fa fa-pencil'></i>&nbsp Edit</a>" +
						"<a class='dropdown-item' id='btnDeletegrp' onclick ='groupDelete(" +
						data +
						")'; href='#'><i class='fa fa-trash'></i>&nbsp Delete</a></div>" +
						"</div>"
					);
				},
			},
		],
	});
}

function addSub() {
	$("#groupModal").modal("show");
	$("#subID").val($("#subIDtemp").val());
	$("#grpformIden").val("insert");
	$("#typelabel").hide();
	$("#typeform").hide();
	$("#submenulabel").hide();
	$("#issubform").hide();
}

function subCheck() {
	var sub = $("#isSub").val();
	if (sub == "Y") {
		$("#link").prop("disabled", true);
		$("#link").val("");
	} else if (sub == "N") {
		$("#link").prop("disabled", false);
	} else {
		$("#link").prop("disabled", false);
		$("#link").val("");
	}
}

function groupAdd() {
	$("#groupModal").modal("show");
	$("#grpformIden").val("insert");
	$("#typelabel").show();
	$("#typeform").show();
	$("#submenulabel").show();
}

function groupEdit(id) {
	var Obj = new Object();
	Obj.type = "POST";
	Obj.url = baseURL + "Auth/getGroupInfo/" + id;
	Obj.data = "JSON";
	var row = Information(Obj);
	console.log(row);
	subCheck();
	$("#grpformIden").val("update");
	$("#grpID").val(row["id"]);
	$("#nameggrp").val(row["name"]);
	$("#descgrp").val(row["description"]);
	$("#link").val(row["link"]);
	$("#icon").val(row["icon"]);

	if ($("#subIDtemp").val() == "") {
		$("#typegrp option[value=" + row["typegrp"] + "").prop("selected", true);
		$("#isSub option[value=" + row["isSub"] + "").prop("selected", true);
		$("#typegrp").prop("disabled", false);
		$("#isSub").prop("disabled", false);
	} else {
		$("#typegrp").prop("disabled", true);
		$("#isSub").prop("disabled", true);
		$("#typelabel").hide();
		$("#typeform").hide();
		$("#submenulabel").hide();
		$("#issubform").hide();
	}

	$("#isActive option[value=" + row["isActive"] + "").prop("selected", true);
	$("#groupModal").modal("show");
}

function subEdit(id) {
	var Obj = new Object();
	Obj.type = "POST";
	Obj.url = baseURL + "Auth/subMenuInfo/" + id;
	Obj.data = "JSON";
	var row = Information(Obj);
	$("#grpformIden").val("update");
	$("#grpID").val(row["id"]);
	$("#nameggrp").val(row["name"]);
	$("#descgrp").val(row["description"]);
	$("#link").val(row["link"]);
	$("#icon").val(row["icon"]);
	alert($("#subIDtemp").val());
	if ($("#subID").val() != "") {
		$("#typegrp option[value=" + row["typegrp"] + "").prop("selected", true);
		$("#isSub option[value=" + row["isSub"] + "").prop("selected", true);
	}

	$("#isActive option[value=" + row["isActive"] + "").prop("selected", true);
	$("#groupModal").modal("show");
}

function groupDelete(id) {
	$("#groupModalDel").modal("show");
	$("#grpIDDel").val(id);
}



$("#frmGroupDel").on("submit", function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Auth/saveGroup",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#groupModalDel").modal("hide");
			toastr.success("Successfully Deleted! ", "Success");

			if ($("#subID").val() == "") {
				groupList();
			} else {
				subMenuList($("#subID").val());
			}
		},

		error: function (xhr, desc, err) {
			toastr.error(xhr, "Error");
		},
	});
	return false;
});

function validate(file) {
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();      
    var arrayExtensions = ["csv"];

    if (arrayExtensions.lastIndexOf(ext) == -1) {
		toastr.error("File is not valid!",'Warning!');
        $("#menuFile").val("");
    }
}
