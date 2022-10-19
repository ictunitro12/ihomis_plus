function ISOList() {
	var data = new Object();
	data.id = "isocertified";
	data.link = baseURL + "Ref_Hospital/ISOList";
	data.type = "POST";
	data.paging = false;
/* 	data.info = false;
	data.searching = false;
	data.destroy = true; */
	data.coldef = [{
		targets: [7],
		render: function (data, type, row) {
			switch (data) {
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
		targets: [0, 1, 2, 3, 4, 5, 6, 7, 8],
		orderable: false,
	},
	{
		targets: [4, 6, 7, 8],
		searchable: false,
	},
	{
		targets: [3, 5],
		visible: false,
	}
	];
	loadTable(data);
}

$("#isocertified").on("click", ".ModalEditISO", function () {
	var data = $(this).data();
	var isocode = atob(data['isocode']);
	var isodesc = atob(data['isodesc']);
	var isocertbody = atob(data['isocertbody']);
	var isostat = atob(data['isostat']);

	$('#ModalAddISO').modal({ backdrop: 'static' }).draggable({});
	$("#key").val(isocode);
	$("#isodesc").val(isodesc);
	$("#certbody").val(isocertbody);
	$('#status option[value="' + isostat + '"]').prop("selected", true);
	$("#addID").val('update');
	$("#key").prop('readonly', true);

	var validfrom = atob(data['validfrom']);
	var validfroms = ((validfrom == "1970-01-01 00:00:00 00:00:00") || (validfrom == null)) ? "" : setTimeLocale(validfrom);
	$("#validfrom").val(validfroms);

	var validto = atob(data['validto']);
	var validtos = ((validto == "1970-01-01 00:00:00 00:00:00") || (validto == null)) ? "" : setTimeLocale(validto);
	$("#validto").val(validtos);
});

function AddISO() {
	$('#ModalAddISO').modal({ backdrop: 'static' }).draggable({});
	$("#addID").val('insert');
	$("#key").prop('readonly', false);
	$('#status option[value="A"]').prop("selected", true);
}

$("#isocertified").on("click", ".ModalDeleteISO", function () {
	var data = $(this).data();
	var isocode = atob(data['isocode']);
	var isodesc = atob(data['isodesc']);

	$('#DeleteISO').modal({ backdrop: 'static' }).draggable({});
	$("#delname").text(isodesc);
	$("#formID").val('delete');
	$("#deletekey").val(isocode);
});

function HospitalAddress(hfhudcode) {
	$.ajax({
		type: "POST",
		url: baseURL + "Ref_Hospital/HospitalAddress/" + hfhudcode,
		data: "JSON",
		async: false,
		success: function (data, status) {

			var obj = $.parseJSON(data);
			var str = obj['regcode'].substring(0, 2);
			setRegionInj(str);
			setRegionInj(obj['provcode']);
			$('#selProvnj').removeAttr("disabled");
			setCityInj(obj['ctycode']);
			$('#selCityInj').removeAttr("disabled");
			setBrgyInj(obj['brgy'])
		},
	});
}

function hospitalInfo(code) {
	setHospital(code);
	/* HospitalAddress(code); */


	$.ajax({
		type: "POST",
		url: baseURL + "Ref_Hospital/getHospital/" + code,
		dataType: 'JSON',
		async: true,
		success: function (data) {

			var obj = data;
			console.log(obj);
			$("#hfhudcode").val(obj['hfhudcode']);
			$("#oldfhud").val(obj['hfhudcode']);
			$("#hfhudname").val(obj['hhosname']);
			$("#abbre").val(obj['hhosabbr']);
			$("#typeofhospital option[value='" + obj['hservcap'] + "']").attr("selected", "selected");
			$("#specialtyspecify").val(obj['specialtyspecify']);

			var sc = obj['hservcap'];
			if (sc == 'SD' || sc == 'SO' || sc == 'SC' || sc == 'SOT') {
				$('#specialtyspecify').removeAttr("disabled");
			} else {
				$('#specialtyspecify').removeAttr("enabled");
			}

			$('#typeofhospital').change(function () {
				if ($(this).val() == 'SD' || $(this).val() == 'SO' || $(this).val() == 'SC' || $(this).val() == 'SOT') {
					$('#specialtyspecify').prop("disabled", false);
				} else {
					$('#specialtyspecify').prop("disabled", true);
					$('#specialtyspecify').val("");
				}
			});

			$("#bedcapacity").val(obj['bedcap']);
			setOwner(obj['howner']);
			$("#ownershipspecify").val(obj['ownershipspecify']);

			var os = obj['howner'];
			if (os == 'GOTH' || os == 'PO') {
				$('#ownershipspecify').removeAttr("disabled");
			} else {
				$('#ownershipspecify').removeAttr("enabled");
			}

			$('#selOwner').change(function () {
				if ($(this).val() == 'GOTH' || $(this).val() == 'PO') {
					$('#ownershipspecify').prop("disabled", false);
				} else {
					$('#ownershipspecify').prop("disabled", true);
					$('#ownershipspecify').val("");
				}
			});

			$("#htrauma option[value='" + obj['trauma'] + "']").attr("selected", "selected");
			$("#street").val(obj['hhosstr']);

			var str = obj['provcode'].substring(0, 2);
			setRegion(str);
			setProv(obj['provcode']);
			setCity(obj['ctycode']);
			$('#selCity').removeAttr("disabled");
			setBrgy(obj['bgycode']);

			$("#info_zip").val(obj['hhoszip']);		
			$("#countrycode").val(obj['cntrycode']);
			$("#emailaddress").val(obj['hhosemailadd']);
			$("#contactno").val(obj['telno']);
			$("#faxno").val(obj['faxno']);
			$("#edpmscompany").val(obj['edpmcoycode']);
			$("#epdmsuserid").val(obj['epdmuser']);
			$("#epdmspassword").val(obj['edpmpass']);
			$("#phicuserid").val(obj['ws_id']);
			$("#phicpassword").val(obj['ws_pw']);
			$("#hospcode").val(obj['ws_hospcode']);
			$("#webservicepassword").val(obj['eclaims_webpass']);
			$("#neissnewfhudcode").val(obj['newfhudcode']);
			$("#neissuserid").val(obj['neiss_userid']);
			$("#neisspassword").val(obj['neiss_password']);
			$("#ohsrsusername").val(obj['ohsrs_username']);
			$("#ohsrspassword").val(obj['ohsrs_password']);

			$("#phicbeds").val(obj['hhosmem']);
			$("#phictype").val(obj['phic_accretype']);
			$("#phicaccreditation").val(obj['accno']);
			/* $("#isoaccreditation").val(obj['iso_accreno']); */
			$("#interaccreditation").val(obj['inter_accreno']);
			$("#pcahoaccreditation").val(obj['pcaho_accreno']);


			$("#udrsuserid").val(obj['udrs_username']);
			$("#udrspassword").val(obj['udrs_password']);

			var acc = obj['accdte'];
			var accdate = ((acc == "1970-01-01 00:00:00") || (acc == null)) ? "" : setTimeLocale(acc);
			$("#phicvaliditydate").val(accdate);

			var acc2 = obj['accdteto'];
			var accdate2 = ((acc2 == "1970-01-01 00:00:00") || (acc2 == null)) ? "" : setTimeLocale(acc2);
			$("#phicvaliditydatet").val(accdate2);

			/* var isofrom = obj['iso_validfr'];
			var iso1 = ((isofrom == "1970-01-01 00:00:00") || (isofrom == null)) ? "0000-00-00 00:00:00" : setTimeLocale(isofrom);
			$("#isoFrom").val(iso1);

			var isoto = obj['iso_validto'];
			var iso2 = ((isoto == "1970-01-01 00:00:00") || (isoto == null)) ? "0000-00-00 00:00:00" : setTimeLocale(isoto);
			$("#isoto").val(iso2); */

			var interfrom = obj['inter_validfr'];
			var inter1 = ((interfrom == "1970-01-01 00:00:00") || (interfrom == null)) ? "" : setTimeLocale(interfrom);
			$("#interFrom").val(inter1);

			var interto = obj['inter_validto'];
			var inter2 = ((interto == "1970-01-01 00:00:00") || (interto == null)) ? "" : setTimeLocale(interto);
			$("#interto").val(inter2);

			var validfrom = obj['pcaho_validfr'];
			var valid1 = ((validfrom == "1970-01-01 00:00:00") || (validfrom == null)) ? "" : setTimeLocale(validfrom);
			$("#pcahoFrom").val(valid1);

			var validto = obj['pcaho_validto'];
			var valid2 = ((validto == "1970-01-01 00:00:00") || (validto == null)) ? "" : setTimeLocale(validto);
			$("#pcahoto").val(valid2);

			$("#formIden").val('update');
		},
		error: function (data, status) {
		}
	});
}

$(".toggle-password").click(function () {
	$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});