var baseURL = $("#baseURL").val();

function TypeofProfServiceList() {
		var data = new Object();
		data.id = "TypeofProfServiceTable";
		data.link = baseURL + "Ref_TypeofProfService/TypeofProfServiceList";
		data.type = "POST";
		data.coldef = [{
				targets: [6, 7],
				render: function(data, type, row) {
					switch (data) {
						case 'PESO':
							return 'Peso';
							break;
						case 'YEN':
							return 'Yen';
							break;
						case 'DOLLA':
							return 'Dollar';
							break;
						case 'OTHER':
							return 'Others';
							break;
						case 'A':
							return '<i class="fa fa-check  text-success"></i>&nbsp Active';
							break;
						case 'I':
							return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive';
							break;
						default:
							return '<span> </span>';
					}
				},
			},
			{
				targets: [0, 4],
				visible: false,
			},
			{
				targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
				orderable: false,
			},
			{
				targets: [6, 7, 8],
				searchable: false,
			}
		];
		loadTable(data);
	}

	$("#TypeofProfServiceTable").on("click", ".ModalEditTypeofProfService", function() {
		var data = $(this).data();
		var obj = getTypeofProfService(data['key']);
		var nd = new Date();
		var Dateasof = new Date(obj['tprdte']);
		var ed = new Date(Dateasof.getTime() - nd.getTimezoneOffset() * 6000).toISOString().substring(0, 19);

		$('#ModalAddTypeofProfService').modal({
			backdrop: 'static'
		}).draggable({});
		$("#key").val(obj['tpikey']);
		$("#tcode").val(obj['tpcode']);
		$("#tdesc").val(obj['tpdesc']);
		$("#trate").val(obj['tprate']);
		$("#ted").val(ed);
		$('#ccode option[value="' + obj['currcode'] + '"]').prop("selected", true);
		$('#status option[value="' + obj['tpstat'] + '"]').prop("selected", true);
		$("#addID").val('update');
		$("#tcode").prop('readonly', true);
		$("#ted").prop('readonly', true);
		$('#ted').change(UpdateInfo);
	});

	function AddTypeofProfService() {
		$('#ModalAddTypeofProfService').modal({
			backdrop: 'static'
		}).draggable({});
		$("#addID").val('insert');
		$("#tcode").prop('readonly', false);
		$("#ted").prop('readonly', false);
		$('#ted').val(getTimeLocale());
		$('#tcode').change(UpdateInfo);
		$('#ted').change(UpdateInfo);
		$('#ccode option[value="PESO"]').prop("selected", true);
		$('#status option[value="A"]').prop("selected", true);
	}

	function getTypeofProfService(key) {
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_TypeofProfService/getTypeofProfService",
			data: {
				key: key
			},
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
			},
			error: function(data, status) {}
		});
		return obj;
	}

	function UpdateInfo() {
		if ($("#addID").val() == 'insert') {
			var tc = $('#tcode').val();
			var date = new Date($('#ted').val());
			var ed = ((date.getFullYear()) + "" + ("0" + (date.getMonth() + 1)).slice(-2) + "" + ("0" + date.getDate()).slice(-2));
			
			$("#key").val(ed + tc);
		} else {
			$("#key").val(obj['tpikey']);
		}
	}

	$("#TypeofProfServiceTable").on("click", ".ModalDeleteTypeofProfService", function() {
		var data = $(this).data();

		$('#DeleteTypeofProfService').modal({
			backdrop: 'static'
		}).draggable({});
		$("#formID").val('delete');
		$("#deletekey").val(data['key']);
	});