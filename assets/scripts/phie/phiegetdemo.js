
$('#patPHIE').on('click', function (e) {
	var lastname = $('#info_lname').val();
	var firstname = $('#info_fname').val();
	var middlename = $('#info_mname').val();
	var sex = $('#info_sex').val();
	var dateofbirth = $('#info_dob').val();
	var suffix = $('#info_suffix').val();
	var POSTURL = baseURL + "PHIE/getPatientDemographic";
	$.ajax({
		type: "POST",
		url: POSTURL,
		cache: false,
		async: true,
		data: { lastname: lastname, firstname: firstname, middlename: middlename, suffix: suffix, sex: sex, dateofbirth: dateofbirth },
		success: function (data) {
			ddata = data;
			if (data.code == '130') {
				var cytcode = data.data.PHIE.Current_Address_City;
				var relcode = data.data.PHIE.Religion; 
				getAddressphie(cytcode);
				toastr.success('PHIE Successfully! ', 'Success');
				$('#ModalgetDemographic').modal('show');
				document.getElementById('phiefirstname').innerHTML = (data.data.PHIE.First_Name).toUpperCase();
				document.getElementById('phiemiddlename').innerHTML = (data.data.PHIE.Middle_Name).toUpperCase();
				document.getElementById('phielastname').innerHTML = (data.data.PHIE.Last_Name).toUpperCase();
				document.getElementById('phiesuffix').innerHTML = (data.data.PHIE.Suffix_Name).toUpperCase();
				switch(data.data.PHIE.Sex)
				{
					case 'M': document.getElementById('phiesex').innerHTML = 'MALE';
					break;
					case 'F': document.getElementById('phiesex').innerHTML = 'FEMALE';
					break;
					default : document.getElementById('phiesex').innerHTML = 'UNKNOWN';
					break;
				}
				document.getElementById('phiebirthdate').innerHTML = data.data.PHIE.DateofBirth;
				if (data.data.PHIE.PlaceofBirth == 'NULL') {
					document.getElementById('phieplaceofbirth').innerHTML = 'N/A';
				}
				else { document.getElementById('phieplaceofbirth').innerHTML = (data.data.PHIE.PlaceofBirth).toUpperCase(); }
				switch(data.data.PHIE.Civil_Status)
				{
					case 'S' : document.getElementById('phiecivilstat').innerHTML = 'SINGLE';
					break;
					case 'M' : document.getElementById('phiecivilstat').innerHTML = 'MARRIED';
					break;
					case 'D' : document.getElementById('phiecivilstat').innerHTML = 'DIVORCED';
					break;
					case 'X' : document.getElementById('phiecivilstat').innerHTML = 'SEPARATED';
					break;
					case 'W' : document.getElementById('phiecivilstat').innerHTML = 'WEDOW/WEDOWER';
					break;
					default : document.getElementById('phiecivilstat').innerHTML = 'N/A';
					break;
				}
				if (data.data.PHIE.Nationality == 'NULL') {
					document.getElementById('phienationality').innerHTML = 'N/A';
				}
				else { document.getElementById('phienationality').innerHTML = data.data.PHIE.Nationality; }
				if (data.data.PHIE.Religion == 'NULL') {
					document.getElementById('phiereligion').innerHTML = 'N/A';
				}
				else { getReligiondescphie(relcode);}
				if (data.data.PHIE.BloodType == "NULL") {
					document.getElementById('phiebloodtype').innerHTML = 'N/A';
				}
				else { document.getElementById('phiebloodtype').innerHTML = data.data.PHIE.BloodType; }
				if (data.data.PHIE.PantawidPamilyaMember = 'Y') { document.getElementById('phiepantawidpammem').innerHTML = 'YES'; }
				else { document.getElementById('phiepantawidpammem').innerHTML = 'NO'; }
				//contact information
				if (data.data.PHIE.Contact_Landline == 'NULL') {
					document.getElementById('Contact_Landline').innerHTML = 'N/A';
				}
				else {
					document.getElementById('Contact_Landline').innerHTML = data.data.PHIE.Contact_Landline;
				}
				if (data.data.PHIE.Contact_Mobile == 'NULL') {
					document.getElementById('Contact_Mobile').innerHTML = 'N/A';
				}
				else {
					document.getElementById('Contact_Mobile').innerHTML = data.data.PHIE.Contact_Mobile;
				}
				if (data.data.PHIE.Contact_EmailAddress == 'NULL') {
					document.getElementById('Contact_EmailAddress').innerHTML = 'N/A';
				}
				else { document.getElementById('Contact_EmailAddress').innerHTML = data.data.PHIE.Contact_EmailAddress; }
				//address
				if (data.data.PHIE.Current_Address_StreeName == 'NULL') {
					document.getElementById('Current_Address_StreeName').innerHTML = 'N/A';
				}
				else { document.getElementById('Current_Address_StreeName').val(data.data.PHIE.Current_Address_StreeName); }
				if (data.data.PHIE.Current_Address_SitioPurok == 'NULL') {
					document.getElementById('Current_Address_SitioPurok').innerHTML = 'N/A';
				}
				else { document.getElementById('Current_Address_SitioPurok').innerHTML = data.data.PHIE.Current_Address_SitioPurok; }
				document.getElementById('Current_Address_ZipCode').innerHTML = data.data.PHIE.Current_Address_ZipCode;
				if (data.data.PHIE.Current_Address_Country == 'NULL') {
					document.getElementById('Current_Address_Country').innerHTML = 'PHILIPPINES';
				}
				else { document.getElementById('Current_Address_Country').innerHTML = data.data.PHIE.Current_Address_Country; }
			}
			else {
				toastr.error('No data found in PHIE!', 'Error');
			}
		},
		error: function (data) {
			toastr.error('Error on saving!', 'Error');
		}
	});
});
var ddata;
$('#PhieYesbtn').on('click', function (e) {
	e.preventDefault();
	$('#ModalgetDemographic').modal('hide');
	$('#phie_id').val(ddata.data.PHIE.DOHID);
	$('#info_bplace').val(ddata.data.PHIE.PlaceofBirth);
	$('#info_cs').val(ddata.data.PHIE.Civil_Status);
	// $('#phienationality').val(data.data.PHIE.Nationality);
	setReligion(ddata.data.PHIE.Religion);
	$('#selRel').val(ddata.data.PHIE.Religion);
	//contact information
	$('#info_telno').val(ddata.data.PHIE.Contact_Mobile);
	//address
	setCity(ddata.data.PHIE.Current_Address_City);
	setBrgy(ddata.data.PHIE.Current_Address_Barangay);
	setProv(ddata.data.PHIE.Current_Address_Province);
	$('#info_street').val(ddata.data.PHIE.Current_Address_StreeName);
	$('#selCity').val(ddata.data.PHIE.Current_Address_City);
	$('#selReg').val((ddata.data.PHIE.Current_Address_Province).substring(0, 2));
	$('#selProv').val(ddata.data.PHIE.Current_Address_Province);
	$('#selBrgy').val(ddata.data.PHIE.Current_Address_Barangay);
	$('#info_zip').val(ddata.data.PHIE.Current_Address_ZipCode);
});

function getAddressphie(ctycode) {
	$.ajax({
		url: baseURL + "PHIE_DocUploadPhie/getAddressphie/" + ctycode,
		type: "POST",
		data: 'JSON',
		processData: false,
		contentType: false,
		success: function (data) {
			var dataphie = $.parseJSON(data);
			document.getElementById('Current_Address_Barangay').innerHTML = dataphie.bgyname;
			document.getElementById('Current_Address_City').innerHTML = dataphie.ctyname;
			document.getElementById('Current_Address_Region').innerHTML = dataphie.regname;
			document.getElementById('Current_Address_Province').innerHTML = dataphie.provname;
		},
		error: function (response) {
			toastr.error("Please try again.", "Error");
		},
	});
}
function getReligiondescphie(relcode)
{
	$.ajax({
		url: baseURL + "PHIE_DocUploadPhie/getReligiondesc/" + relcode,
		type: "POST",
		data: 'JSON',
		processData: false,
		contentType: false,
		success: function (data) {
			var dataphie = $.parseJSON(data);
			document.getElementById('phiereligion').innerHTML = (dataphie.reldesc).toUpperCase();
		},
		error: function (response) {
			toastr.error("Please try again.", "Error");
		},
	});
}

