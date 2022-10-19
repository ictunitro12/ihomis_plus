	function initPatientRecord(hpercode) 
	{
		PatientData(hpercode);
		visitList(hpercode);
		_tabRecord(hpercode);
		if($("#sex").text() == 'Male'){ 
			$("#new-born-tab").prop('hidden',true);
		}else{
			$("#new-born-tab").prop('hidden',false);
		}
	}

	function _tabRecord(hpercode) {
		$('a[data-toggle="tab"]').on("click", function (e){
			var tab = e.target.id;
			var percode = btoa(hpercode);
			switch (tab) {
				case "alr-tab":
				alertList(hpercode);
				break;
				case "new-born-tab":
				if ($('#encounter').val() == '') {
					checkHistory(percode);
				}
				break;
				case "visit-tab":
				visitList(hpercode);
				break;
				default:
			//admitList(hpercode, enccode);
			break;
		}
	});
	}


	function showResultDetails(hpercode, enccode) {
		var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
		var enccode = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "restbl";
		data.link = baseURL+"MedicalRecords/resultDetails/"+hpercode +"/"+enccode;
		data.type = "POST";
		data.destroy = true;
		data.searching = true;
		data.paging = true;
		data.info = true;
		data.columns = [ 
		{data: "toecode"},
		{data: "disdate"},
		{data: "dispcode"},
		{data: "condcode"},
		{data: "instruct"},
		{data : "enccode",
		render: function(data, type, row){
			return "<div class='btn-group btn-sm float-right'>"+
			"<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
			"<span class='caret'></span>"+
			"<span class='sr-only'>Toggle Dropdown</span>"+
			"</button>"+
			"<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>"+
			"<a href='javascript:void(0);' class='dropdown-item'  data-enccode='"+row.enccode+"'  data-hpercode='"+row.hpercode+"' id='btnEPR'><i class='fa fa-edit'></i>&nbsp Edit</a>"+
			"<a href='' class='dropdown-item'  data-enccode='"+row.enccode+"'  data-hpercode='"+row.hpercode+"' id='btnPatientRecord'><i class='fa fa-trash'></i>&nbsp Delete</a>"+
			"</div>"+
			"<button type='button'  id ='btnPatientProfile' data-enccode='"+row.enccode+"' data-toecode='"+row.toecode+"'  data-hpercode='"+row.hpercode+"' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-user-circle-o fa-sm'></i></button>"+
			"</div>";
		}	
	}];
	data.coldef=[
	{
		targets:"_all",
		className:"align-middle",
		ordering:false
	}];
	Datatable(data);
}

$("#restbl").on("click", ".editResult", function () {
	var hpercode = $(this).attr("data-hpercode");
	var enccode = $(this).attr("data-enccode");

	$.ajax({
		type: "POST",
		url: baseURL + "MedicalRecords/editResult",
		data: {
			hpercode: hpercode,
			enccode: enccode,
		},
		dataType: "JSON",
		success: function (data) {
			$("#reshpercode").val(data["hpercode"]);
			$("#resenccode").val(data["enccode"]);
			$("#resdisdate").val(data["disdate"]);
			$("#resdistime").val(data["distime"]);
			$("#resdispcode").val(data["dispcode"]);
			$("#rescondcode").val(data["condcode"]);
			$("#ResultEdit").modal("show");
		},
	});
});

$("#AddDeath").click(function () {
	$("#DeathCert").modal("show");
});

function showDeathDetails(enccode) {
	var enccode = encodeURIComponent(encodeURIComponent(enccode));

	$("#deathtbl").DataTable({
		oLanguage: {
			sProcessing:
			'<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....',
		},
		aLengthMenu: [
		[15, 20, 50, 75, -1],
		[15, 20, 50, 75, "All"],
		],
		ipageLength: 15,
		processing: true,
		serverSide: true,
		searching: true,
		responsive: true,
		info: true,
		orderable: true,
		paging: true,
		autoWidth: true,
		destroy: true,
		ajax: {
			url: baseURL + "MedicalRecords/deathDetails/" + enccode,
			type: "POST",
		},
		columnDefs: [
		{
			targets: [0, 1],
			visible: false,
			orderable: false,
		},
		],
	});
}


// function showNewBornDetails(hpercode) {
//   var hpercode = encodeURIComponent(encodeURIComponent(hpercode));

//   $("#nbtbl").DataTable({
//     oLanguage: {
//       sProcessing:
//         '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....',
//     },
//     aLengthMenu: [
//       [15, 20, 50, 75, -1],
//       [15, 20, 50, 75, "All"],
//     ],
//     ipageLength: 15,
//     processing: true,
//     serverSide: true,
//     searching: true,
//     responsive: true,
//     info: true,
//     orderable: true,
//     paging: true,
//     autoWidth: true,
//     destroy: true,
//     ajax: {
//       url: baseURL + "MedicalRecords/newbornDetails/" + hpercode,
//       type: "POST",
//     },
//     columnDefs: [
//       {
//         targets: [0],
//         visible: false,
//         orderable: false,
//       },
//     ],
//   });
// }

$("#addNewborn").click(function () {
	$("#frmaddfirstname").val("");
	$("#modalAddNewBorn").modal("show");
	$("#frmaddfirstname").focus();
	$("#frmaddnbenccode").val(varenccode);
});

// function showLiveBirthDetails(enccode) {
//   var enccode = encodeURIComponent(encodeURIComponent(enccode));

//   $("#lbtbl").DataTable({
//     oLanguage: {
//       sProcessing:
//         '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....',
//     },
//     aLengthMenu: [
//       [15, 20, 50, 75, -1],
//       [15, 20, 50, 75, "All"],
//     ],
//     ipageLength: 15,
//     processing: true,
//     serverSide: true,
//     searching: true,
//     responsive: true,
//     info: true,
//     orderable: true,
//     paging: true,
//     autoWidth: true,
//     destroy: true,
//     ajax: {
//       url: baseURL + "MedicalRecords/livebirthDetails/" + enccode,
//       type: "POST",
//     },
//     columnDefs: [
//       {
//         targets: [0, 1],
//         visible: false,
//         orderable: false,
//       },
//     ],
//   });
// }

